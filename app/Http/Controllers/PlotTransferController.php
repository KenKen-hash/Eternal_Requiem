<?php

namespace App\Http\Controllers;

use App\Models\PlotTransfer;
use App\Models\BurialRecord;
use App\Models\Plot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlotTransferController extends Controller
{
    /**
     * Display a history log of all plot transfers.
     */
    public function index()
    {
        $transfers = PlotTransfer::with(['burialRecord', 'oldPlot', 'newPlot'])
            ->latest('transfer_date')
            ->paginate(15);

        return view('transfers.index', compact('transfers'));
    }

    /**
     * Show the transfer creation form.
     */
    public function create(Request $request)
    {
        // Pre-fill if originating from a specific burial record's page
        $selectedBurial = null;
        if ($request->has('burial_record_id')) {
            $selectedBurial = BurialRecord::with('plot')->findOrFail($request->burial_record_id);
        }

        $burials = BurialRecord::whereNotNull('plot_id')->get(); // Only show buried individuals
        $availablePlots = Plot::where('status', 'available')->get(); // Only allow transferring to empty plots

        return view('transfers.create', compact('burials', 'availablePlots', 'selectedBurial'));
    }

    /**
     * Perform the plot transfer.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'burial_record_id'   => 'required|exists:burial_records,id',
            'new_plot_id'        => 'required|exists:plots,id|different:old_plot_id',
            'transfer_date'      => 'required|date',
            'authorized_by_name' => 'required|string|max:255',
            'reason'             => 'nullable|string|max:255',
            'notes'              => 'nullable|string',
            // File upload rule for authorization papers
            'authorization_doc'  => 'nullable|file|mimes:pdf,jpg,png|max:2048' 
        ]);

        $burial = BurialRecord::findOrFail($validated['burial_record_id']);
        $oldPlotId = $burial->plot_id;

        if (!$oldPlotId) {
            return back()->withErrors(['burial_record_id' => 'The selected individual does not currently have a plot assigned.']);
        }

        $newPlot = Plot::findOrFail($validated['new_plot_id']);
        if ($newPlot->status !== 'available') {
            return back()->withErrors(['new_plot_id' => 'The selected target plot is not available.']);
        }

        // Handle PDF/Document upload if present
        $docPath = null;
        if ($request->hasFile('authorization_doc')) {
            $docPath = $request->file('authorization_doc')->store('transfers', 'public');
        }

        // Run the transfer inside a secure database transaction
        DB::transaction(function () use ($validated, $burial, $oldPlotId, $docPath) {
            
            // 1. Log the transfer record history
            PlotTransfer::create([
                'burial_record_id'            => $burial->id,
                'old_plot_id'                 => $oldPlotId,
                'new_plot_id'                 => $validated['new_plot_id'],
                'transfer_date'               => $validated['transfer_date'],
                'authorized_by_name'          => $validated['authorized_by_name'],
                'authorization_document_path' => $docPath,
                'reason'                      => $validated['reason'],
                'notes'                       => $validated['notes'],
            ]);

            // 2. Update the burial record to link to the new plot
            $burial->update([
                'plot_id' => $validated['new_plot_id']
            ]);

            // 3. Mark the old plot as available
            Plot::where('id', $oldPlotId)->update(['status' => 'available']);

            // 4. Mark the new plot as occupied
            Plot::where('id', $validated['new_plot_id'])->update(['status' => 'occupied']);
        });

        return redirect()->route('transfers.index')
            ->with('success', 'The deceased has been successfully transferred to the new plot.');
    }

    /**
     * Display a specific transfer's details.
     */
    public function show(PlotTransfer $transfer)
    {
        $transfer->load(['burialRecord', 'oldPlot', 'newPlot']);
        return view('transfers.show', compact('transfer'));
    }
}
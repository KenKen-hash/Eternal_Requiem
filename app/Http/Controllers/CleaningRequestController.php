<?php

namespace App\Http\Controllers;

use App\Models\CleaningRequest;
use App\Models\Plot;
use Illuminate\Http\Request;

class CleaningRequestController extends Controller
{
    /**
     * Display a listing of cleaning requests (with filters).
     */
    public function index(Request $request)
    {
        $query = CleaningRequest::with('plot');

        // Filter by status (pending, in_progress, completed)
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        // Filter by payment status
        if ($request->filled('payment_status')) {
            $query->where('payment_status', $request->input('payment_status'));
        }

        $requests = $query->latest('requested_date')->paginate(15)->withQueryString();

        return view('cleanings.index', compact('requests'));
    }

    /**
     * Show the form for creating a new cleaning request.
     */
    public function create()
    {
        // Only show plots that are actually occupied or reserved for selection
        $plots = Plot::whereIn('status', ['occupied', 'reserved'])->get();
        return view('cleanings.create', compact('plots'));
    }

    /**
     * Store a newly created cleaning request.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'plot_id'                  => 'required|exists:plots,id',
            'requester_name'           => 'required|string|max:255',
            'requester_phone'          => 'required|string|max:50',
            'requester_email'          => 'nullable|email|max:255',
            'relationship_to_deceased' => 'nullable|string|max:100',
            'requested_date'           => 'required|date|after_or_equal:today',
            'service_type'             => 'required|string|max:255',
            'fee'                      => 'required|numeric|min:0',
            'payment_status'           => 'required|in:unpaid,paid,waived',
            'notes'                    => 'nullable|string',
        ]);

        CleaningRequest::create($validated);

        return redirect()->route('cleanings.index')
            ->with('success', 'Cleaning request successfully registered.');
    }

    /**
     * Display the specific cleaning request details.
     */
    public function show(CleaningRequest $cleaningRequest)
    {
        $cleaningRequest->load('plot.burialRecords'); // Show details of the plot and who is buried there
        return view('cleanings.show', compact('cleaningRequest'));
    }

    /**
     * Show the form for editing/updating the request.
     */
    public function edit(CleaningRequest $cleaningRequest)
    {
        $plots = Plot::whereIn('status', ['occupied', 'reserved'])->get();
        return view('cleanings.edit', compact('cleaningRequest', 'plots'));
    }

    /**
     * Update the cleaning request.
     */
    public function update(Request $request, CleaningRequest $cleaningRequest)
    {
        $validated = $request->validate([
            'plot_id'                  => 'required|exists:plots,id',
            'requester_name'           => 'required|string|max:255',
            'requester_phone'          => 'required|string|max:50',
            'requester_email'          => 'nullable|email|max:255',
            'relationship_to_deceased' => 'nullable|string|max:100',
            'requested_date'           => 'required|date',
            'status'                   => 'required|in:pending,in_progress,completed,cancelled',
            'service_type'             => 'required|string|max:255',
            'fee'                      => 'required|numeric|min:0',
            'payment_status'           => 'required|in:unpaid,paid,waived',
            'notes'                    => 'nullable|string',
            'staff_notes'              => 'nullable|string',
        ]);

        // If status is transitioning to completed, record the current timestamp
        if ($validated['status'] === 'completed' && $cleaningRequest->status !== 'completed') {
            $validated['completed_at'] = now();
        }

        $cleaningRequest->update($validated);

        return redirect()->route('cleanings.index')
            ->with('success', 'Cleaning request updated successfully.');
    }

    /**
     * Remove the cleaning request.
     */
    public function destroy(CleaningRequest $cleaningRequest)
    {
        $cleaningRequest->delete();

        return redirect()->route('cleanings.index')
            ->with('success', 'Cleaning request deleted.');
    }
}
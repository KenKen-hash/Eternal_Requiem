<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    /**
     * Display a listing of the plots (with status filtering).
     */
    public function index(Request $request)
    {
        $query = Plot::with('burialRecords'); // Eager load burials to avoid N+1 queries

        // Filter by status (available, reserved, occupied)
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        // Filter by section
        if ($request->filled('section')) {
            $query->where('section', $request->input('section'));
        }

        // Search by plot number
        if ($request->filled('search')) {
            $query->where('plot_number', 'like', "%{$request->input('search')}%");
        }

        $plots = $query->paginate(20)->withQueryString();

        return view('plots.index', compact('plots'));
    }

    /**
     * Show the form for creating a new plot.
     */
    public function create()
    {
        return view('plots.create');
    }

    /**
     * Store a newly created plot in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'plot_number' => 'required|string|max:100',
            'section'     => 'required|string|max:100',
            'row'         => 'nullable|string|max:100',
            'status'      => 'required|in:available,reserved,occupied',
            'price'       => 'nullable|numeric|min:0',
            'notes'       => 'nullable|string',
        ]);

        Plot::create($validated);

        return redirect()->route('plots.index')
            ->with('success', 'Plot created successfully.');
    }

    /**
     * Display the specified plot along with who is buried in it.
     */
    public function show(Plot $plot)
    {
        $plot->load('burialRecords'); // Show who is resting here
        return view('plots.show', compact('plot'));
    }

    /**
     * Show the form for editing the specified plot.
     */
    public function edit(Plot $plot)
    {
        return view('plots.edit', compact('plot'));
    }

    /**
     * Update the specified plot in storage.
     */
    public function update(Request $request, Plot $plot)
    {
        $validated = $request->validate([
            'plot_number' => 'required|string|max:100',
            'section'     => 'required|string|max:100',
            'row'         => 'nullable|string|max:100',
            'status'      => 'required|in:available,reserved,occupied',
            'price'       => 'nullable|numeric|min:0',
            'notes'       => 'nullable|string',
        ]);

        $plot->update($validated);

        return redirect()->route('plots.index')
            ->with('success', 'Plot updated successfully.');
    }

    /**
     * Remove the specified plot from storage.
     */
    public function destroy(Plot $plot)
    {
        // Prevent deletion if there are active burial records linked to it
        if ($plot->burialRecords()->exists()) {
            return redirect()->route('plots.index')
                ->with('error', 'Cannot delete this plot because it has associated burial records.');
        }

        $plot->delete();

        return redirect()->route('plots.index')
            ->with('success', 'Plot deleted successfully.');
    }
}
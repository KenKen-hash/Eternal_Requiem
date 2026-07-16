<?php

namespace App\Http\Controllers;

use App\Models\BurialRecord;
use Illuminate\Http\Request;

class BurialRecordController extends Controller
{
    /**
     * Display a listing of the burial records (with search functionality).
     */
    public function index(Request $request)
    {
        $query = BurialRecord::query();

        // Simple search by name or location
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('deceased_first_name', 'like', "%{$search}%")
                  ->orWhere('deceased_last_name', 'like', "%{$search}%")
                  ->orWhere('section', 'like', "%{$search}%")
                  ->orWhere('plot_number', 'like', "%{$search}%");
        }

        $records = $query->latest()->paginate(15);

        return view('burials.index', compact('records'));
    }

    /**
     * Show the form for creating a new burial record.
     */
    public function create()
    {
        return view('burials.create');
    }

    /**
     * Store a newly created burial record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'deceased_first_name' => 'required|string|max:255',
            'deceased_last_name'  => 'required|string|max:255',
            'date_of_birth'       => 'nullable|date',
            'date_of_death'       => 'nullable|date',
            'burial_date'         => 'nullable|date',
            'section'             => 'nullable|string|max:100',
            'plot_number'         => 'nullable|string|max:100',
            'grave_number'        => 'nullable|string|max:100',
            'funeral_home'        => 'nullable|string|max:255',
            'next_of_kin_name'    => 'nullable|string|max:255',
            'next_of_kin_phone'   => 'nullable|string|max:50',
            'notes'               => 'nullable|string',
        ]);

        BurialRecord::create($validated);

        return redirect()->route('burials.index')
            ->with('success', 'Burial record created successfully.');
    }

    /**
     * Display the specified burial record.
     */
    public function show(BurialRecord $burialRecord)
    {
        return view('burials.show', ['record' => $burialRecord]);
    }

    /**
     * Show the form for editing the specified burial record.
     */
    public function edit(BurialRecord $burialRecord)
    {
        return view('burials.edit', ['record' => $burialRecord]);
    }

    /**
     * Update the specified burial record in storage.
     */
    public function update(Request $request, BurialRecord $burialRecord)
    {
        $validated = $request->validate([
            'deceased_first_name' => 'required|string|max:255',
            'deceased_last_name'  => 'required|string|max:255',
            'date_of_birth'       => 'nullable|date',
            'date_of_death'       => 'nullable|date',
            'burial_date'         => 'nullable|date',
            'section'             => 'nullable|string|max:100',
            'plot_number'         => 'nullable|string|max:100',
            'grave_number'        => 'nullable|string|max:100',
            'funeral_home'        => 'nullable|string|max:255',
            'next_of_kin_name'    => 'nullable|string|max:255',
            'next_of_kin_phone'   => 'nullable|string|max:50',
            'notes'               => 'nullable|string',
        ]);

        $burialRecord->update($validated);

        return redirect()->route('burials.index')
            ->with('success', 'Burial record updated successfully.');
    }

    /**
     * Remove the specified burial record from storage.
     */
    public function destroy(BurialRecord $burialRecord)
    {
        $burialRecord->delete();

        return redirect()->route('burials.index')
            ->with('success', 'Burial record deleted successfully.');
    }
}
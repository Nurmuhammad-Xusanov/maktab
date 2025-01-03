<?php

namespace App\Http\Controllers;

use App\Models\schoolMembers;
use Illuminate\Http\Request;

class SchoolMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = schoolMembers::all();
        return view('admin.schoolMembers.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.schoolMembers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'class' => 'required|string|max:255',
            'students' => 'required|string|max:255',
            'teachers' => 'required|string|max:255',
            'graduates' => 'required|string|max:255',
        ]);
        schoolMembers::create($validated);
        return redirect()->route('schoolmembers.index')->with('successs', "Maktab a'zolari muaffaqiyalti qo'shildi!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = schoolMembers::findOrFail($id);
        return view('admin.schoolMembers.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = schoolMembers::findOrFail($id);
    
        $validated = $request->validate([
            'class' => 'required|integer',
            'students' => 'required|integer',
            'teachers' => 'required|integer',
            'graduates' => 'required|integer',
        ]);
    
        $member->update($validated);
    
        return redirect()->route('schoolmembers.index')->with('success', "Maktab a'zolari muaffaqiyalti yangilandi!");
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

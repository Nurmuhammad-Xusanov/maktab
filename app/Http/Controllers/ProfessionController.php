<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professions = Profession::all();
        return view('admin.professions.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.professions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:professions,name|max:255',
        ]);
        Profession::create($request->all());
        return redirect()->route('professions.index')->with('success', 'Kasb muvaqiyatli yaratildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profession = Profession::findOrFail($id);
        return view('admin.professions.edit', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profession $profession)
    {
        $request->validate([
            'name' => 'required|max:255|unique:professions,name,' . $profession->id,
        ]);

        $profession->update($request->all());
        return redirect()->route('professions.index')->with('success', 'Kasb muvaqiyatli yangilandi!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profession $profession)
    {
        $profession->delete();
        return redirect()->route('professions.index')->with('success', "Kasb muvaqiyatli o'chirildi!");
    }
}

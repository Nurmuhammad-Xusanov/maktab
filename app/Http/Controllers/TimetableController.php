<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timetables = Timetable::all();
        return view('admin.timetable.index', compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.timetable.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:pdf,docx|max:5048',
        ]);
    
        // Fayl nomini olish
        $fileName = time() . '.' . $request->file('file')->getClientOriginalExtension();
    
        // Faylni ko'chirish
        $request->file('file')->move(public_path('uploads/timetables'), $fileName);
    
        // Fayl yo'lini saqlash
        $filePath = 'uploads/timetables/' . $fileName;
    
        // Ma'lumotni bazaga yozish
        Timetable::create([
            'title' => $validate['title'],
            'file' => $filePath,
        ]);
    
        return redirect()->route('timetable.index')->with('success', 'Dars jadval muaffaqiyatli qo\'shildi!');
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
    public function edit(Timetable $timetable)
    {
        return view('admin.timetable.edit', compact('timetable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timetable $timetable)
    {
        $timetable->delete();
        return redirect()->route('timetable.index')->with('success', 'Dars jadval muaffaqiyatli o\'chirildi!');
    }
    public function download($id)
    {
        $timetable = Timetable::findOrFail($id);
        $filePath = public_path($timetable->file);
        return response()->download($filePath);
    }
}

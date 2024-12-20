<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Profession;
use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $staff = staff::all();
        return view('admin.staff.index', compact('staff', ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $professions = Profession::all();
        return view('admin.staff.create', compact('categories', 'professions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
        $request->validate([
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'profession_id' => 'required',
            'category_id' => 'required',
            'experience' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

   
        $staff = new Staff();
        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->profession_id = $request->profession_id;
        $staff->category_id = $request->category_id;
        $staff->experience = $request->experience;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/staff'), $imageName);
            $staff->image = 'uploads/staff/' . $imageName; 
        }

        $staff->save(); 

        return redirect()->route('staff.index')->with('success', 'Muaffaqiyatli yaratildi!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $staff = staff::findOrFail($id);
        return view('admin.staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $professions = Profession::all();
        $staff = staff::findOrFail($id);
        return view('admin.staff.edit', compact('staff', 'categories', 'professions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staff = staff::findOrFail($id);
        $request->validate([
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'profession_id' => 'required',
            'category_id' => 'required',
            'experience' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $staff->update($request->all());
        return redirect()->route('staff.index')->with('success', "Muaffaqiyatli yangilandi!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', "Muaffaqiyatli o'chirildi!");
    }
}

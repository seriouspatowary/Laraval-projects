<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentStore;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::all();
        return view('users.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStore $request)
    {
        
        $input = $request->validated();
        Student::create($input);
        return redirect()->back()->withSuccess('Student Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Student::destroy($id);
        return redirect()->back()->withSuccess('Student Deleted Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Student::find($id);
        return view('users.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentStore $request,  $id)
    {
       
        $validatedData = $request->validated();
        unset($validatedData['password']);
        Student::where('id', $id)->update($validatedData);


        return redirect()->back()->withSuccess('Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

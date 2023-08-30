<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = new Student();
        return view('students.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([

            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|numeric',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'country' => 'nullable|string',
            'post_code' => 'nullable|numeric',
        ], [
            'first_name.required' => 'Questo campo è obbligatorio',
            'last_name.required' => 'Questo campo è obbligatorio',
            'age.required' => 'Questo campo è obbligatorio',
            'age.numeric' => 'Questo campo deve essere numerico',
            'post_code.numeric' => 'Questo campo deve essere numerico',
        ]);

        $student = new Student();
        $student->fill($data);
        $student->save();

        return to_route('students.show', $student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([

            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|numeric',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'country' => 'nullable|string',
            'post_code' => 'nullable|numeric',
        ], [
            'first_name.required' => 'Questo campo è obbligatorio',
            'last_name.required' => 'Questo campo è obbligatorio',
            'age.required' => 'Questo campo è obbligatorio',
            'age.numeric' => 'Questo campo deve essere numerico',
            'post_code.numeric' => 'Questo campo deve essere numerico',
        ]);


        $data = $request->all();

        $student->update($data);

        return to_route('students.show', $student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }

    /**
     * .
     */
    public function trash()
    {
        $students = Student::onlyTrashed()->get();
        return view('students.trash', compact('students'));
    }

    public function dropAll()
    {
        $students = Student::onlyTrashed()->forceDelete();
        return to_route('students.trash', compact('students'));
    }

    public function drop(string $id)
    {
        $student = Student::onlyTrashed()->findOrFail($id);
        $student->forceDelete();
        return to_route('students.trash');
    }

    public function restore($id)
    {
        $student = Student::onlyTrashed()->findOrFail($id);
        $student->restore();
        return to_route('students.trash');
    }
}

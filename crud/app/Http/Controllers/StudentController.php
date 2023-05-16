<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StudentPostRequest;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::paginate(3);
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentPostRequest $request):RedirectResponse
    {

        // dd($request->all());
        // $validateData=$request->validate([
        //     'firstname' => 'required|max:255',
        //     'lastname'=>'required|max:10',
        //     'email' => 'required|email|unique:users',
        //     'contact'=>'required|max:10',
        //     'hobbies[]'=>'required',
        //     'gender'=>'required'
        //     ]);
        $students = Student::create($request->all());

        $students->hobbies = implode(',', $request->input('hobbies'));

        $students->save();
        return redirect()->route('students.index')->with('status', 'user created successfully');
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
    // public function edit(Student $student)
    // {

    //     // return view('students.edit',compact('student'));

    // }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());


        return redirect()->route('students.index')
            ->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', ' deleted successfully');
    }
}

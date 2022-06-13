<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentConroller extends Controller
{
    //
    private $subject;
    private $students;
    private $student;

    public function index()
    {
        return view('student.index');
    }

    public function manage()
    {
        $this->students = Student::all();
        // return $this->students;
        return view('student.manage', ['students' => $this->students]);
    }

    public function create(Request $request)
    {
        Student::newStudent($request);
        return redirect()->back()->with('message', 'Student info Save Sucessfully');
//        return implode(", ",$request->subject_name);
//       foreach ($request -> subject as $item){
//           $this->subjects .= $item.',';
//       }
//       return rtrim($this->subjects,', ');
//
    }

    public function edit($id)
    {
        //return($id);
        $this->student = Student::find($id);
        //  return $this->student;
        $this->subjects = explode(",", $this->student->subject);
        // return $this->subjects;
        return view('student.edit', ['student' => $this->student, 'subjects' => $this->subjects]);
    }

    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        return redirect('/manage-student')->with('message', 'Student Info Update Successfully');
    }

    public function delete($id){
     Student::deleteStudent($id);
     return redirect('/manage-student')->with('message', 'Student Info Delete Successfully');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $student){
        return view('StudentIBIK.modules.students.index', ['data' => $student->all()]);
    }

    public function getDataByID(Student $student){
        return view('StudentIBIK.modules.students.show', ['data' => $student]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'npm' => 'required|max:9',
            'name' => 'required|max:25',
            'email' => 'required|max:100',
        ]);

        Student::create($validateData);

        return redirect('/')->with('success' , 'Data sukses disimpan');
    }

    public function edit(Student $student){
        return view('StudentIBIK.modules.students.edit', ['student' => $student]);
    }

    public function update(Request $request, Student $student){
        $validateData = $request->validate([
            'npm' => 'required|max:9',
            'name' => 'required|max:25',
            'email' => 'required|max:100',
        ]);

        $student->where('id', $student->id)->update($validateData);

        return redirect('/')->with('success', 'Data berhasil diedit');
    }

    public function destroy(Student $student){
        $student->delete($student->id);
        return redirect('/')->with('succes', 'Data berhasil dihapus');
    }
}

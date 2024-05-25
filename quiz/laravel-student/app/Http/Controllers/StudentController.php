<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        return view('StudentRegister.modules.products.index', [
            "data" => $student->all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "fullname" => "required|max:25",
            "npm" => "required|max:20",
            "email" => "required|max:50",
            "prodi" => "required|max:20"
        ]);

        Student::create($validateData);

        return redirect('/')->with('success', "Data sukses disimpan");
    }
    public function edit(Student $student)
    {
        return view("StudentRegister.modules.products.edit", [
            "student" => $student
        ]);
    }
    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            "fullname" => "required|max:25",
            "npm" => "required|max:20",
            "email" => "required|max:50",
            "prodi" => "required|max:20"
        ]);
        $student->where("id", $student->id)->update($validateData);
        return redirect('/')->with('success', "Data berhasil diupdate");
    }

    public function destroy(Student $student)
    {
        $student->delete($student->id);
        return redirect('/')->with('success', "Data berhasil dihapus");
    }

    public function getDataByID(Student $student)
    {
        return view("StudentRegister.modules.products.show", [
            "data" => $student
        ]);
    }
}

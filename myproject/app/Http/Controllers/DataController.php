<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Student;
use App\Models\Category;
use App\Http\Resources\StudentResource; 

class DataController extends Controller
{
    public function showStudents()
{
    $students = Student::all();
    return StudentResource::collection($students);
}

public function showStudent($id)
{
    $student = Student::findOrFail($id);
    return new StudentResource($student);
}

public function storeStudent(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'age' => 'required|integer',
        'university' => 'required|string|max:255',
        'faculty' => 'required|string|max:255',
    ]);

    $student = Student::create($request->all());

    return new StudentResource($student);
}

public function updateStudent(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'age' => 'required|integer',
        'university' => 'required|string|max:255',
        'faculty' => 'required|string|max:255',
    ]);

    $student = Student::findOrFail($id);
    $student->update($request->all());

    return new StudentResource($student);
}

public function deleteStudent($id)
{
    $student = Student::findOrFail($id);
    $student->delete();

    return response()->json(['message' => 'Студент удален успешно']);
}
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return StudentResource::collection($students);
    }


    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        return StudentResource::make($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return StudentResource::make($student);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return StudentResource::make($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

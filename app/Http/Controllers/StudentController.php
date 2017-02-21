<?php

namespace App\Http\Controllers;

use App\Student;
use App\Level;
use App\Schoolyear;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::orderBy('lname')->orderBy('fname')->orderBy('mname')->paginate(15);

        return view('student.index')->withStudents($students);
    }

    public function create()
    {
        $levels = Level::orderBy('description')->get();
        $schoolyears = Schoolyear::orderBy('description')->get();

        return view('student.create')->withLevels($levels)->withSchoolyears($schoolyears);
    }

    public function store(Request $request)
    {
        $student = new Student();

        $student->level_id          = $request->level_id;
        $student->schoolyear_id     = $request->schoolyear_id;
        $student->fname             = $request->fname;
        $student->mname             = $request->mname;
        $student->lname             = $request->lname;
        $student->sex               = $request->sex;
        $student->bdate             = $request->bdate;
        $student->bplace            = $request->bplace;
        $student->address           = $request->address;
        $student->contactno         = $request->contactno;
        $student->email             = $request->email;
        $student->citizenship       = $request->citizenship;
        $student->civilstatus       = $request->civilstatus;
        $student->religion          = $request->religion;
        $student->father_fname      = $request->father_fname;
        $student->father_mname      = $request->father_mname;
        $student->father_lname      = $request->father_lname;
        $student->father_occupation = $request->father_occupation;
        $student->father_contactno  = $request->father_contactno;
        $student->mother_fname      = $request->mother_fname;
        $student->mother_mname      = $request->mother_mname;
        $student->mother_lname      = $request->mother_lname;
        $student->mother_occupation = $request->mother_occupation;
        $student->mother_contactno  = $request->mother_contactno;

        $student->save();

        return redirect()->route('student.show', [$student->id]);
    }

    public function show(Student $student)
    {
        return view('student.show')->withStudent($student);
    }

    public function edit(Student $student)
    {
        $levels      = Level::orderBy('description')->get();
        $schoolyears = Schoolyear::orderBy('description')->get();

        return view('student.edit')->withStudent($student)->withLevels($levels)->withSchoolyears($schoolyears);
    }

    public function update(Request $request, Student $student)
    {
        $student->level_id          = $request->level_id;
        $student->schoolyear_id     = $request->schoolyear_id;
        $student->fname             = $request->fname;
        $student->mname             = $request->mname;
        $student->lname             = $request->lname;
        $student->sex               = $request->sex;
        $student->bdate             = $request->bdate;
        $student->bplace            = $request->bplace;
        $student->address           = $request->address;
        $student->contactno         = $request->contactno;
        $student->email             = $request->email;
        $student->citizenship       = $request->citizenship;
        $student->civilstatus       = $request->civilstatus;
        $student->religion          = $request->religion;
        $student->father_fname      = $request->father_fname;
        $student->father_mname      = $request->father_mname;
        $student->father_lname      = $request->father_lname;
        $student->father_occupation = $request->father_occupation;
        $student->father_contactno  = $request->father_contactno;
        $student->mother_fname      = $request->mother_fname;
        $student->mother_mname      = $request->mother_mname;
        $student->mother_lname      = $request->mother_lname;
        $student->mother_occupation = $request->mother_occupation;
        $student->mother_contactno  = $request->mother_contactno;

        $student->save();

        return redirect()->route('student.show', [$student->id]);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index');
    }
}

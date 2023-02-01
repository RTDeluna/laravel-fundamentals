<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Pagination\Paginator;
use Symfony\Component\Console\Input\Input;

class StudentController extends Controller
{

    public function index()
    {
        $data = array('data' => DB::table('students')->orderBy('created_at','desc')->simplePaginate(42));

        if(request('student')){
            $input = request()->input('student');
            $data = array('data' => DB::table('students')->where('first_name', $input)->orWhere('last_name',$input)->orderBy('created_at', 'desc')->simplePaginate(12));
        }
        elseif (request('sort')){
            $sort = request()->input('sort');
            $order = request()->input('order');
            $data = array('data' => DB::table('students')->orderBy($sort,  $order)->simplePaginate(42));

        }
        return view('students.index', $data);

    }

    public function show($id)
    {
        //query sa db
        $data = Student::findOrFail($id);
        return view('students.index', ['student' => $data]);
    }
    public function create()
    {
        return view('students.index')->with('title', 'Add New');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => ['required', 'min:2'],
            "last_name" => ['required', 'min:2'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email', Rule::unique('students', 'email')],
        ]);

        Student::create($validated);

        return redirect('/')->with('message', 'New Student was added successfully!');
    }

    public function update(Request $request, Student $student)
    {
        // dd($request);
        $validated = $request->validate([
            "first_name" => ['required', 'min:2'],
            "last_name" => ['required', 'min:2'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email'],
        ]);

        $student->update($validated);

        return back()->with('message', 'Data was successfully updated');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/')->with('message', 'Data was successfully deleted');
    }
}

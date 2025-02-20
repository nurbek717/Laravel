<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;



class StudentController extends Controller
{
  public function index(){
    $users = Student::latest()->paginate(3);
    return view('/students.index' , [
        'users' => $users ,
    ]);
  }

  public function create(){
     return view('/students.create');
  }


  public function store(){
        request()->validate(
            [
            'name'     => ['required', 'min:2'],
            'lastname' => ['required', 'min:3'],
            ],
            [
                'name.required' => "Ismingizni kiritishingiz shart!",
                'name.min'=> "Kamida 2ta belgidan iborat bo'loshi kerak!",
                'lastname.required'=> "Familyangizni kiritishingiz shart!",
                'lastname.min'=> "Kamida 3ta belgidan iborat bo'loshi kerak!",
            ]
    );



        $Student=Student::create([
            'name'     => request('name'),
            'lastname' => request('lastname'),
            'user_id' => Auth::id(),
        ]);
      \Illuminate\Support\Facades\Mail::to($Student->user->email)->queue(
          new \App\Mail\StudentPosted($Student)
      );
        return redirect('/students');
 }


    public function show(Student $student){
        return view ('students.show', ['user' => $student]);
    }



    public function edit(Student $student){

      Gate::authorize('edit', $student);
        return view ('students.edit', ['user' => $student]);
    }


    public function update(Student $student){

        Gate::authorize('edit', $student);
            request()->validate(
                [
                'name'     => ['required', 'min:2'],
                'lastname' => ['required', 'min:3'],
                ]
        );
        $student->name = request('name');
        $student->lastname = request('lastname');
        $student->save();
        \Illuminate\Support\Facades\Mail::to($student->user->email)->queue(
            new \App\Mail\StudentUpdate($student)
        );
        return redirect('/students/' . $student->id);
        }

        public function destroy(Student $student){
            Gate::authorize('edit', $student);
            $student -> delete();

            return redirect('/students');
        }
    }

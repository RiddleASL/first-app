<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        echo view("welcome");
        // 1. Using raw SQL queiries
        // $users = DB::select('select * from users ');
        // dd($users);

        // 2. Query Builder
        // $users = DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($users);

        // 3. Eloquent ORM
        // $students = Student::select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($students);

        // foreach($students as $student){
        //     echo $student->name. "<br>";
        // }

        // $student = new Student();
        // $student->name = "Hannahh";
        // $student->email = "Hannagh@email.com";
        // $student->save();
    }
}

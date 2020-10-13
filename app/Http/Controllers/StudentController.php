<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studenti(){
      $data = config('students');
      return view('studenti',compact('data'));
    }

//     protected $students;
//
//     public function _construct(){
//       $this->getAllStudent();
//     }
//     protected function getAllStudent(){
//       $this->students = config('students');
//     }
//     public function studenti(){
//       $data=$this->students;
//       return view('students',compact('data'));
//     }
//     public function show($id){
//       dd($his->$students[$id]);
//     }
 }

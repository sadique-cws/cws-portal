<?php

namespace App\Http\Controllers;
use App\models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['courses'] = Course::all();
        return view("home",$data);
    }
    public function view($id){
        $data['item'] = Course::find($id);
        return view("viewCourse",$data);
    }
}

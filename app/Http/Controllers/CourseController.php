<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses'] = Course::all();
        return view("admin.manageCourse",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view("admin.addCourse");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $data = new Course();
        $file = $request->image->getClientOriginalName();
        
        $data->title = $request->title;
        $data->duration = $request->duration;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->description = $request->description;
        $request->image->move(public_path("course_images"), $file);
        $data->image = $file;
        $data->save();

        return redirect()->route('course.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $data['course'] = $course;
        return view("admin.editCourse",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'description' => 'required',
        ]);

        // $file = $request->image->getClientOriginalName();
        $data = $course;
        $data->title = $request->title;
        $data->duration = $request->duration;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->description = $request->description;
        // $request->image->move(public_path("course_images"), $file);
        // $data->image = $file;
        $data->save();

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}

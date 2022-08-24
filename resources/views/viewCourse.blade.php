@extends('base')

@section('content')
  
    <div class="flex gap-5 my-4 px-10">
        <div class="w-2/6">
            <img src="{{asset("course_images/".$item->image)}}" class="shadow" alt="">
        </div>
      <div class="w-4/6">
            <div class="bg-white rounded-lg border shadow">
                <div class="p-2">
                    <h2 class="text-3xl font-bold uppercase">{{$item->title}}</h2>
                    <div class="flex mt-2 gap-2">
                        <span class="bg-teal-800 flex items-center gap-2 font-thin text-sm text-white  px-2 py-1 rounded-full"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                          </svg>
                           {{$item->duration}} Months</span>
                        <span class="bg-orange-800 flex items-center gap-2 font-thin text-sm text-white  px-2 py-1 rounded-full"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                          </svg>
                          
                           Sadique Hussain</span>
                    </div>  
                    
                    <p class="mt-3 text-lg leading-8 text-justify">
                        {{$item->description}}
                    </p>

                    <div class="flex items-end gap-2">
                        <h1 class="font-bold text-6xl text-red-600">₹ {{$item->discount_price}}</h1>
                        <h2 class=" font-semibold text-4xl text-gray-900 line-through">₹{{$item->price}}</h2>
                    </div>
                    <div class="flex gap-3 mt-3">
                        <a href="" class="bg-green-800 px-3 py-2 rounded text-white">Join Course</a>
                        <a href="" class="bg-gray-600 px-3 py-2 rounded text-white">Add in Wishlist</a>
                    </div>
                </div>
                </div>
    </div>
      </div>

@endsection
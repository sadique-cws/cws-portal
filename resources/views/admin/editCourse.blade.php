@extends("admin.adminBase")


@section('content')
    <div class="flex">
        @include('admin.side')

        <div class="w-5/6">
           <form action="{{route('course.update',$course)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("put")

            <div class="grid grid-cols-3 gap-4 px-32 py-5">
                <div class="mb-3 flex flex-col">
                    <label for="">Title</label>
                    <input type="text" value="{{$course->title}}" name="title" class="border border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="">Duration</label>
                    <input type="number"  value="{{$course->duration}}" name="duration" class="border border-gray-400 py-2 px-1 rounded">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="">price</label>
                    <input type="number"  value="{{$course->price}}" name="price" class="border border-gray-400 py-2 px-1 rounded" placeholder="enter price">
                </div> 
                <div class="mb-3 flex flex-col">
                
                    <label for="">discount_price</label>
                    <input type="number"  value="{{$course->discount_price}}" name="discount_price" class="border border-gray-400 py-2 px-1 rounded">
                </div>
              
                <div class="mb-3 flex flex-col col-span-3">
                    <label for="">Description</label>
                    <textarea name="description" cols="30" rows="10" class="border border-gray-400 py-2 px-1 rounded">
                        {{$course->description}}
                    </textarea>
                </div>
                <div class="mb-3 flex flex-col">
                    <input type="submit" value="Update Data" class="bg-green-800 hover:bg-green-900 text-white px-3 py-2 text-2xl">
                </div>
            </div>
           </form>
        </div>
    </div>
@endsection
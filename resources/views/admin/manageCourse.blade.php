@extends("admin.adminBase")


@section('content')
    <div class="flex">
        @include('admin.side')

        <div class="w-5/6">
            <div class="flex justify-between px-4 mt-4 items-center">
                <h2 class="text-2xl font-bold font-sans">Manage Courses</h2>

                <a href="{{route('course.create')}}" class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-800">Add New Course</a>
            </div>
            <div class="px-3 mt-4">
                <table class="border-collapse border w-full  border-slate-400 ">
                    <tr class="bg-gray-200">
                        <th class="border border-slate-400">id</th>
                        <th class="border border-slate-400">name</th>
                        <th class="border border-slate-400">duration</th>
                        <th class="border border-slate-400">fees</th>
                        <th class="border border-slate-400">Action</th>
                    </tr>
                    @foreach ($courses as $item)
                    <tr class="bg-gray-5 0">
                        <td class="border border-slate-400 p-1">{{$item->id}}</td>
                        <td class="border border-slate-400 p-1">{{$item->title}}</td>
                        <td class="border border-slate-400 p-1">{{$item->duration}}</td>
                        <td class="border border-slate-400 p-1"><del>{{$item->price}}</del>
                        {{$item->discount_price}}
                        </td>
                       
                        <td class="border flex p-2 gap-3 border-slate-400">
                            <a href="{{route("course.edit",$item)}}" class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700">Edit</a>
                            <form method="POST" action="{{route('course.destroy',$item)}}">
                                @csrf
                                @method("delete") 
                                <input type="submit" class="bg-rose-600 text-white px-3 py-2 rounded hover:bg-rose-700" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
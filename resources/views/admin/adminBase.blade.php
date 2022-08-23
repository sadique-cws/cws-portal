<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="bg-black py-4 shadow-lg flex justify-between px-10 items-center">
        <h1 class="font-bold font-sans uppercase text-2xl text-purple-700">Cws Portal</h1>
       
        <ul class="flex gap-3">
            <li><a href="" class="font-semibold">Home</a></li>
            <li><a href="" class="px-3 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded">Logout</a></li>
        </ul>
    </div>


    @section('content')
        @show



</body>
</html>
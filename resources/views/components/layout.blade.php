<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    @vite('resources/css/app.css')
</head>
<header class="flex justify-between items-center">
    <div class="text-3xl text-slate-400">App.</div>
    @auth
        <div class="flex gap-2">
        <span class=" text-slate-800 font-bold">Hi,{{Auth::user()->name}}</span>
        <a href="/create">Add Post</a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit"> Logout</button>
        </form>
    </div>
    @endauth

    @guest
        <div class="flex gap-2">
        <a href="/login" class="border-1 border-slate-400 bg-slate-300 p-1 rounded-lg ">login</a>
         </div>
    @endguest
    
</header>
@if (session('success'))
    <div class="bg-green-100 text-green-500">{{session('success')}}</div>
@endif
<body>
    {{$slot}}
</body>
</html>
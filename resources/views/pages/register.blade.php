@extends('layouts.welcome')

@section('content')
<form action="{{route('register.post')}}" method="POST">
    @csrf
    <div class="w-screen h-screen flex flex-col justify-center items-center gap-y-6">
        <div class="flex flex-row gap-x-6">
            <div>
                <h3 class="text-center mb-2 font-bold">Username</h3>
                <input class="block border-2 border-gray-500 rounded outline-none" type="text" name="name">
            </div>
            <div>
                <h3 class="text-center mb-2 font-bold">E-mail</h3>
                <input class="block border-2 border-gray-500 rounded outline-none" type="text" name="email">
            </div>
            <div>
                <h3 class="text-center mb-2 font-bold">Password</h3>
                <input class="block border-2 border-gray-500 rounded outline-none" type="password" name="password">
            </div>
        </div>
        <button class="px-5 py-2 uppercase font-bold bg-green-600 text-white text-sm rounded" type="submit">Submit</button>
    </div>
</form>
@endsection

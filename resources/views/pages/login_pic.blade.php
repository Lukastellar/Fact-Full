@extends('layouts.welcome')

@section('content')
<form action="{{route('login.post')}}" method="POST">
    @csrf
    <div class="w-screen h-screen flex flex-col justify-center items-center gap-y-6">
        <div class="bg-gray-500" id="1">
            <div class="flex flex-row gap-x-6">
                <div>
                    <h3 class="text-center mb-2 font-bold">Username</h3>
                    <input class="block border-2 border-gray-500 rounded outline-none" type="text" name="name">
                </div>
                <div>
                    <h3 class="text-center mb-2 font-bold">Password</h3>
                    <input class="block border-2 border-gray-500 rounded outline-none" type="password" name="password">
                </div>
            </div>
            <button class="px-5 py-2 uppercase font-bold bg-green-600 text-white text-sm rounded" type="submit">Submit</button>
        </div>
        <div id="2">

        </div>
    </div>
</form>
@endsection
{{-- Picture random

 <input id="text" type="text">
    <p id="out"></p>
    <img id="random_avatar" class="w-32 h-32" src="" alt="ble">
    <script>
        $('#text').on('keyup', (function(){
            let seed = $(this).val();
            let source = `https://avatars.dicebear.com/4.6/api/micah/${seed}.svg?mouth=laughing&background=%23000051`;
            $('#random_avatar').attr('src', source)
        }))()
    </script>
--}}

{{-- Old template
    <div class="w-screen h-screen flex flex-col justify-center items-center gap-y-6">
        <div class="flex flex-row gap-x-6">
            <div>
                <h3 class="text-center mb-2 font-bold">Username</h3>
                <input class="block border-2 border-gray-500 rounded outline-none" type="text" name="name">
            </div>
            <div>
                <h3 class="text-center mb-2 font-bold">Password</h3>
                <input class="block border-2 border-gray-500 rounded outline-none" type="password" name="password">
            </div>
        </div>
        <button class="px-5 py-2 uppercase font-bold bg-green-600 text-white text-sm rounded" type="submit">Submit</button>
    </div>
--}}

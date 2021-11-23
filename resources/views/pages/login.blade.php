@extends('layouts.welcome')

@section('content')
<form action="{{route('login.post')}}" method="POST">
    @csrf
    <div class="w-screen h-screen flex flex-col justify-center items-center gap-y-6 bg-yellow-100">
        <div class="flex flex-row gap-x-6">
            <div>
                <h3 class="text-center mb-2 font-bold">Username</h3>
                <input id="name" class="block border-2 border-gray-500 rounded outline-none" type="text" name="name">
            </div>
            <div>
                <h3 class="text-center mb-2 font-bold">Password</h3>
                <input id="password" class="block border-2 border-gray-500 rounded outline-none" type="password" name="password">
            </div>
        </div>
        <button id="submit" class="px-5 py-2 uppercase font-bold bg-gray-800 text-white text-sm opacity-75 rounded" type="submit" disabled>Submit</button>
    </div>
</form>
<script>
    $(':text, :password').on('keyup', function(){
        let password = $('#password').val().length;
        let username = $('#name').val().length;
        let button = $('#submit');
        if( username > 0 && password > 0 ){
            button.stop(true).delay(200).animate({ opacity: '1', }, 600)
            button.removeAttr('disabled')
        } else{
            button.stop(true).delay(200).animate({ opacity: '0.75', }, 600)
            button.attr('disabled', true)
        }
    })
</script>
@endsection

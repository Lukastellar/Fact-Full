@extends('layouts.welcome')

@section('content')
<form action="{{route('login')}}" method="POST">
    @csrf
    <div class="w-screen h-screen flex flex-col justify-center items-center gap-y-6 bg-yellow-200">
        <div class="credentials flex flex-row gap-x-6">
            <div>
                <h3 class="text-center mb-2 font-bold">Username</h3>
                <input id="name" class="block rounded" type="text" name="name">
                @error('name') <p class="error-msg"> {{'*'.$message}} </p> @enderror
            </div>
            <div>
                <h3 class="text-center mb-2 font-bold">Password</h3>
                <input id="password" class="block rounded" type="password" name="password">
                @error('password') <p class="error-msg"> {{'*'.$message}} </p> @enderror
            </div>
        </div>
        <div>
            <label for="remember">Upamti me</label>
            <input id="remember" class="form-check-input align-middle" type="checkbox" name="remember" value="1">
        </div>
        <button id="submit" class="px-5 py-2 uppercase font-bold bg-gray-800 text-white text-sm opacity-75 hover:opacity-100 transition-opacity duration-500 rounded" type="submit" disabled>Submit</button>
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
    });
</script>
@endsection

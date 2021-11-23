@extends('layouts.welcome')

@section('content')
<form action="{{route('register.post')}}" method="POST">
    @csrf
    <div class="flex flex-row overflow-hidden">
        <!-- Section 1 -->
       <div id="s_1" class="flex-none w-screen h-screen flex flex-col justify-center items-center gap-y-6 bg-green-100">
            <div class="flex flex-row gap-x-6">
                <div>
                    <h3 class="text-center mb-2 font-bold">Username</h3>
                    <input class="block border-2 border-gray-500 rounded outline-none" type="text" name="name">
                </div>
                <div>
                    <h3 class="text-center mb-2 font-bold">E-mail</h3>
                    <input class="block border-2 border-gray-500 rounded outline-none" type="email" name="email">
                </div>
                <div>
                    <h3 class="text-center mb-2 font-bold">Password</h3>
                    <input class="block border-2 border-gray-500 rounded outline-none" type="password" name="password">
                </div>
            </div>
            <button id="forward" class="px-5 py-2 uppercase font-bold bg-green-600 text-white text-sm rounded" type="button">Next</button>
        </div>
        <!-- Section 2 -->
        <div id="s_2" class="flex-none inline-flex w-screen h-screen flex flex-col justify-center items-center gap-y-6 bg-yellow-100">
            <div class="flex flex-col gap-y-6 justify-center items-center">
                <h1 class="font-bold text-xl text-gray-800">Customize your profile picture: </h1>
                <input id="seed" class="w-48 py-1.5 px-2 pl-3 rounded outline-none" type="text" placeholder="Type your favourite name !">
                <img id="random_avatar" class="w-32 h-32" style="border-radius: 20%"
                     src="https://avatars.dicebear.com/4.6/api/micah/hello.svg?mouth=laughing&background=%23000051" alt="ble">
                <select id="sprites" class="w-48 outline-none text-center rounded pl-3">
                    <option value="micah" selected>Micah</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="identicon">Identicon</option>
                    <option value="initials">Initials</option>
                    <option value="avataaars">Avataaars</option>
                </select>
                <input id="color" class="w-48 bg-white" type="color">
            </div>
            <div>
                <button id="backwards" class="px-5 py-2 uppercase font-bold bg-green-600 text-white text-sm rounded" type="button">
                    <i class="relative -left-1.5 fas fa-long-arrow-alt-left"></i> Back
                </button>
                <button class="px-5 py-2 uppercase font-bold bg-green-600 text-white text-sm rounded" type="submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</form>
<script>
    $('#forward').on('click', function(){
        $('#s_2').animate({
            marginLeft: "-100%"
        }, 1200)
    })
    $('#backwards').on('click', function(){
        $('#s_2').animate({
            marginLeft: "0%"
        }, 1200)
    })

    let sprites = 'male',
        color = 'background=%23000000',
        seed = '',
        source = '';

    $('#sprites').on('change', function(){
        sprites = $(this).val();
        source = `https://avatars.dicebear.com/4.6/api/${sprites}/${seed}.svg?${color}`;
        $('#random_avatar').attr('src', source)
    })
    $('#color').on('input', function(){
        color = 'background=%23' + $(this).val().substring(1);
        source = `https://avatars.dicebear.com/4.6/api/${sprites}/${seed}.svg?${color}`;
        $('#random_avatar').attr('src', source)
    })
    $('#seed').on('input', function(){
        seed = $(this).val();
        source = `https://avatars.dicebear.com/4.6/api/${sprites}/${seed}.svg?${color}`;
        $('#random_avatar').attr('src', source)
    })
</script>
@endsection

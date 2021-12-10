@extends('layouts.backend')
@extends('layouts.fact_nav')
@section('content')
    <div class="w-screen py-20 px-14 w-screen overflow-x-hidden" style="background-color: #f9f9f9f0; height: fit-content;">
        <div class="mb-6">
            <input id="search" class="block pl-4 mx-auto" type="text" name="search" placeholder="Type fact, title or id">
        </div>
        <div class="flex justify-center gap-x-8 w-full h-full">
            @foreach($facts_row as $row)
                <div class="flex flex-col gap-y-5">
                    @foreach($row as $fact)
                        <div class="item flex flex-col relative text-center p-5 rounded-2xl">
                            <h1 class="mt-2 mb-3 font-bold text-md"> {{ $fact->title }}</h1>
                            <h2 class="absolute font-semibold text-sm top-1.5 left-2.5"> #{{ $fact->id }} </h2>
                            <p class="text-center"> {{$fact->description}} </p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <script>
        // TODO: Prikazati podatke na ekran
        $('#search').on('keyup', function(){
            let query = $(this).val()
            $.ajax({
                url: '/fact/health',
                type: 'GET',
                data:{ 'search':query },
                success: function(data){
                    console.log(data)
                }
            })
        });
        $('.item').each((index, element) => {
            let random = Math.floor( Math.random() * 360 )
            element.style.backgroundColor = `hsl( ${random + 'deg'} 100% 92%)`
        })
    </script>
@endsection

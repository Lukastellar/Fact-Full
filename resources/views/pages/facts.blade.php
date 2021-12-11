@extends('layouts.backend')
@extends('layouts.fact_nav')
@section('content')
    <div class="w-screen py-20 px-14 overflow-x-hidden" style="background-color: #f9f9f9f0; min-height: 100vh;">
        <div class="mb-6">
            <input id="search" class="block pl-4 mx-auto" type="text" name="search" placeholder="Type fact, title or id">
        </div>
        <div class="flex justify-center gap-x-8 w-full h-full">
            @foreach($facts_row as $row)
                <div class="flex flex-col gap-y-5">
                    @foreach($row as $fact)
                        <div class="item flex flex-col relative text-center rounded-2xl">
                            <div class="item-menu">
                                <div class="item-arrow">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                                <a href="">
                                    <i class="fas fa-compass"></i>
                                </a>
                            </div>
                            <div class="item-text">
                                <h1 class="mb-3 font-bold text-md"> {{ $fact->title }} </h1>
                                <h2 class="absolute font-semibold text-sm top-1.5 left-2.5"> #{{ $fact->id }} </h2>
                                <p class="text-center"> {{$fact->description}} </p>
                            </div>
                            <div class="item-votes">
                                <button class="vote-btn like">
                                    <i class="far fa-thumbs-up"></i>
                                     <span class="count-liked">123</span>
                                </button>
                                <button class="vote-btn dislike">
                                    <i class="far fa-thumbs-down"></i>
                                    <span class="count-disliked">123</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

       {{--
       Older version
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
        --}}

        </div>
    </div>
    <script>
        // Like-Dislike funkcija
        $('.item-votes').on('click','.vote-btn', function() {
            let sibling = $(this).siblings().children('i');
            $(this).children('i').toggleClass('far fas');
            sibling.hasClass('fas') ? sibling.toggleClass('far fas') : '';
        });

        // TODO: Napravi GUI od podataka
        // Timer za cekanje na vrednost teksta koji se upisuje
        $(function() {
            let timer;
            $("#search").keyup(function() {
                let query = $(this).val();
                // Preuzmi podatke sa API-a
                if(query.length !== 0){
                    clearTimeout(timer);
                    let ms = 400; // milliseconds
                    let val = this.value;
                    timer = setTimeout(function() {
                        $.ajax({
                            url: '/api',
                            type: 'GET',
                            data: { 'search': query },
                            success: function(data){
                                console.log(data)
                            }
                        })
                    }, ms);
                }

            });
        });

        $('#search').on('keyup', function(){


        });

        $('.item').each((index, element) => {
            let random = Math.floor( Math.random() * 360 )
            element.style.backgroundColor = `hsl( ${random + 'deg'} 100% 92%)`
        })
    </script>
@endsection

@extends('layouts.backend')
{{--@extends('layouts.fact_nav')--}}
@section('content')
    <div class="w-screen py-20 px-14 overflow-x-hidden" style="background-color: #f9f9f9f0; min-height: 100vh;">
        <div class="mb-6">
            <input id="search" class="block pl-4 mx-auto" type="text" name="search" placeholder="Type fact, title or id">
        </div>
        <div class="items-row-wrapper flex justify-center gap-x-8 w-full h-full">
            @foreach($facts_row as $row)
                <div class="items-row flex flex-col gap-y-5">
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
                                <h2 class="absolute font-semibold text-sm top-1.5 left-2.5">#<span id="fact-id">{{ $fact->id }}</span> </h2>
                                <p class="text-center"> {{$fact->description}} </p>
                            </div>
                            <div class="item-votes">
                                <button class="vote-btn like" value="1"  onclick="vote(this)">
                                    <i class="{{ Auth::check() && $user_vote->find($fact->id) && $user_vote->find($fact->id)->pivot->is_like == 1 ? 'fas' : 'far'}} fa-thumbs-up"></i>
                                     <span class="count-liked">{{$fact->likes}}</span>
                                </button>
                                <button class="vote-btn dislike" value="0" onclick="vote(this)">
                                    <i class="{{ Auth::check() && $user_vote->find($fact->id) && !$user_vote->find($fact->id)->pivot->is_like? 'fas' : 'far'}} fa-thumbs-down"></i>
                                    <span class="count-disliked">{{$fact->dislikes}}</span>
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
        colorizeItems();

        @if(!Auth::check())
            $('.vote-btn').attr('disabled', true);
        @endif

        // Like-Dislike funkcija
        function vote(e) {
            let btn = jQuery(e);
            let icon = btn.children('i');
            let icon_sibling = btn.siblings().children('i');
            let fact_id = btn.parent().parent().find('.item-text > h2 > #fact-id').text();
            let text_elem = btn.children('span');
            let text_val = parseInt(text_elem.text());
            let text_elem_sibling = btn.siblings().children('span');
            let text_val_sibling = parseInt(text_elem_sibling.text());
            let vote_val = parseInt(btn.val());

            // Toggle text +1/-1
            if(icon.hasClass('far') && icon_sibling.hasClass('far')){
                text_elem.text(++text_val);
            } else if(icon_sibling.hasClass('fas')){
                text_elem.text(++text_val);
                text_elem_sibling.text(--text_val_sibling);
            } else{
                text_elem.text(--text_val)
                vote_val = 3;
            }

            // Toggles class

                icon.toggleClass('far fas');
                icon_sibling.hasClass('fas') ? icon_sibling.toggleClass('far fas') : '';

            $.ajax({
                url: '/api/like',
                type: 'GET',
                data: {
                    'fact_id': fact_id,
                    'vote_val': vote_val
                },
            });
        }

        // Timer za cekanje na vrednost teksta koji se upisuje
        $(function() {
            let timer;
            $("#search").on('keyup', function() {
                let query = $(this).val();
                let row_wrapper = $('.items-row-wrapper');

                // Preuzmi podatke sa API-a
                if(query.length !== 0){
                    clearTimeout(timer);
                    let ms = 400; // milliseconds
                    timer = setTimeout(function() {
                        $.ajax({
                            url: '/api',
                            type: 'GET',
                            data: { 'search': query },
                            success: function(xhr){
                                console.log(xhr)
                                const data = xhr.data;
                                const user_vote = xhr.user_vote;
                                row_wrapper.empty();

                                data.forEach((arr, arr_index) => {
                                    row_wrapper.append('<div class="items-row flex flex-col gap-y-5">');
                                    $(dataToHtml(arr, user_vote)).appendTo( $('.items-row')[arr_index] );
                                });

                                colorizeItems();
                            }
                        });
                    }, ms);
                }

            });
        });

        // AJAX items to html
        function dataToHtml(arr, user_vote){
            let html = '';
            console.log(arr, user_vote)
            arr.forEach((fact) => {
                // TODO: Namesti funkcionalnost i ovde da radi za Like/Dislike
                html += ` <div class="item flex flex-col relative text-center rounded-2xl">
                            <div class="item-menu">
                                <div class="item-arrow">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                                <a href="">
                                    <i class="fas fa-compass"></i>
                                </a>
                            </div>
                            <div class="item-text">
                                <h1 class="mb-3 font-bold text-md"> ${fact.title} </h1>
                                <h2 class="absolute font-semibold text-sm top-1.5 left-2.5"> #<span id="fact-id">${fact.id}</span></h2>
                                <p class="text-center"> ${fact.description} </p>
                            </div>
                            <div class="item-votes">
                                <button class="vote-btn like" value="1" onclick="vote(this)">
                                    <i class="${arr.user_vote[fact.id] ? 'fas' : 'far'} fa-thumbs-up"></i>
                                     <span class="count-liked">${item.likes}</span>
                                </button>
                                <button class="vote-btn dislike" value="0" onclick="vote(this)">
                                    <i class="${!arr.user_vote[fact.id] && fact.dislikes ? 'fas' : 'far'} fa-thumbs-down"></i>
                                    <span class="count-disliked">${fact.dislikes}</span>
                                </button>
                            </div>
                        </div>`
            });
            return html;
        }

        // Color items
        function colorizeItems() {
            $('.item').each((index, element) => {
                let random = Math.floor(Math.random() * 360)
                element.style.backgroundColor = `hsl( ${random + 'deg'} 100% 92%)`
            })
        }
    </script>
@endsection

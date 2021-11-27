@extends('layouts.backend')

@section('content')
    <!-- TODO: 1) Stranicu moze da vidi svako, ali samo ulogovani korisnici mogu da ih dodaju -->
    <!-- Page Content -->
    <div class="">
        <div class="flex flex-col justify-between items-center w-screen py-10 w-screen h-screen" style="background-color: #222222f0">
            <div id="daily-fact" class="h-52 w-2/4 text-center">
                <h1 class="font-bold text-2xl mb-4">Cinjenica dana!</h1>
                <p class="px-10 italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consectetur consequatur enim facilis
                    molestiae natus nemo officiis sapiente, vitae voluptate.</p>
            </div>
            <div id="monthly-facts" class="mx-28 w-screen">
                <h1 class="font-bold text-xl ml-12 mb-8"><span class="text-red-400 capitalize font-bolder text-2xl">Top</span> cinjenice nedelje</h1>
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="https://www.google.com" target="_blank">
                                <div class="fact-item flex flex-col relative text-center p-5 bg-red-300 rounded-2xl">
                                    <h1 class="mb-3 font-bold text-xl"> Činjenica dana!</h1>
                                    <h2 class="absolute font-bold top-1.5 left-2.5">#1</h2>
                                    <div class="fact-text-wrapper">
                                        <p class="text-center">
                                            Ukoliko se ruke osecaju na beli luk, mogu se protrljati o česmu ili metal i miris ce
                                            <span class="font-bold underline">nestati!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore nihil, perferendis provident sapiente vitae.
                                        </p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <div class="fact-item flex flex-col relative text-center p-5 bg-red-300 rounded-2xl">
                                    <h1 class="mb-3 font-bold text-xl"> Činjenica dana!</h1>
                                    <h2 class="absolute font-bold top-1.5 left-2.5">#2</h2>
                                    <div class="fact-text-wrapper">
                                        <p class="text-center">
                                            Ukoliko se ruke osecaju na beli luk, mogu se protrljati o česmu ili metal i miris ce
                                            <span class="font-bold underline">nestati!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore nihil, perferendis provident sapiente vitae.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="fact-item flex flex-col relative text-center p-5 bg-red-300 rounded-2xl">
                                    <h1 class="mb-3 font-bold text-xl"> Činjenica dana!</h1>
                                    <h2 class="absolute font-bold top-1.5 left-2.5">#3</h2>
                                    <div class="fact-text-wrapper">
                                        <p class="text-center">
                                            Ukoliko se ruke osecaju na beli luk, mogu se protrljati o česmu ili metal i miris ce
                                            <span class="font-bold underline">nestati!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore nihil, perferendis provident sapiente vitae.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="fact-item flex flex-col relative text-center p-5 bg-red-300 rounded-2xl">
                                    <h1 class="mb-3 font-bold text-xl"> Činjenica dana!</h1>
                                    <h2 class="absolute font-bold top-1.5 left-2.5">#4</h2>
                                    <div class="fact-text-wrapper">
                                        <p class="text-center">
                                            Ukoliko se ruke osecaju na beli luk, mogu se protrljati o česmu ili metal i miris ce
                                            <span class="font-bold underline">nestati!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore nihil, perferendis provident sapiente vitae.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="fact-item flex flex-col relative text-center p-5 bg-red-300 rounded-2xl">
                                    <h1 class="mb-3 font-bold text-xl"> Činjenica dana!</h1>
                                    <h2 class="absolute font-bold top-1.5 left-2.5">#5</h2>
                                    <div class="fact-text-wrapper">
                                        <p class="text-center">
                                            Ukoliko se ruke osecaju na beli luk, mogu se protrljati o česmu ili metal i miris ce
                                            <span class="font-bold underline">nestati!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore nihil, perferendis provident sapiente vitae.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="fact-item flex flex-col relative text-center p-5 bg-red-300 rounded-2xl">
                                    <h1 class="mb-3 font-bold text-xl"> Činjenica dana!</h1>
                                    <h2 class="absolute font-bold top-1.5 left-2.5">#6</h2>
                                    <div class="fact-text-wrapper">
                                        <p class="text-center">
                                            Ukoliko se ruke osecaju na beli luk, mogu se protrljati o česmu ili metal i miris ce
                                            <span class="font-bold underline">nestati!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore nihil, perferendis provident sapiente vitae.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="contact" class="flex flex-row justify-center items-center w-full h-42 flex-grow">
                <div class="contact-wrapper h-full w-full px-24 border-2 border-red border-solid flex-grow">
                    <h1 class="text-white pt-10 pb-12 text-lg font-bold ">
                        <span class="font-bold text-yellow-200">Hejj</span>, podeli i ti svoju tajnu činjenicu sa ostalima!
                    </h1>
                    <div class=" flex gap-x-4 mb-4">
                        <div class="flex-grow">
                            <p class="mb-2 font-semibold text-white">E-mail:</p>
                            <input class="w-full" type="email">
                        </div>
                        <div class="flex-grow">
                            <p class="mb-2 font-semibold text-white">Naslov činjenice:</p>
                            <input class="w-full" type="text">
                        </div>
                    </div>
                    <div class="flex justify-center h-auto">
                        <textarea class="w-full h-40"></textarea>
                    </div>
                </div>
                <div class="h-full w-full border-2 border-blue border-solid flex-grow">
                    {{-- Content --}}
                </div>
            </div>
        </div>
    </div>

    <script>

        $('.fact-item').each((index, element) => {
            let random = Math.floor( Math.random() * 360 )
            element.style.backgroundColor = `hsl( ${random + 'deg'} 100% 95%)`
        })

        let splide = new Splide( '.splide', {
            perPage: 4,
            width: '100%',
            drag: 'free',
            padding: '6rem',
            gap: '10rem',
            trimSpace: true,
            arrows: false,
            pagination: false,
            flickPower: 200,
            type: 'loop',
            keyboard: false,
        });
        splide.mount();

        for(let i = 0; i < $('.slider').length; i++) { multipleSliders(i) }

        function multipleSliders( index ) {
            let slider = document.querySelectorAll('.slider')[index];
            let innerSlider = document.querySelectorAll('.slider-inner')[index];
            let pressed = false,
                startx,
                x;

            slider.addEventListener('mousedown', (e) => {
                pressed = true;
                startx = e.offsetX - innerSlider.offsetLeft;
            })
            window.addEventListener('mouseup', () => {
                pressed = false
            })
            slider.addEventListener('mousemove', (e) => {
                if (pressed) {
                    e.preventDefault();
                    x = e.offsetX;
                    innerSlider.style.left = `${x - startx}px`;
                    checkBoundary();
                }
            })

            function checkBoundary() {
                let outer = slider.getBoundingClientRect();
                let inner = innerSlider.getBoundingClientRect();

                if (parseInt(innerSlider.style.left) > 0) {
                    innerSlider.style.left = '0px';
                } else if (inner.right < outer.right) {
                    innerSlider.style.left = `-${inner.width - outer.width}px`;
                }
            }
        }
    </script>
    <!-- END Page Content -->
@endsection

@extends('user.main')

@section('content')

    <section id="home">

        <div
            class="relative bg-[#064d4f] rounded-2xl px-10 py-12 flex items-center justify-between overflow-hidden min-h-[240px]">

            {{-- Circle Decorative --}}
            <div class="absolute inset-0 pointer-events-none opacity-10">

                <div class="absolute top-[40px] right-[260px] w-44 h-44 rounded-full border border-green-300"></div>

                <div class="absolute bottom-[60px] right-[300px] w-60 h-60 rounded-full border border-green-300"></div>
            </div>

            {{-- Text --}}
            <div class="relative z-10 max-w-md">

                <h1 class="text-[#fdf9ef] font-extrabold text-3xl md:text-4xl leading-tight mb-3">We bring the store<br>to
                    your
                    door</h1>

                <p class="text-[#fdf9ef] text-sm leading-relaxed mb-7 max-w-sm">
                    Get organic produce and sustainabily sourced groceries delivery at up to 40% off.
                </p>
                <a href="#"
                    class="inline-block bg-[#c5e84a] hover:bg-[#d4f55a] text-[#0a2e1a] font-bold text-sm px-7 py-3 rounded-xl transition-all hover:-translate-y-0.5">Shop
                    now</a>
            </div>

            {{-- Graphic --}}
            <div
                class="relative z-10 hidden sm:flex items-center justify-center w-40 h-40 md:w-56 md:h-56 bg-white/5 rounded-full text-7xl md:text-9xl flex-shrink-0">
                🛍️
            </div>

        </div>

    </section>

    {{-- Category --}}
    <section id="category">

        <div class="mt-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 items-start">
            {{-- Temporary static data --}}
            @php
                $categories = [
                    ['name' => 'Vegetable', 'sub' => 'Local market', 'icon' => '🥦'],
                    ['name' => 'Snacks & Breads', 'sub' => 'In store delivery', 'icon' => '🥐'],
                    ['name' => 'Fruits', 'sub' => 'Chemical free', 'icon' => '🍊'],
                    ['name' => 'Chicken', 'sub' => 'Frozen meal', 'icon' => '🍗'],
                    ['name' => 'Milk & Dairy', 'sub' => 'Process food', 'icon' => '🧀'],
                ];
            @endphp

            @foreach ($categories as $cat)

                <a href="#">
                    <div
                        class="bg-white rounded-2xl p-4 flex flex-col justify-between min-h-[110px] border border-gray-100 cursor-pointer hover:-translate-y-1 hover:shadow-lg hover:shadow-[#064d4f]/10 transition-all">

                        <div class="">
                            <h3 class="text-sm font-bold text-gray-800 leading-tight">{{ $cat['name'] }}</h3>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $cat['sub'] }}</p>
                        </div>
                        <div class="self-end text-4xl leading-none">{{ $cat['icon'] }}</div>
                    </div>
                </a>

            @endforeach

            {{-- See all category --}}
            <a href="#"
                class="bg-[#c5e84a] hover:bg-[#d4f55a] rounded-2xl flex flex-col items-center justify-center gap-2 min-h-[110px] cursor-pointer hover:-translate-y-1 transition-all col-span-1">
                <div class="w-9 h-9 bg-white rounded-full flex items-center justify-center text-lg font-bold text-gray-800">
                    →
                </div>
                <span class="text-xs font-semibold text-gray-800">See all</span>
            </a>

        </div>

    </section>

    <section id="product">
        <div class="product"></div>
    </section>

@endsection
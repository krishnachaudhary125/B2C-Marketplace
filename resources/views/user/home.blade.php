@extends('user.main')

@section('content')

    <div
        class="relative bg-[#064d4f] rounded-2xl px-10 py-12 flex items-center justify-between overflow-hidden min-h-[240px]">

        {{-- Circle Decorative --}}
        <div class="absolute inset-0 pointer-events-none opacity-10">

            <div class="absolute top-[40px] right-[260px] w-44 h-44 rounded-full border border-green-300"></div>

            <div class="absolute bottom-[60px] right-[300px] w-60 h-60 rounded-full border border-green-300"></div>
        </div>

        {{-- Text --}}
        <div class="relative z-10 max-w-md">

            <h1 class="text-[#fdf9ef] font-extrabold text-3xl md:text-4xl leading-tight mb-3">We bring the store<br>to your
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

@endsection
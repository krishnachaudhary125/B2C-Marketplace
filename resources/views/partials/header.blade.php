<header class="relative">

    <nav class="flex justify-between p-4 bg-[#064d4f] rounded-2xl items-center">

        <div class="flex gap-3 items-center">
            <button class="text-white cursor-pointer md:hidden" onclick="toggleMenu()">☰</button>

            <a href="#">
                <img src="{{ asset('assets/images/nexcart_logo.png') }}" class="w-19" alt="NexCart logo">
            </a>
        </div>

        <div class="rounded-full bg-white flex overflow-hidden">
            <input type="text" placeholder="Search"
                class="p-1 px-3 w-32 md:w-64 sm:w-52 text-[#064d4f] rounded-full focus:outline-none bg-transparent">
            <button class="px-3 cursor-pointer"><i class="fa fa-search text-[#064d4f]"></i></button>
        </div>

        {{-- Desktop Menu --}}
        <ul class="gap-5 justify-between text-white hidden md:flex">
            <li class="cursor-pointer">Home</li>
            <li class="cursor-pointer">About</li>
            <li class="cursor-pointer">Contact</li>
            <li><i class="fa fa-shopping-cart cursor-pointer"></i></li>
            <li><i class="fa fa-user cursor-pointer"></i></li>
        </ul>

        {{-- Mobile View --}}
        <div class="flex gap-4 text-white md:hidden items-center">
            <i class="fa fa-shopping-cart"></i>
        </div>

    </nav>

    {{-- Popup Menu Panel --}}
    <div id="menuPanel"
        class="absolute top-full left-0 mt-2 w-41 bg-[#064d4f] rounded-2xl shadow-2xl z-50 opacity-0 scale-95 pointer-events-none transition-all duration-200 ease-out md:hidden">
        {{-- Nav Link --}}
        <nav class="flex flex-col p-4 gap-1 flex-1">
            <a href="#" class="text-white px-4 py-3 rounded-xl flex items-center gap-3">Home</a>
            <a href="#" class="text-white px-4 py-3 rounded-xl flex items-center gap-3">About</a>
            <a href="#" class="text-white px-4 py-3 rounded-xl flex items-center gap-3">Contact</a>
            <a href="#" class="text-white px-4 py-3 rounded-xl flex items-center gap-3">Profile</a>
            <a href="#" class="text-white px-4 py-3 rounded-xl flex items-center gap-3">Sign In</a>
            <a href="#" class="text-white px-4 py-3 rounded-xl flex items-center gap-3">Become Seller</a>
        </nav>

    </div>

</header>

{{-- Popup Overlay --}}
<div id="menuOverlay" class="fixed inset-0 z-40 hidden" onclick="closeMenu()">
</div>

<script>
    const overlay = document.getElementById('menuOverlay');
    const panel = document.getElementById('menuPanel');
    let isOpen = false;

    function toggleMenu() {
        isOpen ? closeMenu() : openMenu();
    }

    function openMenu() {
        isOpen = true;
        overlay.classList.remove('hidden');
        panel.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
        panel.classList.add('opacity-100', 'scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        isOpen = false;
        panel.classList.remove('opacity-100', 'scale-100');
        panel.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        document.body.style.overflow = '';
        setTimeout(() => overlay.classList.add('hidden'), 200);
    }

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeMenu();
    });
</script>
<header>
    <nav class="flex justify-between p-5 bg-[#064d4f] rounded-2xl items-center">
        <div class="flex gap-5">
            <div class="hamburger-menu text-white cursor-pointer md:hidden" onclick="toggleMenu()">☰</div>
            <div class="logo text-white cursor-pointer">
                <a href="#"><img src="{{ asset('assets/images/nexcart_logo.png') }}" alt="NexCart Logo"
                        class="w-25"></a>
            </div>
        </div>
        <div class="search-bar rounded-full bg-white">
            <input type="text" placeholder="Search"
                class="p-2 px-3 w-100 text-[#064d4f] rounded-full focus:outline-none">
            <button class="px-3 cursor-pointer"><i class="fa fa-search text-[#064d4f]"></i></button>
        </div>
        <ul class="flex gap-5 justify-between text-white">
            <li class="cursor-pointer">Home</li>
            <li class="cursor-pointer">About</li>
            <li class="cursor-pointer">Contact</li>
            <li><i class="fa fa-shopping-cart cursor-pointer"></i></li>
            <li><i class="fa fa-user cursor-pointer"></i></li>
        </ul>
    </nav>
</header>

<script>
    function toggleMenu() {
        const
    }
</script>
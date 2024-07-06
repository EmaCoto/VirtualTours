<nav class="h-20 border-b shadow-lg sticky top-0 flex items-center bg-white justify-between px-14 z-50">
    <a href="{{ route('home') }}" class="w-48"><img src="{{ asset("img/Logo_VitalTours_3.png") }}" alt="Logo"></a>

    <div class="flex">
        <div class="flex items-center ">
            <a href="#" class="mx-2">
                <div class="group flex">
                    <span class="opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out flex items-center mr-1">+57 000 0000000</span>
                    <i class="fa-brands fa-whatsapp text-2xl text-green-500 group-hover:scale-90 group-hover:text-green-400 transition duration-500"></i>
                </div>
            </a>
            <a href="#" class="mx-2">
                <i class="fa-brands fa-facebook text-2xl text-blue-500 hover:scale-90 transition duration-500 hover:text-blue-400"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fa-brands fa-instagram text-2xl text-rose-500 hover:scale-90 transition duration-500 hover:text-rose-400"></i>
            </a>
        </div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"><i class="fa-solid fa-user fa-xl"></i></a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">Register</a>
                @endif
            @endauth
        @endif
    </div>
</nav>

<x-guest-layout>
    <nav class="h-20 border-b shadow-lg sticky top-0 flex items-center bg-white justify-between px-14">
        <a href="{{ route('home') }}" class="w-48"><img src="{{ asset("img/Logo_VitalTours_3.png") }}" alt="Logo"></a>
        <div>
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
    {{-- HOME --}}
    <div>
        <div class="">
            {{-- <img src="{{ asset('img/home_2.png') }}" alt="home"> --}}
            <livewire:post.create-post>

        </div>
    </div>
</x-guest-layout>

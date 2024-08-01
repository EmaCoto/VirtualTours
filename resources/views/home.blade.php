<x-guest-layout>
    {{-- NAVBAR --}}
    <x-navbar />

    {{-- HOME --}}
    <div>
        <img src="{{ asset('img/home_2.png') }}" alt="home">
        <div>
            <h1 class="text-[#088395] text-center text-4xl font-bold">Tours en el área</h1>
            <livewire:post.post>
        </div>
    </div>

    <x-footer />


</x-guest-layout>

<x-guest-layout>
    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENT --}}
    <div>
        @livewire('content-tour', ['postId' => $postId], key($postId))
    </div>

    {{-- FOOTER --}}
    <x-footer />

</x-guest-layout>

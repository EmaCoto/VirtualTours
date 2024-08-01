<x-guest-layout>
    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENT TOUR--}}
    <div>
        @livewire('content-tour', ['postId' => $postId], key($postId))
    </div>

    {{-- THE OTHER POSTS --}}

    <div class="mt-8">
        <h1 class="text-[rgb(8,131,149)] text-center text-4xl font-bold">Resultados similares</h1>
        <livewire:post.post>
    </div>

    {{-- FOOTER --}}
    <x-footer />

</x-guest-layout>

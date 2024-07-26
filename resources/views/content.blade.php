<x-guest-layout>
    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENT --}}
    <div  id="contentEval" class="overflow-hidden h-screen">
        @livewire('content-tour', ['postId' => $postId], key($postId))
    </div>

</x-guest-layout>

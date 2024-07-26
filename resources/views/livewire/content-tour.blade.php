<div>
    @if($post)
    <section class="mx-auto grid grid-cols-2 overflow-hidden">
        <div class="h-full flex flex-col items-center justify-center">
            <img src="{{ asset('storage/' . $post->img) }}" alt="Flayer" class="w-[80%] h-[520px] justify-normal rounded-lg">
        </div>
        <div class="flex flex-col items-center">
            <div class="w-[80%] text-base font-bold uppercase">
                {{ $post->title }}
            </div>
            <div class="w-[80%] pt-4">
                {!! nl2br(e($post->description)) !!}
            </div>
            <div class="w-[80%] pt-4">
                {{ $post->duration }}
            </div>
            <div class="w-[80%] pt-4">
                {!! nl2br(e($post->prices)) !!}
            </div>
        </div>
    </section>
    @else
        <p>Post no encontrado.</p>
    @endif
</div>

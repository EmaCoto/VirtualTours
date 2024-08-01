<div>
    @if($post)
        <div class="flex justify-end">
            {{-- EDIT POST --}}
            <div class="flex group relative my-3 mx-10 w-1 justify-center">
                <div>
                    @livewire('post.edit-post', ['postId' => $post->id])
                </div>
                <span class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-50 top-8 opacity-0 absolute bg-black rounded-lg px-2 z-100">
                    Editar
                </span>
            </div>
            {{-- DELETE POST --}}
            <div class="flex group relative my-3 mx-10 w-1 justify-center">
                <button wire:click="destroy({{ $post->id }})" class="bg-[#B43F3F] rounded-lg px-6 py-1 text-white text-lg mx-2 hover:scale-90 duration-300">
                    <i class="fa-solid fa-trash-can"></i>
                </button>
                <span class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-50 top-8 opacity-0 absolute bg-black rounded-lg px-2 z-100">
                    Eliminar
                </span>
            </div>
        </div>
    {{-- CONTENT TOUR --}}
        <section class="mx-auto grid grid-cols-2 overflow-hidden my-6 p-2">
            <div class="h-full flex flex-col items-center justify-center">
                <img src="{{ asset('storage/' . $post->img) }}" alt="Flayer" class="w-[80%] h-[520px] justify-normal rounded-lg">
            </div>
            <div class="flex flex-col w-[80%] h-full">
                <div class="text-2xl font-bold uppercase text-white rounded-r-full p-2 " style="background-color: {{ $color }}" >
                    {{ $post->title }}
                </div>
                <div class="w-full my-4 border-y-4">
                    <h1 class="uppercase text-lg font-semibold">incluye: </h1>
                    <p>{!! nl2br(e($post->description)) !!}</p>
                </div>
                <div class="w-full">
                    <h1 class="uppercase text-lg font-semibold">duración: <span class="font-normal text-base normal-case">{{ $post->duration }} horas</span></h1>
                </div>
                <div class="w-full">
                    <h1 class="uppercase text-lg font-semibold">PRECIOS: </h1>
                    <p>{!! nl2br(e($post->prices)) !!}</p>
                </div>
                <div class="w-full mt-4 text-center ">
                    <a href="#">
                        <button class="cursor-pointer font-semibold overflow-hidden relative z-100 border-2 border-[#088395] group px-8 py-2 rounded-lg">
                            <span class="relative z-10 text-[#088395] group-hover:text-white duration-500 uppercase">reservar</span>
                            <span class="absolute w-full h-full bg-[#088395] -left-32 top-0 -rotate-45 group-hover:rotate-0 group-hover:left-0 duration-500"></span>
                            <span class="absolute w-full h-full bg-[#088395] -right-32 top-0 -rotate-45 group-hover:rotate-0 group-hover:right-0 duration-500"></span>
                        </button>
                    </a>
                </div>
            </div>
        </section>
        

    @else
        <p>Tour no encontrado.</p>
    @endif

</div>

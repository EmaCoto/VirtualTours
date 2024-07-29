<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <button wire:click="$toggle('open'), edit({{ $post->id }})" class="bg-[#088395] rounded-lg px-6 py-1 text-white text-lg mx-2"><i class="fa-solid fa-pen-to-square"></i></button>

    <x-dialog-modal maxWidth="5xl" wire:model='open'>
        <x-slot name='title'>
            <h1 class="bg-[#088395] w-[20%] text-white text-2xl p-2 pl-6 rounded-r-full">Editar flayer</h1>
        </x-slot>
        <x-slot name='content'>
            <form class="mx-auto grid grid-cols-2 overflow-hidden">
                <div class="h-full flex flex-col items-center justify-center">
                    @if ($img)
                        <img src="{{ $img->temporaryUrl() }}" alt="Flayer" class="w-[80%] h-[75%] justify-normal rounded-lg">
                    @else
                        @if ($post->img)
                            <img src="{{ asset('storage/posts/' . $post->img) }}" alt="Flayer" class="w-[80%] h-[75%] justify-normal rounded-lg">
                        @else
                            <x-label for="img" class="border-dashed border-2 p-10 w-[80%] h-[75%] hover:cursor-pointer flex flex-col text-center justify-center uppercase rounded-lg overflow-hidden">
                                <i class="fa-solid fa-file-arrow-down text-6xl m-10"></i>sube una imagen
                            </x-label>
                        @endif
                    @endif
                    <input wire:model='img' type="file" id="img" class="flex mt-4 w-[80%] rounded-md bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium file:hover:cursor-pointer hover:cursor-pointer">
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-[80%]">
                        <label class="text-base font-bold uppercase">Título</label>
                        <x-input wire:model='title' type="text" class="w-full"/>
                    </div>
                    <div class="w-[80%] pt-4">
                        <label class="text-base font-bold uppercase">Descripción</label>
                        <textarea wire:model='description' name="description" id="contentEval" class="border-gray-300 focus:border-[#088395] focus:ring-[#088395] rounded-md shadow-sm w-full h-48 resize-none overflow-hidden"></textarea>
                    </div>
                    <div class="w-[80%] pt-4">
                        <label class="text-base font-bold uppercase">Duración del tours</label>
                        <x-input wire:model='duration' type="number" class="w-full"/>
                    </div>
                    <div class="w-[80%] pt-4">
                        <label class="text-base font-bold uppercase">Precios</label>
                        <textarea wire:model='prices' name="description" id="contentEval" class="border-gray-300 focus:border-[#088395] focus:ring-[#088395] rounded-md shadow-sm w-full h-36 resize-none overflow-hidden"></textarea>
                    </div>
                </div>
            </form>

        </x-slot>
        <x-slot name='footer'>
            <button wire:click='update' class="bg-[#088395] rounded-lg px-6 py-1 text-white text-lg mx-2">Editar</button>
            <button wire:click='$toggle("open")' class="bg-gray-700 rounded-lg px-6 py-1 text-white text-lg mx-2">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>

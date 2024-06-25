<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <button wire:click="$toggle('open')">crear</button>

    <x-dialog-modal maxWidth="5xl" wire:model='open'>
        <x-slot name='title'>
            Crear flayer
        </x-slot>
        <x-slot name='content'>
            <form class="mx-auto grid grid-cols-2 overflow-hidden">
                <div class="h-full">
                    <x-label for="img" class="border-dashed border-2 p-10 w-[80%] h-full hover:cursor-pointer flex flex-col text-center justify-center uppercase rounded-lg overflow-hidden"><i class="fa-solid fa-file-arrow-down text-6xl m-10"></i>sube una imagen</x-label>
                    <input type="file" name="img" id="img" class="hidden">
                </div>
                <div class="flex flex-col justify-center">
                    <div class="w-[80%]">
                        <label class="text-base font-bold uppercase">Título</label>
                        <x-input wire:model='title' type="text" class="w-full"/>
                    </div>
                    <div class="w-[80%] pt-4">
                        <label class="text-base font-bold uppercase">descripción</label>
                        <textarea wire:model='description' name="description" id="contentEval" class="border-gray-300 focus:border-[#088395] focus:ring-[#088395] rounded-md shadow-sm w-full h-48 resize-none overflow-hidden"></textarea>
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name='footer'>
            <button wire:click='save'>Crear</button>
            <button wire:click='$toggle("open")'>cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>

<div class="flex md:hidden h-16 border-b shadow-lg top-0 items-center bg-white justify-between px-6 z-50 relative">
    <a href="{{ route('home') }}" class="w-[40%]"><img src="{{ asset('img/Logo_VitalTours.png') }}" alt="Logo"></a>

    <div>
        <!-- Botón de hamburguesa -->
        <button wire:click="toggleMenu" class="p-2">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
    </div>

    <!-- Menú de navegación -->
    @if ($isOpen)
        <div class="absolute top-full right-0 bg-white border-t shadow-lg w-[50%]">
            <a href="#" class="block px-4 py-2 text-gray-700">Inicio</a>
        </div>
    @endif
</div>

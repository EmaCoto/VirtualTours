<x-guest-layout>
    {{-- NAVBAR --}}
    <x-navbar />

    {{-- HOME --}}
    <div>
            <img src="{{ asset('img/home_2.png') }}" alt="home">
            <div>
                <h1 class="text-[rgb(8,131,149)] text-center text-4xl font-bold">Tours en el área</h1>
                <livewire:post.post>
            </div>

        <footer class="h-44 bg-[#088395] grid grid-cols-4 text-white px-10">

            {{-- contact --}}
                <div >
                    <h1 class="text-lg uppercase font-bold my-4">Contactos</h1>
                    <div class="flex flex-col items-start justify-center">
                        <a href="#" class="flex items-center  hover:text-gray-300 transition duration-100">
                            <i class="fa-regular fa-envelope text-lg"></i>
                            <p class="mx-2 text-sm">vitaltours@gmail.com</p>
                        </a>
                        <a href="#" class="flex items-center  hover:text-gray-300 transition duration-100">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            <p class="mx-2 text-sm">+57 000 00000000</p>
                        </a>
                        <a href="#" class="flex items-center  hover:text-gray-300 transition duration-100">
                            <i class="fa-regular fa-circle-check text-lg"></i>
                            <p class="mx-2 text-sm">RNT 000000</p>
                        </a>
                    </div>
                </div>

                <div>
                    <h1 class="text-lg uppercase font-bold my-4">Síguenos</h1>
                    <div  class="flex flex-col items-start justify-center">
                        <a href="#" class="flex items-center hover:text-gray-300 transition duration-100">
                            <i class="fa-brands fa-instagram text-xl"></i>
                            <p class="mx-2 text-sm">@VitalTours_</p>
                        </a>
                        <a href="#" class="flex items-center  hover:text-gray-300 transition duration-100">
                            <i class="fa-brands fa-facebook text-lg"></i>
                            <p class="mx-2 text-sm">VitalTours</p>
                        </a>
                    </div>
                </div>

                <div>
                    <h1 class="text-lg uppercase font-bold my-4">legal</h1>
                    <div  class="flex flex-col items-start justify-center">
                        <a href="#" class="flex items-center hover:text-gray-300 transition duration-100">
                            <p class="text-sm">Términos</p>
                        </a>
                        <a href="#" class="flex items-center  hover:text-gray-300 transition duration-100">
                            <p class="text-sm">Privacidad</p>
                        </a>
                    </div>
                </div>

                <div class="w-60 h-full flex items-center mx-auto" >
                    <a href="{{ route('home') }}" class="w-full"><img src="{{ asset("img/Logo_VitalTours_footer.png") }}" alt="Logo"></a>
                </div>
            </footer>
            <p class="text-center flex items-center justify-center w-full text-sm text-gray-500">&copy; 2024 VITALTOURS | Todos los derechos reservados</p>
    </div>



</x-guest-layout>

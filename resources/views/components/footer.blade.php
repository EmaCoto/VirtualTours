<footer>
    <div class="hidden lg:flex w-full">
        <div class="h-44 bg-[#088395] grid grid-cols-4 text-white px-10 w-full">
            <div>
                <h1 class="text-lg uppercase font-bold my-4">Contactos</h1>
                <div class="flex flex-col items-start justify-center">
                    <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=soportevitaltours@gmail.com" target="_blank" class="flex items-center  hover:text-gray-300 transition duration-100">
                        <i class="fa-regular fa-envelope text-lg"></i>
                        <p class="mx-2 text-sm">soportevitaltours@gmail.com</p>
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
        </div>
    </div>

    {{-- RESPONSIVE --}}
    <div class="flex lg:hidden">
        <div class="h-auto bg-[#088395] flex flex-col text-white p-4 w-full text-center">
            <div>
                <h1 class="text-base uppercase font-bold my-1">Contactos</h1>
                <div class="flex flex-col items-start justify-center">
                    <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=soportevitaltours@gmail.com" target="_blank" class="mx-auto flex items-center hover:text-gray-300 transition duration-100">
                        <i class="fa-regular fa-envelope text-base"></i>
                        <p class="mx-2 text-sm">soportevitaltours@gmail.com</p>
                    </a>
                    <a href="#" class="mx-auto flex items-center  hover:text-gray-300 transition duration-100">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <p class="mx-2 text-sm">+57 000 00000000</p>
                    </a>
                    <a href="#" class="mx-auto flex items-center  hover:text-gray-300 transition duration-100">
                        <i class="fa-regular fa-circle-check text-base"></i>
                        <p class="mx-2 text-sm">RNT 000000</p>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 py-4">
                <div>
                    <h1 class="text-base uppercase font-bold my-1">Síguenos</h1>
                    <div  class="flex flex-col items-start justify-center">
                        <a href="#" class="mx-auto flex items-center hover:text-gray-300 transition duration-100">
                            <i class="fa-brands fa-instagram text-xl"></i>
                            <p class="mx-2 text-sm">@VitalTours_</p>
                        </a>
                        <a href="#" class="mx-auto flex items-center  hover:text-gray-300 transition duration-100">
                            <i class="fa-brands fa-facebook text-base"></i>
                            <p class="mx-2 text-sm">VitalTours</p>
                        </a>
                    </div>
                </div>

                <div>
                    <h1 class="text-base uppercase font-bold my-1">legal</h1>
                    <div  class="flex flex-col items-start justify-center">
                        <a href="#" class="mx-auto flex items-center hover:text-gray-300 transition duration-100">
                            <p class="text-sm">Términos</p>
                        </a>
                        <a href="#" class="mx-auto flex items-center  hover:text-gray-300 transition duration-100">
                            <p class="text-sm">Privacidad</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-40 h-full flex items-center mx-auto mt-4" >
                <a href="{{ route('home') }}" class="w-full"><img src="{{ asset("img/Logo_VitalTours_footer.png") }}" alt="Logo"></a>
            </div>
        </div>
    </div>
    <p class="text-center flex items-center justify-center w-full text-sm text-gray-500">&copy; 2024 VITALTOURS | Todos los derechos reservados</p>
</footer>

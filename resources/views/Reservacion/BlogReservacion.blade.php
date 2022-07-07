<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<title>Blog de Reservaciones</title>

@livewire('navegacion')

<!--inicio slider (carrusel)-->
<div class="swiper w-full h-screen">
    <!-- Additional required wrapper -->
    <div id="Home" class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img class="object-center object-cover w-full h-full"
                src="{{ asset('img/descarga.JFIF') }}" alt="">
        </div>
        <div class="swiper-slide"><img class="object-center object-cover w-full h-full"
                src="{{ asset('img/palenque.jpg') }}" alt=""></div>
        <div class="swiper-slide"><img class="object-center object-cover w-full h-full"
                src="{{ asset('img/La_Tiendita.jpg') }}" alt="">
        </div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>


<!--Galeria-->
<div id="Galeria" class="relative gap-0 mx-auto  mb-0 p-2 bg-gray-500 lg:space-y-0 lg:grid lg:gap-4">
    <h1 class="text-center text-5xl font-semibold text-white hover:text-blue-400">GALERIA</h1>
    <div class="containner grid gap-0 mx-auto lg:grid-cols-4 mb-0 p-8 bg-gray-500 lg:space-y-0 lg:grid lg:gap-4">
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 1"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 2"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 3"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 4"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 1"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 2"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 3"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
        <div
            class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg transform hover:translate-y-2 hover:shadow-xl transition duration-300">
            <img class="w-full h-48"
                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="product" />
            <div class="bg-blue-500 px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-white text-center">"Lugar 4"</h4>
                <p class="leading-normal text-black">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                    elit.
                    Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
    </div>

    <!--fin galeria-->
</div>

<!-- Sobre (Objetivo, Misión y Visión) -->
<div id="SobreNosotros" class="relative gap-0 mx-auto  mb-0 p-2 bg-gray-500 lg:space-y-0 lg:grid lg:gap-4">
    <h1 class="text-center text-5xl font-semibold text-green-400 hover:text-red-400">SOBRE NOSOTROS</h1>
    <div class="bg-gray-500 relative flex flex-wrap mx-auto gap-0 mb-0 p-8 lg:space-y-0">
        <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div
                class="bg-blue-500 w-full rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                <figure class="mb-2">
                    <img src="{{ asset('img/r3ff-La-Tiendita-VNV-exterior-2021-09.jpg') }}" alt=""
                        class="h-64 ml-auto mr-auto" />
                </figure>
                <div class="rounded-lg p-4 flex flex-col">
                    <div>
                        <h5 class="text-2xl font-bold leading-none text-center text-white"> Objetivo </h5>
                        <p class="mt-4"> Donec non consequat enim. Duis maximus, dui hendrerit
                            sollicitudin
                            maximus, ipsum velit sodales arcu, nec ultricies metus nisi quis tortor. Nulla mauris
                            odio,
                            lacinia a leo ut, euismod vestibulum dolor. Praesent eget dapibus neque, non rutrum
                            sapien.
                            Duis malesuada nunc nec elit dignissim hendrerit. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div
                class="bg-blue-500 rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                <figure class="mb-2">
                    <img src="{{ asset('img/rca2-La-Tiendita-VNV-interior.jpg') }}" alt=""
                        class="h-64 ml-auto mr-auto" />
                </figure>
                <div class="rounded-lg p-4 flex flex-col">
                    <div>
                        <h5 class="text-2xl font-bold leading-none text-center text-white"> Misión </h5>
                        <p class="mt-4"> Donec non consequat enim. Duis maximus, dui hendrerit
                            sollicitudin
                            maximus, ipsum velit sodales arcu, nec ultricies metus nisi quis tortor. Nulla mauris
                            odio,
                            lacinia a leo ut, euismod vestibulum dolor. Praesent eget dapibus neque, non rutrum
                            sapien.
                            Duis malesuada nunc nec elit dignissim hendrerit. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div
                class="bg-blue-500 rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                <figure class="mb-2">
                    <img src="{{ asset('img/rf76-interior-La-Tiendita-VNV.jpg') }}" alt=""
                        class="h-64 ml-auto mr-auto" />
                </figure>
                <div class="rounded-lg p-4 flex flex-col">
                    <div>
                        <h5 class="text-2xl font-bold leading-none text-center text-white"> Visión </h5>
                        <p class="mt-4"> Donec non consequat enim. Duis maximus, dui hendrerit
                            sollicitudin
                            maximus, ipsum velit sodales arcu, nec ultricies metus nisi quis tortor. Nulla mauris
                            odio,
                            lacinia a leo ut, euismod vestibulum dolor. Praesent eget dapibus neque, non rutrum
                            sapien.
                            Duis malesuada nunc nec elit dignissim hendrerit. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!--formulario de registro-->
<div id="Reservacion" class="relative mb-0 p-4 bg-gray-500 lg:space-y-0 lg:grid lg:gap-4">
    <h1 class="p-4 text-center text-5xl font-semibold text-blue-400 hover:text-green-400">RESERVAR</h1>
    <div class="mx-auto max-w-6xl py-2 px-12 lg:px-24 shadow-xl mb-24">
        <div class="text-center">
            <h1 class="my-3 text-3xl font-semibold text-white">Hacer una reservacion</h1>
        </div>
        <br>
        @if ($errors->any())
            <div class="alert flex flex-row items-center bg-red-200 p-5 border-b-2 rounded border-red-300 my-5 mb-4">
                <div
                    class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                    <span class="text-red-500">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="alert-content ml-4">
                    <div class="alert-title font-semibold text-lg text-red-800">
                        {{ __('Por Favor rellene todos los datos que se le piden a continuacion') }}
                    </div>
                    <div class="alert-description text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if (session('mensaje'))
            <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 my-5 mb-4">
                <div
                    class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                    <span class="text-green-500">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="alert-content ml-4">
                    <div class="alert-title font-semibold text-lg text-green-800">
                        {{ __('Envio Exitoso') }}
                    </div>
                    <div class="alert-description text-sm text-green-600">
                        <p>{{ session('mensaje') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <br>
        <form action="{{ route('Reservacion.store') }}" method="POST">
            @csrf
            <div class="bg-blue-500 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="Nombre">
                            Nombre Completo
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                            id="Nombre" type="text" placeholder="Jose Perez Lopez" name="Nombre"
                            value="{{ old('Nombre') }}">
                        <div>
                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="Telefono">
                            Numero Telefonico
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                            id="Telefono" type="text" placeholder="9931371163" name="Telefono"
                            value="{{ old('Telefono') }}">
                    </div>


                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="Correo">
                            Correo Electronico
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                            id="Correo" type="tel" placeholder="9321204312" name="Correo"
                            value="{{ old('Correo') }}">
                    </div>
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="LugarReservar">
                            Lugar a Reservar
                        </label>
                        <div>
                            <select
                                class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded"
                                id="LugarReservar" name="LugarReservar" value="{{ old('LugarReservar') }}">
                                <option>La casa</option>
                                <option>El Rio</option>
                                <option>La Palapa</option>
                            </select>
                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="NoPersonas">
                            Numero de Personas
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                            id="NoPersonas" type="number" placeholder="4" name="NoPersonas"
                            value="{{ old('NoPersonas') }}">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2"
                            for="HoraInicioReserv">
                            Hora de Inicio de la Reservacion
                        </label>
                        <div>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                id="HoraInicioReserv" type="time" placeholder="" name="HoraInicioReserv"
                                value="{{ old('HoraInicioReserv') }}">
                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="HoraFinReserv">
                            Hora de Finalizacion
                        </label>
                        <div>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                id="HoraFinReserv" type="time" placeholder="" name="HoraFinReserv"
                                value="{{ old('HoraFinReserv') }}">
                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2"
                            for="FechaReservacion">
                            Fecha de Reservacion
                        </label>
                        <div>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                id="FechaReservacion" type="date" placeholder="" name="FechaReservacion"
                                value="{{ old('FechaReservacion') }}">
                        </div>
                    </div>
                </div>
                <div class="-mx-3 md:flex mt-2">
                    <div class="md:w-full px-3 flex justify-center">
                        <button
                            class="border bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 text-white hover:text-black font-bold py-2 px-4 rounded-full">
                            Hacer Reservacion

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="Ubicacion" class="relative gap-0 mb-0 p-2 bg-gray-500 lg:space-y-0">
    <h1 class="p-8 text-center text-5xl font-semibold text-green-400 hover:text-red-400">UBICACION</h1>
    <div class="relative" style="padding-top: 56.25%">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.2003689158537!2d-92.93246758557754!3d17.54564450284068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edba047cc6167f%3A0x927b1e0ca210b2a7!2sLa%20Tiendita%20VNV!5e0!3m2!1ses!2smx!4v1645315571251!5m2!1ses!2smx"
            class="absolute inset-0 w-full h-full" frameborder="0" …></iframe>
    </div>
</div>

<!--FOOTER-->
<footer
    class="text-center bg-gradient-to-r from-blue-400 via-green-200 to-green-300 hover:from-pink-500 hover:to-yellow-500 text-white">
    <div class="container px-6 pt-6">
        <div class="flex justify-center mb-6">
            <a href="https://www.facebook.com/profile.php?id=100022949137077" type="button"
                class="rounded-full border-2 border-white hover:border-red-600 text-blue-600 hover:text-red-600 leading-normal uppercase hover:bg-blue-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                    class="w-2 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                    </path>
                </svg>
            </a>

            <a href="#!" type="button"
                class="rounded-full border-2 border-white hover:border-red-600 text-blue-400 hover:text-red-600 leading-normal uppercase hover:bg-blue-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                    class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                    </path>
                </svg>
            </a>

            <a href="mailto:pablorodolforamirezmartinez@gmail.com?Subject=Deseo%20que%20me%20realize%20una%20pagina%20web"
                type="button"
                class="rounded-full border-2 border-white hover:border-red-600 text-red-600 hover:text-white leading-normal uppercase hover:bg-blue-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                    class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                    <path fill="currentColor"
                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                    </path>
                </svg>
            </a>

            <a href="#!" type="button"
                class="rounded-full border-2 border-white hover:border-red-600 text-red-800 hover:text-black leading-normal uppercase hover:bg-blue-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                    class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                    </path>
                </svg>
            </a>

            <a href="#!" type="button"
                class="rounded-full border-2 border-white hover:border-red-600 text-white hover:text-black leading-normal uppercase hover:bg-blue-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                    class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                    </path>
                </svg>
            </a>

            <a href="https://github.com/Devildrack" type="button"
                class="rounded-full border-2 border-white hover:border-red-600 text-black hover:text-gray-600 leading-normal uppercase hover:bg-blue-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github"
                    class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                    <path fill="currentColor"
                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                    </path>
                </svg>
            </a>
        </div>
    </div>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white hover:text-blue-700" href="https://github.com/Devildrack">DevilSoft</a>
    </div>
</footer>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {

        speed: 400,
        spaceBetween: 100,

        autoplay: {
            delay: 3000,
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>

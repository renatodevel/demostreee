<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Graph Evolution</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')

</head>

<body class="antialiased">
    <div class="notify_events">
        <p class="mesage_events">🎄🤶 G E❄️🤶🎄</p>
    </div>

    <header class="header">
        <div class="logo">
            <a href="" class="text-decoration-none"><img src="{{ asset('img/logo.png') }}" alt=""
                    width="100%" class="rounded-full"></a>
        </div>
        <nav class="navigation">
            <button class="close_nav" style="border: none; background: transparent">
                <i class="bi bi-x-lg"></i>
            </button>
            <ul class="navigarion_ham ">
                <li><a href="" class="navigation-links">Inicio</a></li>
                <li><a href="" class="navigation-links">Servicios</a></li>
                <li><a href="" class="navigation-links">Nosotros</a></li>
                <li><a href="" class="navigation-links">Soporte</a></li>
                <li><a href="" class="navigation-links contact-button">Contacto</a></li>
            </ul>

            <a href="" class="navigation-button text-sky-500">Contacto</a>
        </nav>
        <button class="open_navbar"><i class="bi bi-list"></i></button>
    </header>
    <main>
        <section class="home-content w-100 d-flex gap-40">
            <div class="home-text d-flex flex-column gap-2">
                <h2 class="home-title fw-bold">Graph Evolution</h2>
                <p class="home-description">
                    El diseño gráfico es el arte de la comunicación visual que combina imágenes, palabras y conceptos
                    para transmitir información a una audiencia” - Aaris Sherin
                </p>
                <a href="" class="home-link text-start text-decoration-none fw-medium">Conocer más</a>
            </div>

            <div class="home-image">
                <img src="https://img.freepik.com/vector-premium/token-seguridad-ilustracion-plana-nft-concepto-token-no-fungible-color-verde-amarillo-azul_146120-324.jpg?size=626&ext=jpg" alt="Imagen" class="hero_img w-full object-cover object-center">
            </div>
        </section>
        <div class="ArrowFloat">
            <a href="#services"><i class="bi bi-arrow-down"></i></a>
        </div>
        <section class="home-about">
            <article class="home-about-text w-2/5">
                <h2 class="font-bold">El diseño es el arte de combinar la creatividad y la tecnología para comunicar
                    ideas.</h2>
                <p></p>
                <a href="" class="px-10 py-2 bg-[#cf00be] rounded-full">Conocer más</a>
            </article>
            <article class="home-about-cards w-1/2">
                <div class="card-one p-2 rounded-lg grid-col w-72">
                    <img src="https://i.pinimg.com/736x/82/e1/c1/82e1c144ee2ffa1e73bd0b6083f9538a.jpg" alt="" width="100%">
                </div>
                <div class="card-two p-2 rounded-lg  w-96 h-auto">
                    <img src="https://m.media-amazon.com/images/I/71eoYjrViXL._AC_UF894,1000_QL80_.jpg" alt="" width="100%">
                </div>
                <div class="card-three p-2 rounded-lg w-80">
                    <img src="https://i.ebayimg.com/thumbs/images/g/sQYAAOSwOMpiQyx~/s-l640.jpg" alt="" width="100%">
                </div>
                <div class="card-four p-2 rounded-lg w-80">
                    <img src="https://i.ebayimg.com/thumbs/images/g/I3kAAOSwb-ZlFnDx/s-l640.jpg" alt="" width="100%">
                </div>

            </article>
        </section>


        <section class="home-services d-flex flex-column align-items-center" id="services">
            {{-- <div class="ArrowFloat">
                <a href="#services"><i class="bi bi-arrow-down"></i></a>
            </div> --}}
            <h2 class="services-title fw-medium">Servicios</h2>
            <p class="services-description text-center">Servicios mas destacados</p>
            <div
                class="services_container grid justify-center w-auto gap-4 sm:flex-col sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 ">
                <div
                    class="card-services-one relative flex w-80 min-w-min flex-col rounded-xl bg-white text-gray-700 shadow-md h-auto overflow-hidden mt-5">
                    <div class="relative mx-0 mt-0 h-auto overflow-hidden  bg-white bg-clip-border text-gray-700">
                        <img src="https://previews.123rf.com/images/melnyk58/melnyk582010/melnyk58201001731/157642309-p%C3%BArpura-azul-azul-marino-ne%C3%B3n-ilustraci%C3%B3n-de-p%C3%B3ster-fluido-con-textura-abstracta-papel-tapiz.jpg"
                            alt="" width="100%" class="w-80 h-56 object-cover object-center">
                    </div>
                    <div class="p-6">
                        <div class="mb-2 flex items-center justify-between">
                            <p class="block font-sans text-base font-medium leading-relaxed text-gray-900">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint ratione id,
                                quia magni ipsam!
                            </p>
                            <p class="block font-sans text-xs font-medium leading-relaxed text-pink-500">
                                Apx S/. 20
                            </p>
                        </div>
                        <p class="block font-sans text-base font-normal leading-normal text-gray-700 opacity-75">
                            With plenty of talk and listen time, voice-activated Siri access, and an
                            available wireless charging case.
                        </p>
                    </div>
                    <div class="p-6 pt-0 w-full flex items-center">
                        <a href=""
                            class="w-full rounded-lg bg-gray-300 py-3  text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white">
                            Ver Ahora
                        </a>
                    </div>
                </div>

                <div
                    class="services_container grid justify-center w-auto gap-4 sm:flex-col sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                    <div
                        class="card-services-one relative flex w-80 min-w-min flex-col rounded-xl bg-white text-gray-700 shadow-md h-auto overflow-hidden mt-5">
                        <div class="relative mx-0 mt-0 h-auto overflow-hidden  bg-white bg-clip-border text-gray-700">
                            <img src="https://i.pinimg.com/736x/5b/bd/00/5bbd00e3adc63eb2313b609cfa4277f2.jpg"
                                alt="" width="100%" class="w-80 h-56 object-cover object-center">
                        </div>
                        <div class="p-6">
                            <div class="mb-2 flex items-center justify-between">
                                <p class="block font-sans text-base font-medium leading-relaxed text-gray-900">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint ratione
                                    id,
                                    quia magni ipsam!
                                </p>
                                <p class="block font-sans text-xs font-medium leading-relaxed text-pink-500">
                                    Apx S/. 20
                                </p>
                            </div>
                            <p class="block font-sans text-base font-normal leading-normal text-gray-700 opacity-75">
                                With plenty of talk and listen time, voice-activated Siri access, and an
                                available wireless charging case.
                            </p>
                        </div>
                        <div class="p-6 pt-0 w-full flex items-center">
                            <a href=""
                                class="w-full rounded-lg bg-gray-300 py-3  text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white">
                                Ver Ahora
                            </a>
                        </div>
                    </div>

                </div>
                <div
                    class="services_container grid justify-center w-auto gap-4 sm:flex-col sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                    <div
                        class="card-services-one relative flex w-80 min-w-min flex-col rounded-xl bg-white text-gray-700 shadow-md h-auto overflow-hidden mt-5">
                        <div class="relative mx-0 mt-0 h-auto overflow-hidden  bg-white bg-clip-border text-gray-700">
                            <img src="https://previews.123rf.com/images/melnyk58/melnyk582010/melnyk58201001731/157642309-p%C3%BArpura-azul-azul-marino-ne%C3%B3n-ilustraci%C3%B3n-de-p%C3%B3ster-fluido-con-textura-abstracta-papel-tapiz.jpg"
                                alt="" width="100%" class="w-80 h-56 object-cover object-center">
                        </div>
                        <div class="p-6">
                            <div class="mb-2 flex items-center justify-between">
                                <p class="block font-sans text-base font-medium leading-relaxed text-gray-900">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint ratione
                                    id,
                                    quia magni ipsam!
                                </p>
                                <p class="block font-sans text-xs font-medium leading-relaxed text-pink-500">
                                    Apx S/. 20
                                </p>
                            </div>
                            <p class="block font-sans text-base font-normal leading-normal text-gray-700 opacity-75">
                                With plenty of talk and listen time, voice-activated Siri access, and an
                                available wireless charging case.
                            </p>
                        </div>
                        <div class="p-6 pt-0 w-full flex items-center">
                            <a href=""
                                class="w-full rounded-lg bg-gray-300 py-3  text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white">
                                Ver Ahora
                            </a>
                        </div>
                    </div>

                </div>
                <div
                    class="services_container grid justify-center w-auto gap-4 sm:flex-col sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                    <div
                        class="card-services-one relative flex w-80 min-w-min flex-col rounded-xl bg-white text-gray-700 shadow-md h-auto overflow-hidden mt-5">
                        <div class="relative mx-0 mt-0 h-auto overflow-hidden  bg-white bg-clip-border text-gray-700">
                            <img src="https://i.pinimg.com/736x/5b/bd/00/5bbd00e3adc63eb2313b609cfa4277f2.jpg" alt="" width="100%"
                                class="w-80 h-56 object-cover object-center">
                        </div>
                        <div class="p-6">
                            <div class="mb-2 flex items-center justify-between">
                                <p class="block font-sans text-base font-medium leading-relaxed text-gray-900">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint ratione
                                    id,
                                    quia magni ipsam!
                                </p>
                                <p class="block font-sans text-xs font-medium leading-relaxed text-pink-500">
                                    Apx S/. 20
                                </p>
                            </div>
                            <p class="block font-sans text-base font-normal leading-normal text-gray-700 opacity-75">
                                With plenty of talk and listen time, voice-activated Siri access, and an
                                available wireless charging case.
                            </p>
                        </div>
                        <div class="p-6 pt-0 w-full flex items-center">
                            <a href=""
                                class="w-full rounded-lg bg-gray-300 py-3  text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white">
                                Ver Ahora
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="home_image_p" class="w-full h-20">
            {{-- <img src="{{ asset('img/defs.jpg') }}" alt="" width="100%" class="w-80"> --}}
        </section>

        <section class="home-preference  d-flex flex-column items-center">
            <h2 class="pref-title mb-5 fs-1 fw-bold mt-5 text-[#cf00be]">Porque elegirnos?</h2>
            <div class="pref-content flex justify-center gap-10 w-full flex-wrap mt-5">
                <div class="card_pref_blur flex flex-col items-center w-80 rounded-lg p-3">
                    <i class="bi bi-trophy bg-[#cf00bec2] rounded-full "
                        style="padding: 20px 35px; box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                    <div class="card-body mt-3">
                        <h5 class="card-title text-center fs-3 font-bold text-[#bf93ec]">Calidad</h5>
                        <p class="text-gray-400 text-center fs-4">Vivimos en un mundo donde todos dicen que tienen los
                            mejores
                            productos del mercado. Pero una cosa es afirmarlo y la otra es garantizarlo</p>
                    </div>
                </div>
                <div class="card_pref_blur flex flex-col items-center w-80 rounded-lg p-3">
                    <i class="bi bi-hand-thumbs-up bg-[#cf00bec2] rounded-full"
                        style="padding: 20px 35px;  box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                    <div class="card-body mt-3">
                        <h5 class="card-title text-center fs-3 font-bold text-[#bf93ec]">Honestidad</h5>
                        <p class="text-gray-400 text-center fs-4">La<strong class="bg-[#bf93ec] text-gray-900">
                                transparencia,
                                sinceridad y
                                franqueza,</strong> son
                            valores con las que cuenta Graph Evolutión</p>
                    </div>
                </div>
                <div class="card_pref_blur flex flex-col items-center w-80 rounded-lg p-3">
                    <i class="bi bi-heart-pulse bg-[#cf00bec2] rounded-full"
                        style="padding: 20px 35px;  box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                    <div class="card-body mt-3">
                        <h5 class="card-title text-center fs-3 font-bold text-[#bf93ec]">Pasión</h5>
                        <p class="text-gray-400 text-center fs-4">Disfrutamos lo que hacemos Por ello, el tener la
                            <strong class="bg-[#bf93ec] text-gray-900">pasión</strong> como uno de nuestro valor los
                            resulatos de
                            nuestro
                            trabajo son
                            satisfactorios para nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full">

            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner w-full">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="https://www.revistaneo.com/sites/default/files/inline-images/4_0.jpg" class="d-block w-full" alt="Graph Evolution">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJrKcALhRxumzSnAEBmfQPU52KNUTjsPB78X2EMmPYW0550kGRIU80SQ93KQlIwPpzZB4&usqp=CAU" class="d-block w-full" alt="Graph Evolution">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://p4.wallpaperbetter.com/wallpaper/351/211/664/colorful-abstract-3d-background-wallpaper-preview.jpg" class="d-block w-full" alt="Graph Evolution">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBI_5OmJACJkUSMfpqPfV1HXycZ-5e3bHl7rX7Q7Rde6JTKbIzDfKR5L-t_4MA4TD8-s0&usqp=CAU" class="d-block w-full" alt="Graph Evolution">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </section>
    </main>
    <footer class="footer" data-bs-theme="blue">
        <div class="footer-contanier">
            <div class="footer-container-box">
                <div>
                    <a href=""><img src="{{ asset('img/logo.png') }}" alt="" width=100></a>
                </div>
                {{-- <h2 class="footer-logo font-bold">Graph <br>Evolution</h2> --}}
                <p class="footer-description">Transformando ideas.</p>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">SERVICIOS</p>
                <ul>
                    <li><a href="">Diseño Logo</a></li>
                    <li><a href="">Banner</a></li>
                    <li><a href="">Volantes</a></li>
                </ul>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">EMPRESA</p>
                <ul>
                    <li><a href="">Nosotros</a></li>
                    <li><a href=">Servicios</a></li>
                    <li><a href="">Contacto</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">CONTACTO</p>
                <ul class="d-flex gap-2 footer-socials list-none">
                    <li><a href="" class=""><i class="bi bi-facebook"></i></a></li>
                    <li><a href="" class=""><i class="bi bi-envelope-fill"></i></a></li>
                    <li><a href="" class=""><i class="bi bi-messenger"></i></a></li>
                    <li><a href="" class=""><i class="bi bi-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <p class="copyrigth-text m-0 p-0">🌟 © 2023 Graph Evolution. todos los derechos reservados</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/hm_rv_ant.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    @yield('scripts')
</body>

</html>

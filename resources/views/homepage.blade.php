<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-x-hidden box-border p-0 m-0 scroll-smooth" >
    <header class="bg-lightblack w-screen h-[6rem] flex justify-center ">
        <div id="header-container--nav-logo" class="w-[90%] flex justify-between items-center">
            <div id="header-logo"></div>
            <nav>
                <ul class="list-none text-white flex gap-6 text-lg ">
                    <li class="transition hover:cursor-pointer hover:scale-110">
                        <p>
                            Qui sommes nous ?
                        </p>
                    </li>
                    <li class="transition hover:cursor-pointer hover:scale-110">
                        <p>
                            Nous contacter
                        </p>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div id="hero-banner"
            class="bg-[url('../../public/assets/img/homepage/hero-banner-backeats.png')] bg-center bg-no-repeat bg-cover w-screen h-[47rem] bg-black flex flex-col justify-center items-center text-white">
            <div id="hero-banner--titles" class="flex flex-col gap-6 mb-14">
                <h1 class="text-center font-bold text-5xl">Vitesse et satisfaction assurées avec nos bornes de fast food
                    !</h1>
                <h3 id="titles--sub" class="text-center font-light text-3xl">Réinventons ensemble le fast-food, une
                    bouchée à la fois</h3>
            </div>
            <form action="/register">
                <button>
                    <div class="w-64 h-35 flex items-center justify-center">
                        <span href="" class="relative items-center justify-start inline-block px-7 py-3 overflow-hidden font-medium transition-all shadow bg-blue-600 bg-no-repeat rounded-lg hover:bg-slate-200 group cursor-pointer">
                        <span class="absolute inset-0 border-0 group-hover:border-[25px] ease-linear duration-100 transition-all rounded-lg"></span>
                        <span class="relative w-full text-left text-white text-lg transition-colors duration-200 ease-in-out group-hover:text-blue-600">Espace Restaurateur</span>
                    </div>
                </button>
            </form>
        </div>
        <div id="articles-container" class="w-screen h-[60rem] flex flex-col justify-around items-center mt-10 gap-6">
            <article class="w-[70%] h-[22rem] flex justify-between items-center">
                <div id="article-image"
                    class="bg-[url('../../public/assets/img/homepage/bkscreens-backeats.png')] bg-cover bg-center w-[40rem] h-[22rem] rounded-xl">
                </div>
                <div id="article-content-container--right" class="w-[30rem] flex flex-col gap-4">
                    <h3 id="article-title" class="text-4xl font-bold">Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Nihil, suscipit?</h3>
                    <p id="article-sub" class="font-thin">Lorem, ipsum dolor.</p>
                    <p id="article-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, similique
                        asperiores. Illum iusto inventore omnis ipsum odit delectus optio, repellendus ipsa error
                        numquam quod necessitatibus sequi, tenetur unde dignissimos aut libero reprehenderit. Tempora
                        maiores voluptate sapiente unde, deserunt ab corrupti corporis nostrum quo atque blanditiis
                        molestias voluptates laudantium ullam delectus eos nihil, aperiam magni. At quis recusandae ex
                        illo exercitationem!</p>
                </div>
            </article>
            <article class="w-[70%] h-[22rem] flex flex-row justify-between items-center">
                <div id="article-content-container--left" class="w-[30rem] flex flex-col gap-4">
                    <h3 id="article-title" class="text-4xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Dignissimos, rem?</h3>
                    <p id="article-sub" class="font-thin">Lorem, ipsum dolor.</p>
                    <p id="article-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ipsum qui
                        accusantium ea! Nulla, quidem! Beatae ratione enim quibusdam sequi dolorum culpa quidem voluptas
                        iusto aliquid quo provident quas autem, inventore nesciunt voluptatum obcaecati, temporibus
                        asperiores pariatur odit. Consectetur repellendus, magni minima dignissimos aut impedit.
                        Voluptates expedita incidunt, doloribus, est velit saepe at fuga quisquam provident officiis
                        placeat corporis nihil!</p>
                </div>
                <div id="article-image"
                    class="bg-[url('../../public/assets/img/homepage/mcdonalds-backeats.png')] bg-cover bg-center w-[40rem] h-[22rem] rounded-xl">
                </div>
            </article>
        </div>
    </main>
    <footer class="w-full pt-[10vh] bg-lightblack flex flex-col justify-around items-center text-white gap-10vh">
        <h2 class="text-center font-bold text-4xl">Ils nous font confiance</h2>
        @php
            use Illuminate\Support\Facades\File;
            $images = File::allFiles(public_path('/assets/img/homepage/logo_caroussel'));
        @endphp
        <style>
            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                transform: translateX(calc(-250px * {{ count($images) }}));
                }
            }

            .animate-scroll {
                animation: scroll {{ count($images) * 5 }}s linear infinite;
            }
        </style>
        <div class="relative w-[90%] h-full overflow-hidden bg-lightblack h-24">
            <div class="absolute top-0 left-0 w-48 h-full bg-gradient-to-r from-lightblack to-transparent z-10"></div>
            <div class="absolute top-0 right-0 w-48 h-full bg-gradient-to-l from-lightblack to-transparent z-10"></div>
            <div class="flex animate-scroll w-[calc(250px * {{ count($images) }} * 2)]">
                @foreach ($images as $image)
                    <div class="w-64 h-28 flex-shrink-0 p-2">
                        <img src="{{ asset('/assets/img/homepage/logo_caroussel/' . $image->getFilename()) }}"
                            class="h-full w-full object-contain" alt="Image" />
                    </div>
                @endforeach
                @foreach ($images as $image)
                    <div class="w-64 h-28 flex-shrink-0 p-2">
                        <img src="{{ asset('/assets/img/homepage/logo_caroussel/' . $image->getFilename()) }}"
                            class="h-full w-full object-contain" alt="Image" />

                    </div>
                @endforeach
            </div>
            d
        </div>
        <div class="flex justify-start w-[90%]">
            <p class="font-bold text-4xl">Nous contacter</p>
        </div>
        <div class="w-[90%] h-[70vh] flex flex-row-reverse justify-between">
            <div id="mapid" style="height: 100%; width:50%;"></div>
            <script>
                var mymap = L.map('mapid').setView([48.8566, 2.3522], 17);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(mymap);
                L.marker([48.8566, 2.3522]).addTo(mymap).bindPopup('Back Eats,<br> Paris').openPopup();
            </script>
            <div class="w-[40%] h-full flex justify-center items-center">
                <form class="rounded  w-full h-full flex flex-col justify-between">
                    <div class="mb-4 h-[10%]">
                        <input
                            class="h-full shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="nom" type="text" placeholder="Nom">
                    </div>
                    <div class="mb-4 h-[10%]">
                        <input
                            class="h-full shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="prenom" type="text" placeholder="Prénom">
                    </div>
                    <div class="mb-4 h-[10%]">
                        <input
                            class="h-full shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" placeholder="Adresse Email">
                    </div>
                    <div class="mb-4 flex-grow h-[60%]">
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline h-full"
                            id="message" placeholder="Message"></textarea>
                    </div>
                    <div class="h-[10%]">
                        <button
                            class="h-full w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </footer>
</body>

</html>

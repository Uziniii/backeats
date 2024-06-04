<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-lightblack w-screen h-[6rem] flex justify-center ">
        <div id="header-container--nav-logo" class="w-[90%] flex justify-between items-center">
            <div id="header-logo"></div>
            <nav>
                <ul class="list-none text-white flex gap-4 text-lg ">
                    <li class="transition hover:cursor-pointer flex flex-col items-center">
                        <p>Qui sommes nous ?</p>
                        <span class="hover:animate-showline bg-white h-1"></span>
                    </li>
                    <li class="transition hover:cursor-pointer">
                        <p>Nous contacter</p>
                        <span class="hover:animate-showline bg-white h-1"></span>
                    </li>
                    <li class="transition hover:cursor-pointer">
                        <p>Espace restaurateur</p>
                        <span class="hover:animate-showline bg-white h-1"></span>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div id="hero-banner" class="bg-[url('../../public/assets/imageCss/hero-banner-backeats.png')] bg-center bg-no-repeat bg-cover w-screen h-[47rem] bg-black flex flex-col justify-center items-center text-white">
            <div id="hero-banner--titles" class="flex flex-col gap-6 mb-14">
                <h1 class="text-center font-bold  text-5xl">
                    Vitesse et satisfaction assurées avec nos bornes de fast food !
                </h1>
                <h3 id="titles--sub" class="text-center font-light text-3xl">
                    Réinventons ensemble le fast-food, une bouchée à la fois 
                </h3>
            </div>
            <div class="w-60 h-35 flex items-center justify-center">
                <span href="" class="relative items-center justify-start inline-block px-7 py-3 overflow-hidden font-medium transition-all shadow bg-blue-600 bg-no-repeat rounded-lg hover:bg-white group cursor-pointer">
                <span class="absolute inset-0 border-0 group-hover:border-[25px] ease-linear duration-100 transition-all rounded-lg"></span>
                <span class="relative w-full text-left text-white text-lg transition-colors duration-200 ease-in-out group-hover:text-blue-600">Espace Restaurateur</span>
            </div>
        </div>
        <div id="articles-container" class="w-screen h-[25rem]">
            <article>
                <div id="article-image" class="bg-[url('../../public/assets/imageCss/hero-banner-backeats.png')]"></div>
                <div id="article-content-container--right">
                    <h3 id="article-title"></h3>
                    <p id="article-text"></p>
                </div>
            </article>
            <article>
                <div id="article-content-container--left">
                    <h3 id="article-title"></h3>
                    <p id="article-text"></p>
                </div>
                <div id="article-image"></div>
            </article>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
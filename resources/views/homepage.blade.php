<head>
    @vite(['resources/css/app.css', 'ressources/js/app.js'])
</head>
<body class="overflow-x-hidden box-border p-0 m-0 scroll-smooth" >
    <header class="bg-lightblack w-screen h-[6rem] flex justify-center ">
        <div id="header-container--nav-logo" class="w-[90%] flex justify-between items-center">
            <div id="header-logo"></div>
            <nav>
                <ul class="list-none text-white flex gap-6 text-lg ">
                    <li class="transition hover:cursor-pointer hover:scale-110">
                        <p>Qui sommes nous ?</p>
                    </li>
                    <li class="transition hover:cursor-pointer hover:scale-110">
                        <p>Nous contacter</p>
                    </li>
                    <li class="transition hover:cursor-pointer hover:scale-110">
                        <p>Espace restaurateur</p>
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
                <span href="" class="relative items-center justify-start inline-block px-7 py-3 overflow-hidden font-medium transition-all shadow bg-blue-600 bg-no-repeat rounded-lg hover:bg-slate-200 group cursor-pointer">
                <span class="absolute inset-0 border-0 group-hover:border-[25px] ease-linear duration-100 transition-all rounded-lg"></span>
                <span class="relative w-full text-left text-white text-lg transition-colors duration-200 ease-in-out group-hover:text-blue-600">Espace Restaurateur</span>
            </div>
        </div>
        <div id="articles-container" class="w-screen h-[60rem] flex flex-col justify-around items-center mt-10 gap-6">

            <article class="w-[70%] h-[22rem] flex justify-between items-center">
                <div id="article-image" class="bg-[url('../../public/assets/imageCss/bkscreens-backeats.png')] bg-cover bg-center w-[40rem] h-[22rem] rounded-xl"></div>
                <div id="article-content-container--right" class="w-[30rem] flex flex-col gap-4">
                    <h3 id="article-title" class="text-4xl font-bold">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, suscipit?
                    </h3>
                    <p id="article-sub" class="font-thin">
                        Lorem, ipsum dolor.
                    </p>
                    <p id="article-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, similique asperiores. Illum iusto inventore omnis ipsum odit delectus optio, repellendus ipsa error numquam quod necessitatibus sequi, tenetur unde dignissimos aut libero reprehenderit. Tempora maiores voluptate sapiente unde, deserunt ab corrupti corporis nostrum quo atque blanditiis molestias voluptates laudantium ullam delectus eos nihil, aperiam magni. At quis recusandae ex illo exercitationem!
                    </p>
                </div>
            </article>

            <article class="w-[70%] h-[22rem] flex flex-row justify-between items-center">
                <div id="article-content-container--left" class="w-[30rem] flex flex-col gap-4">
                    <h3 id="article-title" class="text-4xl font-bold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, rem?
                    </h3>
                    <p id="article-sub" class="font-thin">
                        Lorem, ipsum dolor.
                    </p>
                    <p id="article-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ipsum qui accusantium ea! Nulla, quidem! Beatae ratione enim quibusdam sequi dolorum culpa quidem voluptas iusto aliquid quo provident quas autem, inventore nesciunt voluptatum obcaecati, temporibus asperiores pariatur odit. Consectetur repellendus, magni minima dignissimos aut impedit. Voluptates expedita incidunt, doloribus, est velit saepe at fuga quisquam provident officiis placeat corporis nihil!
                    </p>
                </div>
                <div id="article-image" class="bg-[url('../../public/assets/imageCss/mcdonalds-backeats.png')] bg-cover bg-center w-[40rem] h-[22rem] rounded-xl"></div>
            </article>

        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
<head>
    @vite(['resources/css/app.css', 'resources/js/kiosk.js'])
</head>

<body class="h-[100vh]">
    <main style="background-image: url({{URL::asset('/backgroundKiosk.png')}})" id="backgroundKiosk"
        class="bg-cover flex bg-repeat h-[100vh]">
        <div id="startKiosk" style="background-image: url({{URL::asset('/backgroundKiosk.png')}})"
            class="flex flex-col h-full  justify-center w-full absolute bg-cover flex bg-repeat">
            <div class="h-[60%] w-full flex items-end justify-center">
                <img class="w-[750px] h-[750px] mb-[3vh]"
                    src="{{ URL::asset('assets/img/kiosk/Burger-king-logo-1 1.png')}}" alt="logo du restaurant">
            </div>

            <div class="h-[40%] flex items-end justify-center w-full">
                <a id="startBtn"
                    class="bg-[#966C4D] text-white mb-[5vh] pt-[80px] pb-[80px] w-[85vw] text-center rounded-3xl text-[90px] font-bold color-white">Commencer</a>
            </div>
        </div>

        <div id="modalAsk" style="background-color: rgb(125, 102, 48, 0.5)"
            class="absolute w-full h-full z-2 flex items-center justify-center hidden">
            <div class="w-[80vw] h-[30vh] bg-white rounded-2xl">
                <div class="h-[13vh] w-full flex flex-col items-center justify-center">
                    <p class="text-[60px] font-bold text-center">Êtes vous encore là ?</p>
                    <p class="text-[35px] text-center">Nous attendons votre commande</p>
                </div>

                <div class="h-[4vh] w-full flex items-center justify-center ">
                    <div class="w-[90%] h-[2px] bg-gray-400 rounded-2xl">

                    </div>
                </div>

                <div class="h-[13vh] w-ful flex justify-center items-center gap-[10vw]">
                    <button id="modalAskYes"
                        class="bg-green-600 w-[25vw] font-bold  h-[8vh] text-[50px] text-white rounded-2xl">Oui</button>
                    <button id="modalAskNo"
                        class="bg-red-600 w-[25vw] font-bold h-[8vh] text-[50px] text-white rounded-2xl">Non</button>
                </div>
            </div>
        </div>

        <div class="w-[70%] h-full p-[30px]">
            <div class="w-full h-[100%]">
                <div>
                    <h1 class="font-bold text-[100px] text-[#805C3A]">Burgers</h1>
                    <p class="text-[30px] text-[#805C3A]">Un large choix de burgers</p>
                </div>
                <div class="mt-[4vh] flex flex-wrap gap-7">
                    @foreach ($menus as $menu)
                    <a href="{{ route('kiosk_select', ['token' => $token, 'id' => $menu->id]) }}">
                        <article
                            class="flex flex-col items-center bg-[#FFFAEC] rounded-lg px-[2vw] py-[1vh] shadow-[rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;]">
                            <img class="w-[170px] h-[130px]" src="{{Storage::url($menu['image'])}}"
                                alt="image de l'article">
                            <h2 class="text-[30px] text-[#805C3A] font-medium">{{ $menu->name }}</h2>
                            <p class="text-[30px] text-[#805C3A] font-medium">{{ $menu->price }}</p>
                        </article>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="w-[30%] h-full bg-[#966C4D] flex flex-col">
            <div class="w-full h-[10%]  flex items-center justify-center">
                <img class="mb-[20px]" src="{{URL::asset('assets/img/kiosk/chevron_top_kiosk.png')}}"
                    alt="logo du restaurant">
            </div>

            <div class="w-full h-[70%] gap-[20px] flex flex-col items-center">
                @foreach ($categories as $categorie)
                <a href="{{ route('kiosk_menus_by_category', ['token' => $token, 'category_id' => $categorie->id]) }}">
                    <article class="flex flex-col items-center">
                        <img class="w-[170px] h-[130px]" src="{{ Storage::url($categorie->photo) }}"
                            alt="image de l'article">
                        <h2 class="text-[30px] text-white">{{ $categorie->name }}</h2>
                    </article>
                </a>
                @endforeach
            </div>

            <div class="w-full h-[10%] flex items-center justify-center">
                <img class="mb-[20px]" src="{{URL::asset('assets/img/kiosk/chevron_bot_kiosk.png')}}"
                    alt="logo du restaurant">
            </div>

            <div id="payButton" class="w-full h-[10%] flex items-center justify-center">
                <a class="bg-[#805C3A] p-[30px] w-[85%] flex p-[10px] h-[70%] rounded-2xl">
                    <div class="w-[50%] h-full flex items-center justify-center">
                        <img src="{{URL::asset('assets/img/kiosk/buy.png')}}" class="w-[70px] h-[70px]"
                            alt="logo du restaurant">
                    </div>

                    <div class="w-[50%] h-full flex flex-col justify-center">
                        <p class="text-white text-[30px]">A payer</p>
                        <p class="text-white font-bold text-[30px]">13,99€</p>
                    </div>
                </a>
            </div>
        </div>
    </main>
</body>

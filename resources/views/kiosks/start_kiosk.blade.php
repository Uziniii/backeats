<head>
    @vite(['resources/css/app.css', 'resources/js/kiosk.js'])
</head>
<body class="h-[100vh]">  
    <main style="background-image: url({{asset("/backgroundKiosk.png")}})" id="backgroundKiosk" class="bg-cover flex bg-repeat h-[100vh]">
        
    
        <div id="startKiosk" style="background-image: url({{asset("/backgroundKiosk.png")}})" class="flex flex-col h-full  justify-center w-full absolute bg-cover flex bg-repeat">
            <div class="h-[60%] w-full flex items-end justify-center">
                <img class="w-[750px] h-[750px] mb-[3vh]" src="{{asset("assets/img/kiosk/Burger-king-logo-1 1.png")}}" alt="logo du restaurant">
            </div>

            <div class="h-[40%] flex items-end justify-center w-full">
                <a id="startBtn" class=" bg-[#966C4D]  text-white mb-[5vh] pt-[80px] pb-[80px] w-[85vw] text-center rounded-3xl text-[90px] font-bold color-white">Commencer</a>
            </div>
        </div>


        <div class="w-[70%] h-full p-[30px]">
            <div class="w-full h-[30%]">
                <div>
                    <h1 class="font-bold text-[100px] text-[#805C3A]">Burgers</h1>
                    <p class="text-[30px] text-[#805C3A]">Un large choix de burgers</p>
                </div>
            </div>
        </div>

        <div class="w-[30%] h-full bg-[#966C4D]  flex flex-col">
            <div class="w-full h-[10%]  flex items-center justify-center">
                <img class="mb-[20px]" src="{{asset("assets/img/kiosk/chevron_top_kiosk.png")}}" alt="logo du restaurant">
            </div>

            <div class="w-full h-[70%]">
    
            </div>

            <div class="w-full h-[10%] flex items-center justify-center">
                <img class="mb-[20px]" src="{{asset("assets/img/kiosk/chevron_bot_kiosk.png")}}" alt="logo du restaurant">
            </div>

            <div class="w-full h-[10%] flex items-center justify-center">
                <a class="bg-[#805C3A] p-[30px] w-[85%] flex p-[10px] h-[70%] rounded-2xl">
                    <div class="w-[50%] h-full flex items-center justify-center">
                        <img src="{{asset("assets/img/kiosk/buy.png")}}" class="w-[70px] h-[70px]" alt="logo du restaurant">
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
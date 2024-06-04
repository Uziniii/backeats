<head>
    @vite(['resources/css/app.css', 'ressources/js/app.js'])
</head>
<body class="h-[100vh]">  
    <main style="background-image: url({{asset("/backgroundKiosk.png")}})" id="backgroundKiosk" class="bg-cover bg-repeat h-[100vh]">
        <div class="h-[100vh]">
            <div>
                <img class="w-[580px] h-[580px]" src="{{asset("assets/logoKiosk/Burger-king-logo-1 1.png")}}" alt="logo du restaurant">
                <a href="">Commencer</a>
            </div>
        </div>
    </main>
</body>
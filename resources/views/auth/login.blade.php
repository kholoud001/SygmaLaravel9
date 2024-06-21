<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sygma.AI</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="h-screen w-full" style="background-image: url('{{ asset('images/login.png') }}'); background-size: cover;">
    <div class="h-full flex justify-end mx-12 items-center">
        <div class="h-max w-72">
            <div class="bg-[#008080] bg-opacity-75 rounded-lg">
                <div class="flex flex-col h-[402px] items-center justify-between px-4 py-2">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/SygmaLogo2.png') }}" alt="Sygma Logo">
                        <form method="POST" action="{{ route('login') }}" class="bg-[#00A1A1] p-4 flex flex-col gap-2 rounded-lg">
                            @csrf
                            <input class="z-50 outline-none w-full rounded-lg p-2" type="text" name="email" placeholder="Identifiant...">
                            <input class="z-50 outline-none w-full rounded-lg p-2" type="password" name="password" placeholder="Mot de passe...">
                            <button type="submit" class="mt-2 bg-transparent underline text-white text-sm">Mot de passe oublié?</button>
                        </form>
                    </div>
                    <a href="{{ route('dashboard') }}" class="z-50 mb-4 font-bold bg-[#00A1A1] px-8 py-2 text-white rounded-lg text-xl">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end items-end h-full w-full fixed top-0 z-5">
        <div class="w-full h-fit bg-[#008080]">
            <div class="flex justify-between px-4 py-2 items-center">
                <p class="text-md text-white">© Copyright SYGMA.AI 2024</p>
                <img src="{{ asset('images/SygmaLogo.png') }}" class="w-1/12" alt="Sygma Logo">
            </div>
        </div>
    </div>
</body>
</html>

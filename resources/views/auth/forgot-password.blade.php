
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sygma.AI - Forgot Password</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="h-screen w-full" style="background-image: url('{{ asset('images/login.png') }}'); background-size: cover;">
    <div class="h-full flex justify-end items-center">
        <div class="w-72 max-w-md mx-12">
            <div class="bg-[#008080] bg-opacity-75 rounded-lg shadow-lg">
                <div class="flex flex-col h-auto md:h-[500px] items-center justify-between px-4 py-4 md:py-8">
                    <div class="flex flex-col items-center space-y-4">
                        <img src="{{ asset('images/SygmaLogo2.png') }}" alt="Sygma Logo" class="h-24 md:h-32">
                        <form method="POST" action="{{ route('register') }}" class="bg-[#00A1A1] p-4 md:p-8 flex flex-col gap-4 rounded-lg w-full max-w-md">
                            @csrf

                    
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="z-50 outline-none w-full rounded-lg p-2" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            

                            <button type="submit" class="mt-4 bg-transparent underline text-white text-sm">Register</button>
                        </form>
                    </div>
                    <a href="{{ route('login') }}" class="z-50 mt-4 font-bold bg-[#00A1A1] px-8 py-2 text-white rounded-lg text-xl">
                        <span class="text-white text-lg">
                        Already registered?
                        </span> Log in</a>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 right-0 w-full bg-[#008080] text-white py-2 px-4">
        <div class="flex justify-between items-center">
            <p class="text-md">© Copyright SYGMA.AI 2024</p>
            <img src="{{ asset('images/SygmaLogo.png') }}" class="h-8" alt="Sygma Logo">
        </div>
    </div>
</body>
</html>

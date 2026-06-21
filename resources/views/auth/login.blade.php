<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login - Portfolio Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            .hero-title {
                font-family: 'Outfit', sans-serif;
            }
            .glow-effect {
                position: absolute;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(99,102,241,0.15) 0%, rgba(0,0,0,0) 70%);
                filter: blur(40px);
                z-index: -1;
            }
        </style>
    </head>
    <body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center relative overflow-hidden p-4">
        
        <!-- Glowing background spots -->
        <div class="glow-effect top-10 left-10 animate-pulse" style="animation-duration: 8s;"></div>
        <div class="glow-effect bottom-10 right-10 animate-pulse" style="animation-duration: 12s;"></div>

        <div class="w-full max-w-md bg-slate-900/40 backdrop-blur-md border border-slate-800 p-8 rounded-2xl shadow-2xl relative">
            
            <div class="text-center mb-8">
                <a href="/" class="text-2xl font-bold tracking-tight bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent hero-title">
                    fani.intan
                </a>
                <p class="text-slate-400 text-sm mt-2">Sign in to manage your portfolio content</p>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-4 bg-red-500/10 border border-red-500/30 text-red-400 p-3 rounded-lg text-sm">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-350 mb-2">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="name@example.com"
                        class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-500 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-350 mb-2">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••"
                        class="w-full px-4 py-2.5 bg-slate-950/60 border border-slate-800 rounded-lg text-slate-100 placeholder-slate-500 focus:outline-none focus:border-indigo-500 transition-colors text-sm">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm text-slate-400 select-none cursor-pointer">
                        <input type="checkbox" name="remember" class="mr-2 rounded border-slate-800 bg-slate-950 text-indigo-500 focus:ring-indigo-500 focus:ring-offset-slate-900">
                        Remember me
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full py-3 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold rounded-lg shadow-lg shadow-indigo-500/25 transition-all duration-300">
                    Sign In
                </button>
            </form>

            <div class="mt-6 text-center text-xs">
                <a href="/" class="text-slate-500 hover:text-slate-300 transition-colors flex items-center justify-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                    Back to portfolio
                </a>
            </div>
        </div>
    </body>
</html>

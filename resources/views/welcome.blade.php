<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $profile->name }} | Personal Portfolio</title>
        <meta name="description" content="Personal Portfolio of {{ $profile->name }} - {{ $profile->title }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            .hero-title {
                font-family: 'Outfit', sans-serif;
            }
            .code-font {
                font-family: 'Fira Code', monospace;
            }
            .bg-grid-pattern {
                background-image: 
                    linear-gradient(to right, rgba(99, 102, 241, 0.03) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(99, 102, 241, 0.03) 1px, transparent 1px);
                background-size: 40px 40px;
            }
            .ambient-glow-1 {
                position: absolute;
                top: -150px;
                right: -150px;
                width: 700px;
                height: 700px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(99, 102, 241, 0.07) 0%, rgba(139, 92, 246, 0.03) 50%, rgba(0,0,0,0) 70%);
                filter: blur(80px);
                z-index: -10;
            }
            .ambient-glow-2 {
                position: absolute;
                bottom: 5%;
                left: -150px;
                width: 600px;
                height: 600px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(6, 182, 212, 0.05) 0%, rgba(99, 102, 241, 0.02) 50%, rgba(0,0,0,0) 70%);
                filter: blur(80px);
                z-index: -10;
            }
        </style>
    </head>
    <body class="bg-slate-50 text-slate-800 min-h-screen relative overflow-x-hidden selection:bg-indigo-600 selection:text-white">

        <!-- Background grid & glow -->
        <div class="absolute inset-0 bg-grid-pattern z-[-20] pointer-events-none"></div>
        <div class="ambient-glow-1"></div>
        <div class="ambient-glow-2"></div>

        <!-- Floating Decorative Graphic Accents -->
        <div class="absolute top-[18%] left-[8%] text-indigo-300/40 pointer-events-none select-none text-2xl font-light font-sans hidden lg:block animate-bounce" style="animation-duration: 6s;">+</div>
        <div class="absolute top-[35%] right-[6%] text-purple-300/40 pointer-events-none select-none text-3xl font-light font-sans hidden lg:block animate-bounce" style="animation-duration: 8s;">+</div>
        <div class="absolute bottom-[25%] left-[4%] text-cyan-300/45 pointer-events-none select-none text-2xl font-light font-sans hidden lg:block animate-bounce" style="animation-duration: 7s;">+</div>

        <!-- Navbar -->
        <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 shadow-sm shadow-slate-100/30">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-xl font-bold tracking-tight text-indigo-600 hero-title flex items-center gap-1">
                            <span class="w-2.5 h-2.5 rounded bg-indigo-600"></span>
                            {{ strtolower(str_replace(' ', '.', $profile->name)) }}
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-center space-x-8 text-sm font-medium">
                            <a href="#home" class="text-indigo-600 hover:text-indigo-700 transition-colors">Home</a>
                            <a href="#about" class="text-slate-600 hover:text-indigo-600 transition-colors">About</a>
                            <a href="#skills" class="text-slate-600 hover:text-indigo-600 transition-colors">Skills</a>
                            <a href="#projects" class="text-slate-600 hover:text-indigo-600 transition-colors">Projects</a>
                            <a href="#contact" class="text-slate-600 hover:text-indigo-600 transition-colors">Contact</a>
                            <a href="{{ route('login') }}" class="px-3.5 py-1.5 border border-slate-200 hover:border-indigo-500 rounded-lg text-slate-700 hover:text-indigo-600 bg-white hover:bg-slate-50 transition-all shadow-sm">
                                Admin Login
                            </a>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <!-- Mobile Menu Button -->
                        <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-500 hover:text-slate-700 hover:bg-slate-100 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden md:hidden bg-white border-b border-slate-100" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-base font-medium">
                    <a href="#home" class="block px-3 py-2 rounded-md text-indigo-600 bg-slate-50">Home</a>
                    <a href="#about" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">About</a>
                    <a href="#skills" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Skills</a>
                    <a href="#projects" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Projects</a>
                    <a href="#contact" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Contact</a>
                    <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Admin Login</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative pt-16 pb-20 md:pt-24 md:pb-28 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Copy & Actions -->
                <div class="lg:col-span-7 text-left flex flex-col items-start">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-indigo-100 bg-indigo-50/70 text-indigo-700 text-xs font-bold mb-6 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                        <span>Open for freelance & collaborations</span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="hero-title text-4xl sm:text-6xl font-extrabold tracking-tight text-slate-900 mb-6 leading-[1.1]">
                        Crafting Exceptional <br/>
                        <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent">Digital Experiences</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-slate-600 text-base sm:text-lg max-w-xl mb-8 leading-relaxed font-light">
                        Hi, I'm <span class="text-slate-900 font-bold">{{ $profile->name }}</span>. {{ $profile->sub_title }}
                    </p>

                    <!-- Action Buttons & Socials -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full sm:w-auto mb-8">
                        <a href="#projects" class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-md shadow-indigo-600/15 transition-all duration-300 hover:-translate-y-0.5">
                            View My Work
                            <svg class="ml-2 w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 rounded-xl border border-slate-205 hover:border-slate-350 bg-white hover:bg-slate-50 text-slate-700 hover:text-slate-950 font-semibold transition-all duration-300 hover:-translate-y-0.5">
                            Get in Touch
                        </a>

                        <!-- Social Icons Row -->
                        <div class="flex items-center justify-center gap-3.5 pl-0 sm:pl-4 mt-2 sm:mt-0">
                            @if($profile->github_url)
                                <a href="{{ $profile->github_url }}" target="_blank" class="w-10 h-10 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 text-slate-500 hover:text-indigo-600 flex items-center justify-center transition-all duration-300 hover:shadow-sm" title="GitHub">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"/></svg>
                                </a>
                            @endif
                            @if($profile->linkedin_url)
                                <a href="{{ $profile->linkedin_url }}" target="_blank" class="w-10 h-10 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 text-slate-500 hover:text-indigo-600 flex items-center justify-center transition-all duration-300 hover:shadow-sm" title="LinkedIn">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Code & Mockup Card -->
                <div class="lg:col-span-5 w-full flex justify-center">
                    <div class="w-full max-w-[420px] bg-white border border-slate-200/90 rounded-2xl shadow-xl shadow-slate-200/50 overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
                        <!-- Top header browser dots -->
                        <div class="flex items-center justify-between px-4 py-3 bg-slate-50 border-b border-slate-100">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-red-400/90 inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-400/90 inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-green-400/90 inline-block"></span>
                            </div>
                            <div class="text-[11px] font-bold text-slate-400 code-font select-none">PortfolioService.php</div>
                            <div class="w-6"></div>
                        </div>

                        <!-- Code Content Box -->
                        <div class="p-6 bg-slate-950 text-slate-300 code-font text-xs leading-[1.6] overflow-x-auto min-h-[300px]">
                            <p><span class="text-indigo-400">namespace</span> App\Services;</p>
                            <p class="mt-2"><span class="text-purple-400">class</span> <span class="text-emerald-400">PortfolioBuilder</span> {</p>
                            <p class="pl-4 mt-1"><span class="text-slate-500">// Driven by clean & solid code</span></p>
                            <p class="pl-4"><span class="text-purple-400">public</span> <span class="text-blue-400">function</span> <span class="text-cyan-400">getDeveloperProfile</span>() {</p>
                            <p class="pl-8 mt-1"><span class="text-purple-400">return</span> [</p>
                            <p class="pl-12"><span class="text-amber-300">'name'</span> => <span class="text-emerald-300">'Fani Intan'</span>,</p>
                            <p class="pl-12"><span class="text-amber-300">'role'</span> => <span class="text-emerald-300">'Web Developer'</span>,</p>
                            <p class="pl-12"><span class="text-amber-300">'framework'</span> => <span class="text-indigo-300">'Laravel 12.x'</span>,</p>
                            <p class="pl-12"><span class="text-amber-300">'database'</span> => <span class="text-cyan-300">'MySQL XAMPP'</span>,</p>
                            <p class="pl-12"><span class="text-amber-300">'open_to_work'</span> => <span class="text-yellow-400">true</span></p>
                            <p class="pl-8">];</p>
                            <p class="pl-4">}</p>
                            <br/>
                            <p class="pl-4"><span class="text-purple-400">public</span> <span class="text-blue-400">function</span> <span class="text-cyan-400">codeStatus</span>() {</p>
                            <p class="pl-8"><span class="text-purple-400">return</span> <span class="text-amber-300">"Writing robust code"</span>;</p>
                            <p class="pl-4">}</p>
                            <p>}</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tech Stack Row -->
            <div class="mt-20 w-full max-w-6xl border-t border-slate-200/80 pt-10 text-center">
                <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 font-bold mb-6">Primary Tech Stack & Tools</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold text-slate-655">
                    <span class="flex items-center gap-1.5 px-4 py-2 bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:text-indigo-650 hover:-translate-y-0.5 transition-all duration-300 cursor-default select-none">
                        🐘 PHP
                    </span>
                    <span class="flex items-center gap-1.5 px-4 py-2 bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:text-indigo-650 hover:-translate-y-0.5 transition-all duration-300 cursor-default select-none">
                        🔥 Laravel
                    </span>
                    <span class="flex items-center gap-1.5 px-4 py-2 bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:text-indigo-650 hover:-translate-y-0.5 transition-all duration-300 cursor-default select-none">
                        ⚡ JavaScript
                    </span>
                    <span class="flex items-center gap-1.5 px-4 py-2 bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:text-indigo-650 hover:-translate-y-0.5 transition-all duration-300 cursor-default select-none">
                        🟢 Vue.js
                    </span>
                    <span class="flex items-center gap-1.5 px-4 py-2 bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:text-indigo-650 hover:-translate-y-0.5 transition-all duration-300 cursor-default select-none">
                        🌊 Tailwind CSS
                    </span>
                    <span class="flex items-center gap-1.5 px-4 py-2 bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:text-indigo-650 hover:-translate-y-0.5 transition-all duration-300 cursor-default select-none">
                        🐬 MySQL
                    </span>
                    <span class="flex items-center gap-1.5 px-4 py-2 bg-white border border-slate-200/60 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:text-indigo-650 hover:-translate-y-0.5 transition-all duration-300 cursor-default select-none">
                        🐙 Git / GitHub
                    </span>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 border-t border-slate-100 bg-white relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div>
                        <div class="h-96 w-full rounded-2xl border border-slate-200/80 overflow-hidden relative group shadow-sm bg-gradient-to-br from-indigo-50 via-slate-100 to-slate-50 flex items-center justify-center">
                            @if($profile->profile_photo)
                                <!-- Full Image -->
                                <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="{{ $profile->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500">
                                <!-- Bottom Gradient Overlay -->
                                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/90 via-slate-900/40 to-transparent p-6 text-left">
                                    <h3 class="text-white font-extrabold text-xl hero-title">{{ $profile->name }}</h3>
                                    <p class="text-slate-205 text-sm font-semibold mt-1">{{ $profile->title }}</p>
                                </div>
                            @else
                                <!-- Grid Fallback Layout -->
                                <div class="absolute inset-0 bg-grid-pattern opacity-[0.3]"></div>
                                <div class="z-10 text-center">
                                    <div class="w-28 h-28 rounded-3xl bg-white border border-slate-200/60 mx-auto mb-5 overflow-hidden flex items-center justify-center shadow-md rotate-3 group-hover:rotate-0 transition-all duration-300 shrink-0">
                                        <span class="text-5xl">👩‍💻</span>
                                    </div>
                                    <h3 class="text-slate-900 font-extrabold text-xl hero-title">{{ $profile->name }}</h3>
                                    <p class="text-slate-550 text-sm font-semibold mt-1">{{ $profile->title }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-1.5 text-xs text-indigo-650 font-bold uppercase tracking-wider mb-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                            Profile Overview
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-6 hero-title">About Me</h2>
                        <p class="text-slate-650 mb-8 leading-relaxed font-light text-base">
                            {{ $profile->about_text }}
                        </p>
                        
                        <!-- Premium Stats Grid -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-slate-50/70 border border-slate-150 p-5 rounded-xl hover:shadow-md hover:border-indigo-250 transition-all duration-300">
                                <div class="text-3xl font-extrabold text-indigo-600 hero-title">3+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider font-bold mt-1.5">Years Experience</div>
                            </div>
                            <div class="bg-slate-50/70 border border-slate-150 p-5 rounded-xl hover:shadow-md hover:border-purple-250 transition-all duration-300">
                                <div class="text-3xl font-extrabold text-purple-650 hero-title">15+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider font-bold mt-1.5">Projects Completed</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline/Journey -->
                <div class="mt-28 border-t border-slate-100 pt-20">
                    <div class="text-center mb-16">
                        <div class="inline-flex items-center gap-1.5 text-xs text-indigo-650 font-bold uppercase tracking-wider mb-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                            Career Road
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 hero-title">My Professional Journey</h3>
                        <p class="text-slate-500 text-sm font-light mt-1">A timeline of my professional experience and education</p>
                    </div>
                    
                    <div class="max-w-3xl mx-auto relative before:absolute before:inset-y-0 before:left-4 sm:before:left-1/2 before:w-0.5 before:bg-slate-200/50">
                        <!-- Timeline Item 1 -->
                        <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between mb-12 sm:mb-10 group">
                            <div class="absolute left-4 sm:left-1/2 -translate-x-1/2 w-4.5 h-4.5 rounded-full bg-indigo-600 border-4 border-white shadow-sm z-10 group-hover:scale-125 transition-transform duration-300"></div>
                            
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-0 sm:text-right order-2 sm:order-1">
                                <h4 class="text-base font-bold text-slate-900">Fullstack Web Developer</h4>
                                <p class="text-xs text-indigo-650 font-bold mt-0.5">Freelance & Collaborations</p>
                                <p class="text-sm text-slate-500 font-light mt-2 leading-relaxed">Developing tailored web systems, configuring database servers, and integrating API platforms for diverse client needs.</p>
                            </div>
                            
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-8 sm:text-left order-1 sm:order-2 mb-2 sm:mb-0">
                                <span class="px-3 py-1 bg-indigo-50 text-indigo-700 text-xs font-bold rounded-full border border-indigo-100/50">2024 - Present</span>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between mb-12 sm:mb-10 group">
                            <div class="absolute left-4 sm:left-1/2 -translate-x-1/2 w-4.5 h-4.5 rounded-full bg-purple-600 border-4 border-white shadow-sm z-10 group-hover:scale-125 transition-transform duration-300"></div>
                            
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-0 sm:text-right order-2 sm:order-1 mb-2 sm:mb-0">
                                <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-bold rounded-full border border-purple-100/50">2023 - 2024</span>
                            </div>
                            
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-8 sm:text-left order-1 sm:order-2">
                                <h4 class="text-base font-bold text-slate-900">Frontend Developer Intern</h4>
                                <p class="text-xs text-purple-600 font-bold mt-0.5">Tech Development Center</p>
                                <p class="text-sm text-slate-500 font-light mt-2 leading-relaxed">Built interactive dashboard modules, integrated REST API calls, and optimized CSS bundle performance with Vite & Tailwind.</p>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between group">
                            <div class="absolute left-4 sm:left-1/2 -translate-x-1/2 w-4.5 h-4.5 rounded-full bg-emerald-600 border-4 border-white shadow-sm z-10 group-hover:scale-125 transition-transform duration-300"></div>
                            
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-0 sm:text-right order-2 sm:order-1">
                                <h4 class="text-base font-bold text-slate-900">Information Technology</h4>
                                <p class="text-xs text-emerald-650 font-bold mt-0.5">University Degree Graduate</p>
                                <p class="text-sm text-slate-500 font-light mt-2 leading-relaxed">Graduated with honors, focusing on web architecture, software engineering principles, and databases.</p>
                            </div>
                            
                            <div class="w-full sm:w-[45%] pl-12 sm:pl-8 sm:text-left order-1 sm:order-2 mb-2 sm:mb-0">
                                <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-100/50">2020 - 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-24 border-t border-slate-100">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-1.5 text-xs text-indigo-650 font-bold uppercase tracking-wider mb-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                        My Capabilities
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 hero-title">Skills & Toolkit</h2>
                    <p class="text-slate-550 max-w-xl mx-auto font-light leading-relaxed">
                        Here are some of the technologies and practices I leverage to bring ideas to life.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        $colorMap = [
                            'Frontend' => [
                                'border' => 'hover:border-indigo-300', 
                                'bg' => 'bg-indigo-50', 
                                'text' => 'text-indigo-600', 
                                'shadow' => 'hover:shadow-indigo-500/5', 
                                'topLine' => 'bg-indigo-600'
                            ],
                            'Backend' => [
                                'border' => 'hover:border-purple-300', 
                                'bg' => 'bg-purple-50', 
                                'text' => 'text-purple-600', 
                                'shadow' => 'hover:shadow-purple-500/5', 
                                'topLine' => 'bg-purple-600'
                            ],
                            'DevOps' => [
                                'border' => 'hover:border-cyan-300', 
                                'bg' => 'bg-cyan-50', 
                                'text' => 'text-cyan-600', 
                                'shadow' => 'hover:shadow-cyan-500/5', 
                                'topLine' => 'bg-cyan-600'
                            ]
                        ];
                    @endphp

                    @foreach($skills as $skill)
                        @php
                            $colors = $colorMap[$skill->category] ?? [
                                'border' => 'hover:border-slate-350', 
                                'bg' => 'bg-slate-50', 
                                'text' => 'text-slate-600', 
                                'shadow' => 'hover:shadow-slate-500/5', 
                                'topLine' => 'bg-slate-500'
                            ];
                        @endphp
                        <div class="p-6 rounded-xl bg-white border border-slate-200/80 {{ $colors['border'] }} hover:shadow-lg {{ $colors['shadow'] }} hover:-translate-y-1 transition-all duration-300 group relative overflow-hidden">
                            
                            <!-- Accent Top Line -->
                            <div class="absolute top-0 left-0 right-0 h-1 {{ $colors['topLine'] }}"></div>

                            <div class="w-12 h-12 rounded-xl {{ $colors['bg'] }} {{ $colors['text'] }} flex items-center justify-center mb-5 group-hover:scale-110 transition-transform shadow-sm">
                                {{ $skill->icon }}
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2.5">{{ $skill->name }}</h3>
                            <p class="text-slate-600 text-sm font-light leading-relaxed">
                                {{ $skill->description }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24 border-t border-slate-100 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                    <div>
                        <div class="inline-flex items-center gap-1.5 text-xs text-indigo-650 font-bold uppercase tracking-wider mb-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                            My Portfolios
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 hero-title">Selected Projects</h2>
                        <p class="text-slate-550 max-w-xl font-light">
                            A curated selection of projects I've built, showing my expertise.
                        </p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <a href="#" class="inline-flex items-center text-sm font-bold text-indigo-600 hover:text-indigo-700 transition-colors group">
                            View all projects
                            <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    @foreach($projects as $project)
                        <div class="group rounded-2xl overflow-hidden bg-white border border-slate-200/80 hover:shadow-2xl hover:shadow-slate-150/40 hover:border-slate-300/80 hover:-translate-y-1 transition-all duration-500">
                            
                            <!-- Thumbnail Area -->
                            <div class="h-52 bg-gradient-to-tr {{ $loop->first ? 'from-indigo-50/70' : 'from-purple-50/70' }} via-slate-50/40 to-slate-100/50 flex items-center justify-center relative overflow-hidden border-b border-slate-100">
                                <!-- Grid pattern decorative inside thumbnail -->
                                <div class="absolute inset-0 bg-grid-pattern opacity-[0.2]"></div>
                                <span class="text-5xl group-hover:scale-120 transition-transform duration-500 z-10">{{ $project->image_url }}</span>
                            </div>

                            <!-- Project Details -->
                            <div class="p-6">
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @if(is_array($project->tech_stack))
                                        @foreach($project->tech_stack as $tech)
                                            <span class="px-2.5 py-0.5 rounded bg-slate-100 text-slate-600 text-xs font-semibold border border-slate-200/30">{{ $tech }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                <h3 class="text-lg font-bold text-slate-900 mb-2.5 group-hover:text-indigo-650 transition-colors">{{ $project->title }}</h3>
                                <p class="text-slate-600 text-sm font-light mb-5 leading-relaxed">
                                    {{ $project->description }}
                                </p>
                                <a href="{{ $project->project_url }}" class="inline-flex items-center text-sm font-bold text-slate-700 hover:text-indigo-600 group/link">
                                    View Case Study
                                    <svg class="ml-1 w-4 h-4 group-hover/link:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 border-t border-slate-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center gap-1.5 text-xs text-indigo-650 font-bold uppercase tracking-wider mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                    Get in Touch
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 hero-title">Start a Project</h2>
                <p class="text-slate-550 max-w-xl mx-auto mb-12 font-light leading-relaxed">
                    Interested in working together or have a question? Drop me a message and let's create something awesome.
                </p>

                <div class="inline-flex flex-col sm:flex-row items-center gap-4 bg-indigo-50/60 p-6 rounded-2xl border border-indigo-100/70 w-full max-w-xl mx-auto justify-between shadow-sm">
                    <div class="text-left">
                        <p class="text-xs text-indigo-650 uppercase tracking-widest font-bold mb-1">Direct Email</p>
                        <p class="text-slate-950 font-extrabold text-lg">{{ $profile->email }}</p>
                    </div>
                    <a href="mailto:{{ $profile->email }}" class="w-full sm:w-auto px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl text-sm font-bold transition-colors duration-300 shadow-md shadow-indigo-600/10 flex items-center justify-center gap-2">
                        <svg class="w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        Email Me
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-slate-200 bg-white py-12">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-sm text-slate-500">
                    &copy; {{ date('Y') }} {{ $profile->name }}. All rights reserved.
                </div>
                
                <!-- Social Icons in Footer -->
                <div class="flex gap-4 text-slate-400 font-medium">
                    @if($profile->github_url)
                        <a href="{{ $profile->github_url }}" target="_blank" class="hover:text-indigo-600 transition-colors" title="GitHub">
                            <svg class="w-5.5 h-5.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"/></svg>
                        </a>
                    @endif
                    @if($profile->linkedin_url)
                        <a href="{{ $profile->linkedin_url }}" target="_blank" class="hover:text-indigo-600 transition-colors" title="LinkedIn">
                            <svg class="w-5.5 h-5.5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    @endif
                </div>
            </div>
        </footer>

        <!-- Small script for responsive mobile menu -->
        <script>
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
            });
        </script>
    </body>
</html>

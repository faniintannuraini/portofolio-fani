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
                background: linear-gradient(135deg, #fbfcfe 0%, #f4f5fa 25%, #f9f6fc 50%, #f3f9fc 75%, #f5fcf8 100%);
                background-attachment: fixed;
            }
            .hero-title {
                font-family: 'Outfit', sans-serif;
            }
            .code-font {
                font-family: 'Fira Code', monospace;
            }
            .bg-grid-pattern {
                background-image: 
                    linear-gradient(to right, rgba(99, 102, 241, 0.025) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(99, 102, 241, 0.025) 1px, transparent 1px);
                background-size: 32px 32px;
                mask-image: radial-gradient(circle at 50% 50%, black, transparent 85%);
                -webkit-mask-image: radial-gradient(circle at 50% 50%, black, transparent 85%);
            }
            .ambient-glow-1 {
                position: absolute;
                top: -10%;
                right: -10%;
                width: 700px;
                height: 700px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(168, 85, 247, 0.15) 0%, rgba(99, 102, 241, 0.05) 50%, rgba(0,0,0,0) 70%);
                filter: blur(100px);
                z-index: -10;
                animation: floatGlow1 25s ease-in-out infinite;
            }
            .ambient-glow-2 {
                position: absolute;
                top: 25%;
                left: -15%;
                width: 600px;
                height: 600px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(45, 212, 191, 0.14) 0%, rgba(56, 189, 248, 0.05) 50%, rgba(0,0,0,0) 70%);
                filter: blur(90px);
                z-index: -10;
                animation: floatGlow2 30s ease-in-out infinite;
            }
            .ambient-glow-3 {
                position: absolute;
                top: 60%;
                right: -10%;
                width: 650px;
                height: 650px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(251, 113, 133, 0.12) 0%, rgba(253, 186, 116, 0.04) 55%, rgba(0,0,0,0) 70%);
                filter: blur(95px);
                z-index: -10;
                animation: floatGlow3 28s ease-in-out infinite;
            }
            .ambient-glow-4 {
                position: absolute;
                bottom: -5%;
                left: 10%;
                width: 550px;
                height: 550px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(99, 102, 241, 0.1) 0%, rgba(167, 139, 250, 0.03) 50%, rgba(0,0,0,0) 70%);
                filter: blur(85px);
                z-index: -10;
                animation: floatGlow4 22s ease-in-out infinite;
            }
            @keyframes floatGlow1 {
                0% { transform: translate(0, 0) scale(1) rotate(0deg); }
                33% { transform: translate(50px, 40px) scale(1.08) rotate(120deg); }
                66% { transform: translate(-30px, 60px) scale(0.95) rotate(240deg); }
                100% { transform: translate(0, 0) scale(1) rotate(360deg); }
            }
            @keyframes floatGlow2 {
                0% { transform: translate(0, 0) scale(1) rotate(0deg); }
                33% { transform: translate(-60px, 50px) scale(0.92) rotate(-120deg); }
                66% { transform: translate(40px, -30px) scale(1.06) rotate(-240deg); }
                100% { transform: translate(0, 0) scale(1) rotate(-360deg); }
            }
            @keyframes floatGlow3 {
                0% { transform: translate(0, 0) scale(1); }
                50% { transform: translate(60px, -50px) scale(1.1); }
                100% { transform: translate(0, 0) scale(1); }
            }
            @keyframes floatGlow4 {
                0% { transform: translate(0, 0) scale(1); }
                50% { transform: translate(-50px, 40px) scale(1.05); }
                100% { transform: translate(0, 0) scale(1); }
            }
            .stroke-text {
                -webkit-text-stroke: 2px rgba(15, 23, 42, 0.12);
                text-stroke: 2px rgba(15, 23, 42, 0.12);
            }
        </style>
    </head>
    <body class="text-slate-800 min-h-screen relative overflow-x-hidden pb-6 selection:bg-indigo-600 selection:text-white">

        <!-- Background grid & glow (Fixed to avoid scroll height expansion) -->
        <div class="fixed inset-0 z-[-10] overflow-hidden pointer-events-none select-none">
            <div class="absolute inset-0 bg-grid-pattern z-[-20]"></div>
            <div class="ambient-glow-1"></div>
            <div class="ambient-glow-2"></div>
            <div class="ambient-glow-3"></div>
            <div class="ambient-glow-4"></div>
        </div>

        <!-- Floating Decorative Graphic Accents -->
        <div class="absolute top-[18%] left-[8%] text-indigo-300/40 pointer-events-none select-none text-2xl font-light font-sans hidden lg:block animate-bounce" style="animation-duration: 6s;">+</div>
        <div class="absolute top-[35%] right-[6%] text-purple-300/40 pointer-events-none select-none text-3xl font-light font-sans hidden lg:block animate-bounce" style="animation-duration: 8s;">+</div>
        <div class="absolute bottom-[25%] left-[4%] text-cyan-300/45 pointer-events-none select-none text-2xl font-light font-sans hidden lg:block animate-bounce" style="animation-duration: 7s;">+</div>
        
        <!-- Rotating SVG circles & outlines for creative graphic touch -->
        <div class="absolute top-[28%] left-[84%] text-indigo-400/20 pointer-events-none select-none hidden lg:block animate-[spin_20s_linear_infinite]">
            <svg class="w-16 h-16" fill="none" viewBox="0 0 100 100" stroke="currentColor" stroke-width="2" stroke-dasharray="6 6">
                <circle cx="50" cy="50" r="40" />
            </svg>
        </div>
        <div class="absolute top-[65%] left-[5%] text-purple-400/25 pointer-events-none select-none hidden lg:block animate-[spin_30s_linear_infinite]">
            <svg class="w-20 h-20" fill="none" viewBox="0 0 100 100" stroke="currentColor" stroke-width="1.5" stroke-dasharray="8 4">
                <polygon points="50,15 90,80 10,80" />
            </svg>
        </div>
        <div class="absolute bottom-[15%] right-[8%] text-cyan-400/30 pointer-events-none select-none hidden lg:block animate-pulse" style="animation-duration: 4s;">
            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 100 100">
                <circle cx="10" cy="10" r="3" /><circle cx="40" cy="10" r="3" /><circle cx="70" cy="10" r="3" /><circle cx="100" cy="10" r="3" />
                <circle cx="10" cy="40" r="3" /><circle cx="40" cy="40" r="3" /><circle cx="70" cy="40" r="3" /><circle cx="100" cy="40" r="3" />
                <circle cx="10" cy="70" r="3" /><circle cx="40" cy="70" r="3" /><circle cx="70" cy="70" r="3" /><circle cx="100" cy="70" r="3" />
                <circle cx="10" cy="100" r="3" /><circle cx="40" cy="100" r="3" /><circle cx="70" cy="100" r="3" /><circle cx="100" cy="100" r="3" />
            </svg>
        </div>

        <!-- Navbar -->
        <nav class="sticky top-0 z-50 bg-white/70 backdrop-blur-lg border-b border-slate-200/40 shadow-sm shadow-slate-100/20">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-xl font-bold tracking-tight text-slate-805 hero-title flex items-center gap-1">
                            <span class="w-2.5 h-2.5 rounded bg-indigo-600 animate-pulse"></span>
                            {{ strtolower(str_replace(' ', '.', $profile->name)) }}
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-center space-x-8 text-sm font-medium">
                            <a href="#home" class="text-indigo-650 hover:text-indigo-700 transition-colors">Home</a>
                            <a href="#about" class="text-slate-600 hover:text-indigo-600 transition-colors">About</a>
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
                    <a href="#projects" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Projects</a>
                    <a href="#contact" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Contact</a>
                    <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-slate-600 hover:text-indigo-600 hover:bg-slate-50">Admin Login</a>
                </div>
            </div>
        </nav>

        <!-- Hero Typography Art Section -->
        <section id="home" class="relative pt-12 pb-16 md:pt-20 md:pb-24 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative w-full max-w-4xl mx-auto flex flex-col items-center justify-center select-none">
                <!-- Large stylized "PORTFOLIO" title -->
                <div class="hero-title text-[5.5rem] sm:text-[8rem] md:text-[11.5rem] font-extrabold tracking-tighter text-slate-900 flex items-center justify-center relative leading-none">
                    <span class="inline-block transform -rotate-6 translate-x-2">P</span>
                    <span class="inline-block transform rotate-12 -translate-y-4">O</span>
                    <span class="inline-block transform -rotate-12 translate-y-2">R</span>
                    <span class="inline-block text-indigo-600 transform scale-110 translate-x-1 translate-y-[-10px]">+</span>
                    
                    <!-- Overlapping profile image avatar -->
                    <div class="relative w-28 h-28 sm:w-36 sm:h-36 md:w-56 md:h-56 rounded-full border-4 border-white shadow-2xl overflow-hidden mx-[-15px] sm:mx-[-20px] md:mx-[-40px] z-10 hover:scale-105 transition-transform duration-300">
                        @if($profile->profile_photo)
                            <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="{{ $profile->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-indigo-50 flex items-center justify-center text-6xl">👩‍💻</div>
                        @endif
                    </div>
                    
                    <span class="inline-block transform -rotate-12 translate-y-[-12px]">F</span>
                    <span class="inline-block transform rotate-6 translate-x-[-4px]">O</span>
                    <span class="inline-block transform rotate-12 translate-y-3">L</span>
                    <span class="inline-block transform -rotate-6 translate-x-2">I</span>
                    <span class="inline-block transform rotate-12 translate-y-[-4px]">O</span>
                </div>
                
                <!-- Secondary Info Header -->
                <div class="w-full max-w-3xl flex items-center justify-between mt-6 px-4 text-xs sm:text-sm font-bold text-slate-500 uppercase tracking-widest border-t border-slate-200/50 pt-4">
                    <span>{{ $profile->name }}</span>
                    <span class="text-indigo-600 font-extrabold text-lg transform rotate-6">'26</span>
                </div>
            </div>
        </section>

        <!-- About & ID Card Section -->
        <section id="about" class="py-20 border-t border-slate-200/50 relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                    
                    <!-- Left: Real Lanyard & ID Badge -->
                    <div class="lg:col-span-4 flex flex-col items-center">
                        <div class="flex flex-col items-center select-none pointer-events-none mb-1">
                            <!-- Lanyard Loop SVG -->
                            <svg class="w-16 h-28 text-slate-300 drop-shadow-sm" fill="none" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path d="M50,0 Q12,30 50,88 Q88,30 50,0" stroke="currentColor" stroke-width="4.5" fill="none" stroke-linecap="round" />
                                <circle cx="50" cy="88" r="6.5" fill="#4f46e5" />
                            </svg>
                            <!-- Plastic Connector Clip -->
                            <div class="w-8 h-4.5 bg-slate-100 border border-slate-300 rounded shadow-sm mt-[-9px] z-10 flex items-center justify-center">
                                <div class="w-4.5 h-1.5 bg-slate-400 rounded-full"></div>
                            </div>
                        </div>
                        
                        <!-- Realistic ID Badge Box -->
                        <div class="w-64 bg-white/95 border border-slate-200/80 rounded-2xl shadow-2xl p-5 flex flex-col items-center relative transform -rotate-3 hover:rotate-0 transition-all duration-500 hover:shadow-indigo-100/50 hover:scale-105" style="transform-origin: top center;">
                            <!-- Clip attachment slot -->
                            <div class="w-14 h-3 bg-slate-50 border border-slate-200 rounded-full mb-5 flex items-center justify-center">
                                <div class="w-6 h-0.5 bg-slate-300 rounded-full"></div>
                            </div>
                            
                            <!-- Profile Photo Inside ID Badge -->
                            <div class="w-44 h-44 rounded-xl border border-slate-200 overflow-hidden shadow-sm relative bg-gradient-to-br from-indigo-50 to-slate-100 mb-4 select-none">
                                @if($profile->profile_photo)
                                    <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="{{ $profile->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-5xl">👩‍💻</div>
                                @endif
                            </div>
                            
                            <!-- Developer Bio Details -->
                            <h3 class="text-slate-900 font-extrabold text-base hero-title text-center leading-tight">{{ $profile->name }}</h3>
                            <p class="text-indigo-600 text-[10px] font-bold uppercase tracking-wider mt-1 text-center">{{ $profile->title }}</p>
                            
                            <div class="w-full border-t border-dashed border-slate-200 my-4"></div>
                            
                            <!-- Badging tags -->
                            <div class="flex items-center justify-between w-full text-[9px] text-slate-400 font-extrabold uppercase">
                                <span>ID NO. 2026-FNI</span>
                                <span>LEVEL. PRO DEV</span>
                            </div>
                            
                            <!-- Printed barcode pattern -->
                            <div class="w-full h-8 bg-slate-950 mt-3 rounded flex items-center justify-between px-4 select-none pointer-events-none opacity-90">
                                <span class="w-[1.5px] h-5 bg-white"></span>
                                <span class="w-[3px] h-5 bg-white"></span>
                                <span class="w-[1px] h-5 bg-white"></span>
                                <span class="w-[4px] h-5 bg-white"></span>
                                <span class="w-[1.5px] h-5 bg-white"></span>
                                <span class="w-[2.5px] h-5 bg-white"></span>
                                <span class="w-[1px] h-5 bg-white"></span>
                                <span class="w-[3.5px] h-5 bg-white"></span>
                                <span class="w-[1.5px] h-5 bg-white"></span>
                                <span class="w-[2px] h-5 bg-white"></span>
                                <span class="w-[4px] h-5 bg-white"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Info columns & description -->
                    <div class="lg:col-span-8 flex flex-col justify-between">
                        <div class="mb-10 text-left">
                            <h2 class="text-indigo-650 text-xs font-extrabold uppercase tracking-widest mb-3">Hi, I'm {{ explode(' ', $profile->name)[0] }}</h2>
                            <h3 class="hero-title text-3xl md:text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
                                {{ $profile->title }}
                            </h3>
                            <p class="text-slate-655 font-light leading-relaxed text-base">
                                {{ $profile->about_text }}
                            </p>
                        </div>
                        
                        <!-- Grid layout detailing Experience, Education, and Contact info -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-8 border-t border-slate-200/60">
                            <!-- Experience Column -->
                            <div>
                                <h4 class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-4">Experience</h4>
                                <div class="space-y-4">
                                    <div class="border-l-2 border-indigo-500/30 pl-3">
                                        <h5 class="text-xs font-bold text-slate-900">Fullstack Web Developer</h5>
                                        <p class="text-[10px] text-slate-400 font-bold">Freelance & Collaborations</p>
                                        <span class="text-[9px] font-bold text-indigo-650">2024 - Present</span>
                                    </div>
                                    <div class="border-l-2 border-indigo-500/30 pl-3">
                                        <h5 class="text-xs font-bold text-slate-900">Frontend Developer Intern</h5>
                                        <p class="text-[10px] text-slate-400 font-bold">Tech Development Center</p>
                                        <span class="text-[9px] font-bold text-indigo-650">2023 - 2024</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Education Column -->
                            <div>
                                <h4 class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-4">Education</h4>
                                <div class="space-y-4">
                                    <div class="border-l-2 border-purple-500/30 pl-3">
                                        <h5 class="text-xs font-bold text-slate-900">Information Technology</h5>
                                        <p class="text-[10px] text-slate-400 font-bold">University Degree Graduate</p>
                                        <span class="text-[9px] font-bold text-purple-650">2020 - 2024</span>
                                    </div>
                                    <div class="border-l-2 border-purple-500/30 pl-3">
                                        <h5 class="text-xs font-bold text-slate-900">Student Ambassador</h5>
                                        <p class="text-[10px] text-slate-400 font-bold">Information Tech Center</p>
                                        <span class="text-[9px] font-bold text-purple-650">2022 - 2023</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contact & Softwares Column -->
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h4 class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-4">Contact</h4>
                                    <div class="space-y-2 text-xs font-bold text-slate-700">
                                        @if($profile->github_url)
                                            <a href="{{ $profile->github_url }}" target="_blank" class="flex items-center gap-2 hover:text-indigo-600 transition-colors">
                                                <span>🐙</span> GitHub
                                            </a>
                                        @endif
                                        @if($profile->linkedin_url)
                                            <a href="{{ $profile->linkedin_url }}" target="_blank" class="flex items-center gap-2 hover:text-indigo-600 transition-colors">
                                                <span>💼</span> LinkedIn
                                            </a>
                                        @endif
                                        <a href="mailto:{{ $profile->email }}" class="flex items-center gap-2 hover:text-indigo-600 transition-colors">
                                            <span>✉️</span> {{ $profile->email }}
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-3">Softwares</h4>
                                    <div class="flex flex-wrap gap-1.5 text-xs font-bold">
                                        @foreach($skills as $skill)
                                            <span class="px-2 py-1 bg-white border border-slate-200/80 rounded-lg shadow-sm hover:border-indigo-300 transition-all duration-300 flex items-center gap-1 cursor-default" title="{{ $skill->description }}">
                                                <span class="text-xs">{{ $skill->icon }}</span>
                                                <span class="text-[9px] text-slate-600 font-semibold">{{ $skill->name }}</span>
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Grid Strip Section -->
        <section id="projects" class="py-24 border-t border-slate-200/50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Outer title with outline text "CONTENT" and numbers -->
                <div class="relative w-full text-center mb-16 py-8">
                    <h2 class="text-7xl sm:text-8xl md:text-[10rem] font-extrabold uppercase tracking-widest text-transparent stroke-text select-none leading-none">
                        CONTENT
                    </h2>
                    <div class="absolute inset-0 flex items-center justify-center gap-6 md:gap-12 text-[10px] sm:text-xs font-extrabold text-slate-400 uppercase tracking-widest pt-2">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span>04</span>
                        <span>05</span>
                    </div>
                </div>

                @php
                    $stripStyles = [
                        [
                            'bg' => 'bg-[#3b82f6]',
                            'text' => 'text-white',
                            'desc' => 'text-blue-100',
                            'num' => 'text-blue-500/30',
                            'badge' => 'bg-blue-800/40 text-blue-100 border-blue-400/20'
                        ],
                        [
                            'bg' => 'bg-[#fafaf9]/90',
                            'text' => 'text-slate-900',
                            'desc' => 'text-slate-500',
                            'num' => 'text-stone-300/40',
                            'badge' => 'bg-white text-slate-700 border-slate-200/60 shadow-sm'
                        ],
                        [
                            'bg' => 'bg-[#10b981]',
                            'text' => 'text-white',
                            'desc' => 'text-emerald-100',
                            'num' => 'text-emerald-500/30',
                            'badge' => 'bg-emerald-800/40 text-emerald-100 border-emerald-400/20'
                        ],
                        [
                            'bg' => 'bg-[#ef4444]',
                            'text' => 'text-white',
                            'desc' => 'text-rose-100',
                            'num' => 'text-rose-400/30',
                            'badge' => 'bg-rose-800/40 text-rose-100 border-rose-400/20'
                        ],
                        [
                            'bg' => 'bg-[#6366f1]',
                            'text' => 'text-white',
                            'desc' => 'text-indigo-100',
                            'num' => 'text-indigo-400/30',
                            'badge' => 'bg-indigo-800/40 text-indigo-100 border-indigo-400/20'
                        ]
                    ];
                @endphp

                <!-- Row grid for strips -->
                <div class="flex flex-col md:flex-row rounded-3xl overflow-hidden border border-slate-200/60 shadow-2xl w-full">
                    @foreach($projects as $index => $project)
                        @php
                            $style = $stripStyles[$index % count($stripStyles)];
                        @endphp
                        <div class="{{ $style['bg'] }} {{ $style['text'] }} flex-1 flex flex-col justify-between p-8 min-h-[480px] transition-all duration-500 hover:scale-[1.02] hover:z-20 relative group border-b md:border-b-0 md:border-r border-slate-200/10 last:border-0">
                            <!-- Top Tech Badges -->
                            <div class="flex flex-wrap gap-1.5 mb-6">
                                @if(is_array($project->tech_stack))
                                    @foreach($project->tech_stack as $tech)
                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold border {{ $style['badge'] }}">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                @endif
                            </div>
                            
                            <!-- Middle: Tilted Mockup Frame -->
                            <div class="flex-grow flex items-center justify-center my-6">
                                <div class="w-full max-w-[140px] aspect-[9/16] bg-white text-slate-800 rounded-xl shadow-lg border border-slate-200/50 p-2.5 flex flex-col justify-between transform -rotate-6 group-hover:-translate-y-4 group-hover:rotate-6 transition-all duration-500 relative overflow-hidden select-none">
                                    <!-- Status Bar -->
                                    <div class="flex justify-between items-center text-[7px] text-slate-450 font-extrabold px-1">
                                        <span>09:41 AM</span>
                                        <span class="text-emerald-500">Live</span>
                                    </div>
                                    
                                    <!-- Mockup Body content -->
                                    <div class="flex-grow flex flex-col items-center justify-center my-4 text-center">
                                        <span class="text-3xl mb-2 filter drop-shadow-sm">{{ $project->image_url }}</span>
                                        <span class="text-[9px] font-extrabold tracking-tight text-slate-900 leading-tight px-1">{{ $project->title }}</span>
                                    </div>
                                    
                                    <!-- CTA Button -->
                                    <a href="{{ $project->project_url }}" target="_blank" class="w-full py-1.5 text-[7px] font-extrabold text-center text-white bg-slate-950 hover:bg-indigo-650 rounded transition-colors inline-block uppercase tracking-wider">
                                        View Case
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Bottom Info -->
                            <div>
                                <div class="text-5xl md:text-7xl font-extrabold {{ $style['num'] }} leading-none select-none">
                                    {{ sprintf('%02d', $index + 1) }}
                                </div>
                                <h3 class="text-base font-extrabold tracking-tight mt-3 leading-tight">{{ $project->title }}</h3>
                                <p class="{{ $style['desc'] }} text-xs font-light mt-1.5 leading-relaxed">{{ Str::limit($project->description, 80) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 border-t border-slate-200/50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center gap-1.5 text-xs text-indigo-650 font-bold uppercase tracking-wider mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                    Get in Touch
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 hero-title">Start a Project</h2>
                <p class="text-slate-550 max-w-xl mx-auto mb-12 font-light leading-relaxed">
                    Interested in working together or have a question? Drop me a message and let's create something awesome.
                </p>

                <div class="inline-flex flex-col sm:flex-row items-center gap-4 bg-white/70 backdrop-blur-md p-6 rounded-2xl border border-indigo-100/60 w-full max-w-xl mx-auto justify-between shadow-md">
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
        <footer class="border-t border-slate-200/50 bg-white/40 backdrop-blur-md py-6">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                
                <!-- Brand logo and Copyright -->
                <div class="flex items-center gap-3 text-xs text-slate-500 font-medium">
                    <span class="text-sm font-bold tracking-tight text-slate-805 hero-title flex items-center gap-1">
                        <span class="w-2 h-2 rounded bg-indigo-600"></span>
                        {{ strtolower(str_replace(' ', '.', $profile->name)) }}
                    </span>
                    <span class="text-slate-350">|</span>
                    <span>&copy; {{ date('Y') }} All rights reserved.</span>
                </div>
                
                <!-- Quick Navigation links -->
                <div class="flex items-center gap-6 text-[11px] font-bold text-slate-500 uppercase tracking-widest">
                    <a href="#home" class="hover:text-indigo-600 transition-colors">Home</a>
                    <a href="#about" class="hover:text-indigo-600 transition-colors">About</a>
                    <a href="#projects" class="hover:text-indigo-600 transition-colors">Projects</a>
                    <a href="#contact" class="hover:text-indigo-600 transition-colors">Contact</a>
                </div>
                
                <!-- Social links -->
                <div class="flex items-center gap-4 text-slate-400">
                    @if($profile->github_url)
                        <a href="{{ $profile->github_url }}" target="_blank" class="hover:text-slate-900 transition-colors" title="GitHub">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"/></svg>
                        </a>
                    @endif
                    @if($profile->linkedin_url)
                        <a href="{{ $profile->linkedin_url }}" target="_blank" class="hover:text-indigo-650 transition-colors" title="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
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

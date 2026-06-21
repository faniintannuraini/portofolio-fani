<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fani Intan Nuraini | Personal Portfolio</title>
        <meta name="description" content="Personal Portfolio of Fani Intan Nuraini - Web Developer & Designer">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Plus Jakarta Sans', 'Instrument Sans', sans-serif;
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
    <body class="bg-slate-950 text-slate-100 min-h-screen relative overflow-x-hidden selection:bg-indigo-500 selection:text-white">
        
        <!-- Glowing background spots -->
        <div class="glow-effect top-10 left-10 animate-pulse" style="animation-duration: 8s;"></div>
        <div class="glow-effect bottom-20 right-10 animate-pulse" style="animation-duration: 12s;"></div>
        <div class="glow-effect top-1/2 left-1/3" style="background: radial-gradient(circle, rgba(6,182,212,0.1) 0%, rgba(0,0,0,0) 70%);"></div>

        <!-- Navbar -->
        <nav class="sticky top-0 z-50 backdrop-blur-md bg-slate-950/70 border-b border-slate-900 transition-all duration-300">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-xl font-bold tracking-tight bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent hero-title">
                            fani.intan
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-8 text-sm font-medium">
                            <a href="#home" class="text-indigo-400 hover:text-indigo-300 transition-colors">Home</a>
                            <a href="#about" class="text-slate-400 hover:text-slate-200 transition-colors">About</a>
                            <a href="#skills" class="text-slate-400 hover:text-slate-200 transition-colors">Skills</a>
                            <a href="#projects" class="text-slate-400 hover:text-slate-200 transition-colors">Projects</a>
                            <a href="#contact" class="text-slate-400 hover:text-slate-200 transition-colors">Contact</a>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <!-- Mobile Menu Button -->
                        <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-white hover:bg-slate-900 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden md:hidden bg-slate-950 border-b border-slate-900" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-base font-medium">
                    <a href="#home" class="block px-3 py-2 rounded-md text-indigo-400 bg-slate-900/50">Home</a>
                    <a href="#about" class="block px-3 py-2 rounded-md text-slate-300 hover:text-white hover:bg-slate-900/50">About</a>
                    <a href="#skills" class="block px-3 py-2 rounded-md text-slate-300 hover:text-white hover:bg-slate-900/50">Skills</a>
                    <a href="#projects" class="block px-3 py-2 rounded-md text-slate-300 hover:text-white hover:bg-slate-900/50">Projects</a>
                    <a href="#contact" class="block px-3 py-2 rounded-md text-slate-300 hover:text-white hover:bg-slate-900/50">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative pt-20 pb-24 md:pt-32 md:pb-40 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-300 text-xs font-semibold mb-6 animate-fade-in">
                <span class="w-2 h-2 rounded-full bg-indigo-400 animate-ping"></span>
                <span>Open for freelance & collaborations</span>
            </div>

            <!-- Main Heading -->
            <h1 class="hero-title text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-white mb-6 max-w-4xl leading-tight">
                Crafting Exceptional <br class="hidden sm:inline" />
                <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Digital Experiences</span>
            </h1>

            <!-- Subtitle -->
            <p class="text-slate-400 text-lg sm:text-xl max-w-2xl mb-10 leading-relaxed font-light">
                Hi, I'm <span class="text-white font-medium">Fani Intan Nuraini</span>. A passionate Web Developer specializing in building modern, responsive, and high-performing web applications.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center w-full sm:w-auto">
                <a href="#projects" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-medium shadow-lg shadow-indigo-500/25 transition-all duration-300 hover:-translate-y-0.5">
                    View My Work
                    <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 rounded-lg border border-slate-800 hover:border-slate-700 bg-slate-900/50 hover:bg-slate-900 text-slate-300 hover:text-white font-medium transition-all duration-300 hover:-translate-y-0.5">
                    Get in Touch
                </a>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 border-t border-slate-900/80 bg-slate-950/40 relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="h-80 w-full rounded-2xl bg-gradient-to-br from-indigo-500/20 to-purple-500/20 border border-slate-850 flex items-center justify-center relative overflow-hidden group">
                            <!-- Geometric design placeholder for profile image -->
                            <div class="absolute inset-0 bg-slate-950/40 backdrop-blur-sm group-hover:scale-105 transition-transform duration-500"></div>
                            <div class="z-10 text-center">
                                <div class="w-24 h-24 rounded-full bg-slate-900 border-2 border-indigo-400 mx-auto mb-4 flex items-center justify-center text-4xl shadow-lg">
                                    👩‍💻
                                </div>
                                <h3 class="text-white font-semibold text-lg hero-title">Fani Intan Nuraini</h3>
                                <p class="text-slate-400 text-sm">Fullstack Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-white mb-6 hero-title">About Me</h2>
                        <p class="text-slate-300 mb-4 leading-relaxed font-light">
                            I am a dedicated web developer focused on creating clean, intuitive user interfaces and robust back-end systems. With an eye for design aesthetics and strong foundations in web standards, I build tools that solve real problems.
                        </p>
                        <p class="text-slate-300 mb-6 leading-relaxed font-light">
                            My journey in tech drives me to continuously learn, explore modern frameworks, and implement performance-optimized solutions for digital transformation.
                        </p>
                        <div class="flex gap-4">
                            <div class="border-l-2 border-indigo-500 pl-4">
                                <div class="text-2xl font-bold text-white">X+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Years Experience</div>
                            </div>
                            <div class="border-l-2 border-purple-500 pl-4">
                                <div class="text-2xl font-bold text-white">Y+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Projects Completed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-20 border-t border-slate-900/80">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-white mb-4 hero-title">Skills & Toolkit</h2>
                    <p class="text-slate-400 max-w-xl mx-auto font-light">
                        Here are some of the technologies and practices I leverage to bring ideas to life.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Skill Card 1 -->
                    <div class="p-6 rounded-xl bg-slate-900/30 border border-slate-900 hover:border-indigo-500/30 hover:bg-slate-900/50 transition-all duration-300 group">
                        <div class="w-10 h-10 rounded-lg bg-indigo-500/10 text-indigo-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            🎨
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Frontend Development</h3>
                        <p class="text-slate-400 text-sm font-light">
                            Crafting pixel-perfect layouts using HTML5, CSS3, Tailwind CSS, Javascript, and frameworks like React or Vue.
                        </p>
                    </div>

                    <!-- Skill Card 2 -->
                    <div class="p-6 rounded-xl bg-slate-900/30 border border-slate-900 hover:border-purple-500/30 hover:bg-slate-900/50 transition-all duration-300 group">
                        <div class="w-10 h-10 rounded-lg bg-purple-500/10 text-purple-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            ⚙️
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Backend Development</h3>
                        <p class="text-slate-400 text-sm font-light">
                            Building reliable RESTful APIs and server architectures using PHP, Laravel, Node.js, and relational databases.
                        </p>
                    </div>

                    <!-- Skill Card 3 -->
                    <div class="p-6 rounded-xl bg-slate-900/30 border border-slate-900 hover:border-cyan-500/30 hover:bg-slate-900/50 transition-all duration-300 group">
                        <div class="w-10 h-10 rounded-lg bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            🔧
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">DevOps & Tooling</h3>
                        <p class="text-slate-400 text-sm font-light">
                            Managing code versioning with Git/GitHub, configuring build pipelines, and working with cloud platforms.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 border-t border-slate-900/80 bg-slate-950/40">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                    <div>
                        <h2 class="text-3xl font-bold text-white mb-4 hero-title">Selected Projects</h2>
                        <p class="text-slate-400 max-w-xl font-light">
                            A curated selection of projects I've built, showing my expertise.
                        </p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                            View all projects
                            <svg class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Project Card 1 -->
                    <div class="group rounded-xl overflow-hidden bg-slate-900/30 border border-slate-900 hover:border-slate-800 transition-all duration-300">
                        <div class="h-48 bg-gradient-to-r from-indigo-950 to-slate-900 flex items-center justify-center relative overflow-hidden">
                            <span class="text-4xl group-hover:scale-110 transition-transform duration-500">🌐</span>
                        </div>
                        <div class="p-6">
                            <div class="flex gap-2 mb-3">
                                <span class="px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-300 text-xs font-semibold">Laravel</span>
                                <span class="px-2 py-0.5 rounded bg-cyan-500/10 text-cyan-300 text-xs font-semibold">Tailwind CSS</span>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2 group-hover:text-indigo-300 transition-colors">E-Commerce Application</h3>
                            <p class="text-slate-450 text-sm font-light mb-4">
                                A feature-rich online shopping platform with custom dashboard, shopping cart, and transaction logs.
                            </p>
                            <a href="#" class="inline-flex items-center text-sm font-medium text-slate-300 hover:text-white">
                                View Case Study
                                <svg class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="group rounded-xl overflow-hidden bg-slate-900/30 border border-slate-900 hover:border-slate-800 transition-all duration-300">
                        <div class="h-48 bg-gradient-to-r from-purple-950 to-slate-900 flex items-center justify-center relative overflow-hidden">
                            <span class="text-4xl group-hover:scale-110 transition-transform duration-500">📊</span>
                        </div>
                        <div class="p-6">
                            <div class="flex gap-2 mb-3">
                                <span class="px-2 py-0.5 rounded bg-purple-500/10 text-purple-300 text-xs font-semibold">VueJS</span>
                                <span class="px-2 py-0.5 rounded bg-slate-500/10 text-slate-300 text-xs font-semibold">API Integration</span>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2 group-hover:text-purple-300 transition-colors">Analytics Dashboard</h3>
                            <p class="text-slate-450 text-sm font-light mb-4">
                                Interactive data analytics tool illustrating user demographics, behavior charts, and export actions.
                            </p>
                            <a href="#" class="inline-flex items-center text-sm font-medium text-slate-300 hover:text-white">
                                View Case Study
                                <svg class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 border-t border-slate-900/80">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-4 hero-title">Start a Project</h2>
                <p class="text-slate-400 max-w-xl mx-auto mb-10 font-light">
                    Interested in working together or have a question? Drop me a message and let's create something awesome.
                </p>

                <div class="inline-flex flex-col sm:flex-row items-center gap-4 bg-slate-900/40 p-6 rounded-2xl border border-slate-900 w-full max-w-xl mx-auto justify-between">
                    <div class="text-left">
                        <p class="text-xs text-slate-500 uppercase tracking-widest font-semibold mb-1">Direct Email</p>
                        <p class="text-white font-medium">faniintannuraini@gmail.com</p>
                    </div>
                    <a href="mailto:faniintannuraini@gmail.com" class="w-full sm:w-auto px-5 py-2.5 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg text-sm font-semibold transition-colors duration-300">
                        Email Me
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-slate-900 bg-slate-950 py-12">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-sm text-slate-500">
                    &copy; {{ date('Y') }} Fani Intan Nuraini. All rights reserved.
                </div>
                <div class="flex gap-6 text-slate-500 text-sm">
                    <a href="https://github.com/faniintannuraini" target="_blank" class="hover:text-slate-350 transition-colors">GitHub</a>
                    <a href="#" class="hover:text-slate-350 transition-colors">LinkedIn</a>
                    <a href="#" class="hover:text-slate-350 transition-colors">Instagram</a>
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

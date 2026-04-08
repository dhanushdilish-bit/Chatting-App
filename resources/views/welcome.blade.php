<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name', 'Howdy') }} - Premium Real-Time Chat</title>
    <link rel="icon" type="image/png" href="/logo1.png">
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-on-surface": "#ffeee0",
                        "secondary": "#286679",
                        "on-surface-variant": "#544434",
                        "on-secondary": "#ffffff",
                        "secondary-fixed": "#b6eaff",
                        "primary-fixed": "#ffdcbd",
                        "surface-container-high": "#f7e5d7",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "background": "#fff8f5",
                        "on-secondary-fixed-variant": "#014e60",
                        "on-primary-container": "#5c3400",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#392f25",
                        "secondary-container": "#aee8ff",
                        "on-tertiary-fixed": "#001e2f",
                        "surface-container-low": "#fff1e7",
                        "error-container": "#ffdad6",
                        "surface-container": "#fdebdd",
                        "on-tertiary-fixed-variant": "#004b6f",
                        "on-tertiary-container": "#004261",
                        "on-error": "#ffffff",
                        "tertiary": "#006491",
                        "surface-tint": "#8a5100",
                        "outline": "#877362",
                        "tertiary-fixed": "#c9e6ff",
                        "on-primary-fixed": "#2c1600",
                        "outline-variant": "#dac2ae",
                        "primary-fixed-dim": "#ffb86e",
                        "surface-dim": "#e8d7c9",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#693c00",
                        "on-background": "#231a12",
                        "inverse-primary": "#ffb86e",
                        "secondary-fixed-dim": "#95cfe5",
                        "surface-container-highest": "#f1dfd2",
                        "on-primary": "#ffffff",
                        "tertiary-container": "#02b3ff",
                        "surface-variant": "#f1dfd2",
                        "primary-container": "#f39200",
                        "on-surface": "#231a12",
                        "primary": "#8a5100",
                        "tertiary-fixed-dim": "#8aceff",
                        "surface": "#fff8f5",
                        "surface-bright": "#fff8f5",
                        "on-secondary-container": "#2d6a7d",
                        "on-secondary-fixed": "#001f28"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Plus Jakarta Sans"],
                        "label": ["Plus Jakarta Sans"]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #fff8f5; color: #231a12; }
        .glass-nav { backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
        .hero-gradient { background: radial-gradient(circle at 10% 20%, rgba(243, 146, 0, 0.08) 0%, rgba(255, 248, 245, 0) 50%); }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>

<body class="bg-surface text-on-surface overflow-x-hidden">

<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-[#fff8f5]/80 dark:bg-stone-950/80 backdrop-blur-md shadow-sm dark:shadow-none">
    <div class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
        <div class="flex items-center gap-8">
            <a href="/welcome" class="flex items-center gap-2 text-2xl font-black text-[#f39200] tracking-tighter">
                <img src="/logo1.png" alt="Howdy Logo" style="height: 32px; width: auto;" onerror="this.style.display='none'">
                howdy
            </a>
            <div class="hidden md:flex gap-6 items-center">
                <a class="font-['Plus_Jakarta_Sans'] font-medium text-lg tracking-tight text-[#286679] hover:text-[#f39200] transition-colors duration-300" href="#">Features</a>
                <a class="font-['Plus_Jakarta_Sans'] font-medium text-lg tracking-tight text-[#286679] hover:text-[#f39200] transition-colors duration-300" href="#">Solutions</a>
                <a class="font-['Plus_Jakarta_Sans'] font-medium text-lg tracking-tight text-[#286679] hover:text-[#f39200] transition-colors duration-300" href="#">Pricing</a>
                <a class="font-['Plus_Jakarta_Sans'] font-medium text-lg tracking-tight text-[#286679] hover:text-[#f39200] transition-colors duration-300" href="#">About</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            @auth
                <a href="{{ url('/chat') }}" class="bg-[#f39200] text-white px-6 py-2.5 rounded-full font-bold shadow-lg shadow-[#f39200]/20 active:scale-95 transition-transform">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-[#286679] font-medium px-4 py-2 active:scale-95 transition-transform">Login</a>
                <a href="{{ route('register') }}" class="bg-[#f39200] text-white px-6 py-2.5 rounded-full font-bold shadow-lg shadow-[#f39200]/20 active:scale-95 transition-transform">Get Started</a>
            @endauth
        </div>
    </div>
</nav>

<main class="relative">
    <!-- Hero Section -->
    <section class="relative min-h-screen pt-32 pb-20 px-6 hero-gradient flex flex-col items-center justify-center overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10">
            
            <div class="space-y-8 text-center lg:text-left flex flex-col items-center lg:items-start">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-surface-container-high text-primary rounded-full font-bold text-sm tracking-wide self-center lg:self-start">
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">bolt</span>
                    REAL-TIME SYNC ACTIVE
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-extrabold text-secondary tracking-tight leading-[1.1]">
                    Communication that <br/>
                    <span class="text-primary italic">flows effortlessly.</span>
                </h1>
                
                <p class="text-xl text-on-surface-variant max-w-xl leading-relaxed">
                    Experience lightning-fast WebSockets, seamless UI transitions, and crystal clear interfaces. Designed entirely to keep your conversations dynamic and deeply connected.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start w-full sm:w-auto">
                    @auth
                        <a href="{{ url('/chat') }}" class="w-full sm:w-auto px-10 py-5 flex justify-center items-center bg-primary text-white rounded-full font-bold text-lg shadow-xl shadow-primary/30 active:scale-95 transition-all text-center">
                            Open Chat
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="w-full sm:w-auto px-10 py-5 flex justify-center items-center bg-primary text-white rounded-full font-bold text-lg shadow-xl shadow-primary/30 active:scale-95 transition-all text-center">
                            Join the Network
                        </a>
                        <a href="{{ route('login') }}" class="w-full sm:w-auto px-10 py-5 flex justify-center items-center bg-secondary-container text-on-secondary-container rounded-full font-bold text-lg active:scale-95 transition-all text-center">
                            Log In
                        </a>
                    @endauth
                </div>
            </div>
            
            <div class="relative flex justify-center">
                <div class="relative z-20 bg-surface-container-lowest rounded-xl p-6 shadow-2xl shadow-secondary/10 transform rotate-2 max-w-md w-full">
                    <img alt="Howdy Interface" class="rounded-lg aspect-square object-cover w-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAA4FHIi8SawhaL9wugMKCuxkl0JgSGmoo4_RqeDRjeo5OdZnPLUZDmzMFSkl3eYgNiYF2GBxumtRi8jkSczcyDcDC86RrvPwv15qxAWWpC7P_dob_TmwTBPcCMKgn3gNNOctRllqXmpnxwooQ3LlhF66kRYFt4s4TpCMiW1nfgk02ufHS1okJ78iqGlCt-zdzksb40i8cn_KyGXM1GQKTJq62xLwEgOdUnJg2E8o1yKoIjxyhQQHBhIPYcTUeWHVoF0tBWda_MLc"/>
                    
                    <div class="absolute -bottom-8 -left-8 bg-secondary text-white p-6 rounded-xl shadow-2xl transform -rotate-6 max-w-[200px] text-left">
                        <span class="material-symbols-outlined text-4xl mb-2">auto_awesome</span>
                        <p class="text-sm font-medium leading-tight">Lightning fast messaging for modern teams.</p>
                    </div>
                </div>
                <!-- Ambient glow behind image -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[140%] h-[140%] bg-surface-container-low rounded-full blur-[100px] -z-10"></div>
            </div>
        </div>
    </section>

    <!-- Features Bento Grid -->
    <section class="py-32 px-6 bg-surface-container-low">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20 space-y-4">
                <h2 class="text-4xl font-extrabold text-secondary tracking-tight">Engineered for connection.</h2>
                <p class="text-on-surface-variant text-lg max-w-2xl mx-auto">Beyond a simple chat app, we've built a concierge for your digital life.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                <!-- Feature 1 -->
                <div class="md:col-span-8 bg-surface-container-lowest rounded-xl p-10 flex flex-col md:flex-row items-center gap-10 overflow-hidden relative border border-[#dac2ae]/30">
                    <div class="flex-1 space-y-4 text-left">
                        <div class="w-12 h-12 bg-primary-container rounded-lg flex items-center justify-center text-on-primary-container">
                            <span class="material-symbols-outlined">rocket_launch</span>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary">Real-time Velocity</h3>
                        <p class="text-on-surface-variant leading-relaxed">Latency is a thing of the past. Our WebSocket architecture ensures your messages land before you can even blink.</p>
                    </div>
                    <div class="flex-1 w-full h-full min-h-[250px]">
                        <img alt="Real-time Technology" class="rounded-lg object-cover h-full w-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPpX0Wu8T8j-uQVqvL6W_rFAngRpuqfJMS9GvyzemQ9RnruuHnTpco80_ZmoS4gLcukSh8TWwvVzl3XVOfvxO2RPZxKiu33L-Ll54dM2YN0R6vcLfeCIY0okbyhCkPO6_1qumpRWb0U5zdqxjzySUMrgoFvOgUdJZeOwMoNoRw-fqKefVmZbO2PQxv1Pp4tCf1oQ0s6OP-YQyhaCPjkUL7hlDVMyY862eWmBMIByEo7p6mUUZGpEwSLqSfSbueYKUMfuQJYQyC9vo"/>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="md:col-span-4 bg-secondary text-white rounded-xl p-10 space-y-6 flex flex-col justify-between text-left">
                    <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">shield</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Privacy First</h3>
                        <p class="text-white/80 leading-relaxed">End-to-end encryption isn't just a feature; it's our foundation. Your conversations belong to you.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="md:col-span-4 bg-surface-container-high rounded-xl p-10 space-y-6 text-left border border-[#dac2ae]/30">
                    <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-primary shadow-sm border border-outline-variant/30">
                        <span class="material-symbols-outlined">hub</span>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary">Seamless Workflow</h3>
                    <p class="text-on-surface-variant leading-relaxed">Integrate your favorite tools and manage your life from a single, fluid interface.</p>
                </div>

                <!-- Feature 4 -->
                <div class="md:col-span-8 bg-surface-container-lowest rounded-xl p-10 flex flex-col md:flex-row justify-between items-center relative overflow-hidden gap-10 border border-[#dac2ae]/30">
                    <div class="max-w-md relative z-10 text-left space-y-4">
                        <div class="w-12 h-12 bg-tertiary-container/20 rounded-lg flex items-center justify-center text-tertiary">
                            <span class="material-symbols-outlined">psychology</span>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary">Adaptive UI Intelligence</h3>
                        <p class="text-on-surface-variant leading-relaxed">Howdy learns your preferences, highlighting urgent threads and silencing the noise when you need to focus.</p>
                    </div>
                    <div class="relative w-full md:w-1/2 h-48 md:h-full min-h-[200px]">
                        <img alt="Adaptive UI" class="h-full w-full object-cover rounded-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCb_1ql2sWZB_lKtN2xgizMfp2JRByRgLldGhTwJV7hLeSbbCISGlabgevhULSc2QHiGgFn5yjpdbBuHbSSHUah_kK-Ldm6_h8VXjjtir2kWxOGkHRAyZjujNh90SFVYgvukghXKWwnj0SJr4BVuMZyq0JoYZOAG112i3Aa8wnZhVa1VyBWwNytMIYSxmxzn5InOlHdAn5m_qZ7gLwZm9xjvQlgt6TIeA229B8Aynu1glo01GhmIEvOhjJPaBxBXfHZFMqYPgJmAsU"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-40 px-6 bg-surface relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] opacity-30">
                <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_50%_50%,_#f39200_0%,_transparent_70%)] opacity-20"></div>
            </div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center space-y-10">
            <h2 class="text-5xl lg:text-7xl font-extrabold text-secondary tracking-tighter leading-tight">
                Ready to speak <br/>the <span class="text-primary italic">new language?</span>
            </h2>
            <p class="text-xl text-on-surface-variant leading-relaxed max-w-2xl mx-auto">
                Join the growing community of communicators who prioritize speed, style, and meaningful interaction. Start your Howdy journey today.
            </p>
            <div class="flex flex-col sm:flex-row items-center gap-6 justify-center">
                @auth
                    <a href="{{ url('/chat') }}" class="px-12 py-6 bg-primary text-white rounded-full font-extrabold text-xl shadow-2xl shadow-primary/40 active:scale-95 transition-all inline-block">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('register') }}" class="px-12 py-6 bg-primary text-white rounded-full font-extrabold text-xl shadow-2xl shadow-primary/40 active:scale-95 transition-all inline-block">
                        Create Your Account
                    </a>
                @endauth
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="w-full rounded-t-[3rem] mt-20 bg-[#286679] dark:bg-stone-900">
    <div class="flex flex-col md:flex-row justify-between items-center px-12 py-16 w-full max-w-7xl mx-auto">
        <div class="space-y-4 mb-8 md:mb-0 text-center md:text-left flex flex-col items-center md:items-start">
            <div class="flex items-center gap-2">
                <img src="/logo1.png" alt="Howdy Logo" style="height: 24px; width: auto;" onerror="this.style.display='none'">
                <span class="text-xl font-bold text-white">Howdy</span>
            </div>
            <p class="font-['Plus_Jakarta_Sans'] text-sm tracking-wide text-stone-300/80 max-w-xs mx-auto md:mx-0">© 2024 Howdy Messaging. Crafted with energy.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-8 md:gap-12">
            <a class="font-['Plus_Jakarta_Sans'] text-sm tracking-wide text-stone-300/80 hover:text-[#f39200] transition-all" href="#">Privacy Policy</a>
            <a class="font-['Plus_Jakarta_Sans'] text-sm tracking-wide text-stone-300/80 hover:text-[#f39200] transition-all" href="#">Terms of Service</a>
            <a class="font-['Plus_Jakarta_Sans'] text-sm tracking-wide text-stone-300/80 hover:text-[#f39200] transition-all" href="#">Contact Us</a>
            <a class="font-['Plus_Jakarta_Sans'] text-sm tracking-wide text-stone-300/80 hover:text-[#f39200] transition-all" href="#">Status</a>
        </div>
        <div class="mt-8 md:mt-0 flex gap-4 justify-center">
            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-[#f39200] transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-xl">share</span>
            </div>
            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-[#f39200] transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-xl">public</span>
            </div>
        </div>
    </div>
</footer>

</body>
</html>

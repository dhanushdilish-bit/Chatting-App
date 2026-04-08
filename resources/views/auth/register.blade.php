<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Join {{ config('app.name', 'Howdy') }} - Your Journey Starts Here</title>
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
                        "on-primary-fixed": "#001f28",
                        "surface-container": "#edeeef",
                        "surface-bright": "#f8f9fb",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#ffb86e",
                        "on-primary-fixed-variant": "#004e60",
                        "outline-variant": "#c0c8cc",
                        "tertiary-fixed-dim": "#79d5d5",
                        "secondary": "#8a5100",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "outline": "#70787c",
                        "on-tertiary-fixed": "#002020",
                        "on-secondary-fixed": "#2c1600",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#40484b",
                        "primary-container": "#286679",
                        "on-tertiary": "#ffffff",
                        "primary-fixed": "#b6ebff",
                        "on-background": "#191c1d",
                        "surface-dim": "#d9dadc",
                        "surface-tint": "#286679",
                        "on-surface": "#191c1d",
                        "on-tertiary-container": "#8ce8e8",
                        "primary-fixed-dim": "#95cfe5",
                        "primary": "#004e60",
                        "tertiary": "#005050",
                        "surface-container-highest": "#e1e3e4",
                        "on-primary-container": "#a7e2f8",
                        "surface-container-high": "#e7e8ea",
                        "on-primary": "#ffffff",
                        "on-secondary-container": "#643900",
                        "secondary-fixed": "#ffdcbd",
                        "on-tertiary-fixed-variant": "#004f50",
                        "tertiary-fixed": "#96f2f2",
                        "surface-variant": "#e1e3e4",
                        "surface": "#f8f9fb",
                        "surface-container-low": "#f2f4f5",
                        "background": "#f8f9fb",
                        "inverse-primary": "#95cfe5",
                        "inverse-surface": "#2e3132",
                        "secondary-container": "#fc9910",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed-variant": "#693c00",
                        "tertiary-container": "#006a6a",
                        "inverse-on-surface": "#eff1f2"
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
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col">

<!-- Top Navigation -->
<header class="w-full absolute top-0 z-50">
    <nav class="max-w-7xl mx-auto flex justify-between items-center px-8 py-6">
        <a href="/welcome" class="flex items-center gap-2 text-3xl font-black text-[#f39200]">
            <img src="/logo1.png" alt="Howdy Logo" style="height: 36px; width: auto;" onerror="this.style.display='none'"> 
            howdy
        </a>
        <div class="flex items-center gap-4">
            <span class="text-slate-500 font-medium text-sm hidden sm:block">Already a member?</span>
            <a href="{{ route('login') }}" class="text-[#286679] font-bold hover:text-[#f39200] transition-all active:scale-[0.98]">Login</a>
        </div>
    </nav>
</header>

<main class="flex-grow flex items-center justify-center pt-24 pb-12 px-6">
    <div class="w-full max-w-5xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- Left Side: Visual/Editorial Content -->
        <div class="lg:col-span-5 flex flex-col justify-center space-y-8 pr-4">
            <div class="space-y-4">
                <span class="inline-block px-4 py-1.5 bg-secondary-container/10 text-secondary font-bold text-xs uppercase tracking-widest rounded-full">New Account</span>
                <h1 class="text-5xl font-extrabold tracking-tight text-primary leading-[1.1]">Let's get you <br/><span class="text-secondary-container">started.</span></h1>
                <p class="text-on-surface-variant body-lg max-w-xs leading-relaxed">Join the Howdy community and experience a more human way to connect.</p>
            </div>
            
            <!-- Bento-style Feature Highlight -->
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-surface-container-low p-6 rounded-xl space-y-3">
                    <div class="w-10 h-10 bg-primary-container rounded-full flex items-center justify-center text-white">
                        <span class="material-symbols-outlined" data-icon="lock">lock</span>
                    </div>
                    <p class="text-sm font-bold text-primary">Private by default</p>
                </div>
                <div class="bg-surface-container-low p-6 rounded-xl space-y-3">
                    <div class="w-10 h-10 bg-secondary-container rounded-full flex items-center justify-center text-white">
                        <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
                    </div>
                    <p class="text-sm font-bold text-primary">Lightning fast</p>
                </div>
            </div>
        </div>
        
        <!-- Right Side: The Multi-Step Form Container -->
        <div class="lg:col-span-7">
            <div class="bg-surface-container-lowest rounded-xl shadow-[0_40px_100px_-20px_rgba(40,102,121,0.08)] p-8 lg:p-12 relative overflow-hidden">
                
                @if ($errors->any())
                    <div class="bg-error-container text-on-error-container p-4 rounded-md mb-6 text-sm shadow-sm">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <!-- STEP 1: Basic Info -->
                <section class="space-y-8" id="step-1">
                    <div class="space-y-2">
                        <h2 class="text-2xl font-bold text-primary tracking-tight">The Basics</h2>
                        <p class="text-on-surface-variant text-sm">Tell us who you are so we can set up your space.</p>
                    </div>
                    
                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-primary tracking-wide ml-1 uppercase">Full Name</label>
                                <input name="name" value="{{ old('name') }}" required autofocus class="w-full px-6 py-4 bg-surface-container-high border-none rounded-lg focus:ring-2 focus:ring-primary-container transition-all outline-none" placeholder="John Doe" type="text"/>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-primary tracking-wide ml-1 uppercase">Email Address</label>
                                <input name="email" value="{{ old('email') }}" required class="w-full px-6 py-4 bg-surface-container-high border-none rounded-lg focus:ring-2 focus:ring-primary-container transition-all outline-none" placeholder="john@example.com" type="email"/>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-primary tracking-wide ml-1 uppercase">Choose Password</label>
                                <input name="password" required class="w-full px-6 py-4 bg-surface-container-high border-none rounded-lg focus:ring-2 focus:ring-primary-container transition-all outline-none" placeholder="••••••••" type="password"/>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-primary tracking-wide ml-1 uppercase">Confirm Password</label>
                                <input name="password_confirmation" required class="w-full px-6 py-4 bg-surface-container-high border-none rounded-lg focus:ring-2 focus:ring-primary-container transition-all outline-none" placeholder="••••••••" type="password"/>
                            </div>
                        </div>
                        
                        <div class="pt-4">
                            <button type="submit" class="group w-full bg-gradient-to-r from-primary to-primary-container text-white py-5 rounded-full font-bold text-lg shadow-xl shadow-primary/20 flex items-center justify-center gap-2 hover:translate-y-[-2px] active:scale-[0.98] transition-all">
                                Create Account
                                <span class="material-symbols-outlined transition-transform group-hover:translate-x-1" data-icon="arrow_forward">arrow_forward</span>
                            </button>
                        </div>
                    </form>
                </section>
                
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-[#f2f4f5] py-12 px-4 flex flex-col items-center gap-6 w-full mt-auto">
    <div class="text-lg font-bold text-[#286679] flex items-center gap-2">
        <img src="/logo1.png" alt="Howdy Logo" style="height: 24px; width: auto;" onerror="this.style.display='none'">
        Howdy
    </div>
    <div class="flex flex-wrap justify-center gap-8">
        <a class="font-['Plus_Jakarta_Sans'] text-xs uppercase tracking-widest text-slate-500 hover:text-[#286679] underline underline-offset-4 transition-all duration-200" href="#">Privacy Policy</a>
        <a class="font-['Plus_Jakarta_Sans'] text-xs uppercase tracking-widest text-slate-500 hover:text-[#286679] underline underline-offset-4 transition-all duration-200" href="#">Terms of Service</a>
        <a class="font-['Plus_Jakarta_Sans'] text-xs uppercase tracking-widest text-slate-500 hover:text-[#286679] underline underline-offset-4 transition-all duration-200" href="#">Help Center</a>
        <a class="font-['Plus_Jakarta_Sans'] text-xs uppercase tracking-widest text-slate-500 hover:text-[#286679] underline underline-offset-4 transition-all duration-200" href="#">Careers</a>
    </div>
    <p class="font-['Plus_Jakarta_Sans'] text-xs uppercase tracking-widest text-slate-500">© 2024 Howdy Chat. All rights reserved.</p>
</footer>

<!-- Image for Contextual Background -->
<div class="fixed inset-0 -z-10 pointer-events-none opacity-20 overflow-hidden">
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-container/20 rounded-full blur-[120px]"></div>
    <div class="absolute top-1/2 -right-24 w-80 h-80 bg-secondary-container/20 rounded-full blur-[100px]"></div>
</div>

</body>
</html>

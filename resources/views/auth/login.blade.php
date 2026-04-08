<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name', 'Howdy') }} - Login</title>
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
                        "on-background": "#191c1d",
                        "outline-variant": "#c0c8cc",
                        "on-secondary-fixed": "#2c1600",
                        "on-primary-container": "#a7e2f8",
                        "secondary": "#8a5100",
                        "primary-fixed": "#b6ebff",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-secondary-container": "#643900",
                        "background": "#f8f9fb",
                        "on-secondary-fixed-variant": "#693c00",
                        "surface-tint": "#286679",
                        "outline": "#70787c",
                        "on-surface-variant": "#40484b",
                        "surface-container": "#edeeef",
                        "inverse-on-surface": "#eff1f2",
                        "surface-container-low": "#f2f4f5",
                        "on-tertiary-container": "#8ce8e8",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#001f28",
                        "tertiary-fixed-dim": "#79d5d5",
                        "on-tertiary-fixed": "#002020",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#004f50",
                        "surface": "#f8f9fb",
                        "secondary-fixed": "#ffdcbd",
                        "tertiary": "#005050",
                        "surface-container-highest": "#e1e3e4",
                        "surface-container-high": "#e7e8ea",
                        "secondary-fixed-dim": "#ffb86e",
                        "inverse-primary": "#95cfe5",
                        "inverse-surface": "#2e3132",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#286679",
                        "surface-dim": "#d9dadc",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "primary-fixed-dim": "#95cfe5",
                        "surface-variant": "#e1e3e4",
                        "primary": "#004e60",
                        "tertiary-container": "#006a6a",
                        "surface-bright": "#f8f9fb",
                        "on-primary-fixed-variant": "#004e60",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#191c1d",
                        "tertiary-fixed": "#96f2f2",
                        "secondary-container": "#fc9910"
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
        .bg-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col">

<!-- Top Navigation Shell -->
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm">
    <div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
        <a href="/welcome" class="flex items-center gap-2 text-2xl font-bold text-[#f39200] dark:text-white tracking-tight font-headline">
            <img src="/logo1.png" alt="Howdy Logo" style="height: 32px; width: auto;" onerror="this.style.display='none'">
            howdy
        </a>
        <div class="flex items-center gap-6">
            <span class="text-sm font-medium text-slate-500">New to the neighborhood?</span>
            <a class="text-sm font-bold text-[#286679] hover:opacity-80 transition-opacity" href="{{ route('register') }}">Sign Up Free</a>
        </div>
    </div>
</nav>

<main class="flex-grow flex items-center justify-center pt-24 pb-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Abstract Background Shapes -->
    <div class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 bg-primary-fixed opacity-20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-24 -mb-24 w-96 h-96 bg-secondary-fixed opacity-20 rounded-full blur-3xl"></div>
    
    <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
        
        <!-- Left Side: Editorial Content -->
        <div class="hidden lg:flex flex-col space-y-12 py-12">
            <div class="space-y-6">
                <h1 class="text-6xl font-extrabold tracking-tighter text-primary leading-[1.1]">
                    Welcome back <br/>to <span class="text-secondary">Howdy.</span>
                </h1>
                <p class="text-xl text-on-surface-variant max-w-md leading-relaxed">
                    Your energetic concierge is ready to reconnect you. Experience a service that moves at your rhythm.
                </p>
            </div>
            
            <!-- Feature Pills: Bento-style layering -->
            <div class="grid grid-cols-1 gap-4">
                <div class="group p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/20 flex items-center gap-6 transition-all hover:translate-x-2">
                    <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">lock</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-primary">Secure Access</h3>
                        <p class="text-on-surface-variant text-sm">Enterprise-grade protection for every interaction.</p>
                    </div>
                </div>
                
                <div class="group p-6 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/20 flex items-center gap-6 transition-all hover:translate-x-2">
                    <div class="w-14 h-14 rounded-full bg-secondary-container/10 flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-3xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">sync</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-secondary">Real-time Sync</h3>
                        <p class="text-on-surface-variant text-sm">Your preferences follow you across every device.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Login Card -->
        <div class="w-full flex justify-center lg:justify-center">
            <div class="bg-surface-container-lowest p-10 sm:p-12 rounded-xl shadow-xl shadow-primary/5 w-full max-w-md border border-outline-variant/10">
                
                <!-- Mobile Header (Visible only on mobile) -->
                <div class="lg:hidden mb-8 space-y-2 text-center">
                    <h2 class="text-3xl font-extrabold text-primary tracking-tight">Welcome back</h2>
                    <p class="text-on-surface-variant">Reconnect with your personal concierge.</p>
                </div>

                @if ($errors->any())
                    <div class="bg-error-container text-on-error-container p-4 rounded-md mb-6 text-sm shadow-sm">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-primary ml-1 block">Email Address</label>
                        <div class="relative">
                            <input name="email" value="{{ old('email') }}" required autofocus class="w-full h-14 px-6 bg-surface-container-high border-none rounded-md focus:ring-2 focus:ring-primary/20 text-on-surface transition-all" placeholder="name@example.com" type="email"/>
                        </div>
                    </div>
                    
                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center px-1">
                            <label class="text-sm font-semibold text-primary">Password</label>
                            <!-- Optional Forgot Password link placeholder -->
                            <!-- <a class="text-xs font-bold text-secondary hover:underline" href="#">Forgot Password?</a> -->
                        </div>
                        <div class="relative">
                            <input name="password" required class="w-full h-14 px-6 bg-surface-container-high border-none rounded-md focus:ring-2 focus:ring-primary/20 text-on-surface transition-all" placeholder="••••••••" type="password"/>
                        </div>
                    </div>
                    
                    <!-- Keep me signed in -->
                    <div class="flex items-center gap-3 px-1">
                        <div class="flex items-center h-5">
                            <input name="remember" class="w-5 h-5 rounded border-outline-variant text-secondary focus:ring-secondary/20" type="checkbox"/>
                        </div>
                        <label class="text-sm text-on-surface-variant">Keep me signed in</label>
                    </div>
                    
                    <!-- Primary Action -->
                    <button class="w-full h-14 bg-gradient-to-r from-secondary-container to-[#f39200] text-on-secondary font-bold text-lg rounded-full shadow-lg shadow-secondary/20 hover:scale-[1.02] active:scale-95 transition-all" type="submit">
                        Sign In
                    </button>
                </form>
                
                <!-- Divider -->
                <div class="relative my-10">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-outline-variant/30"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-surface-container-lowest text-outline italic">Or continue with</span>
                    </div>
                </div>
                
                <!-- Social Logins -->
                <div class="grid grid-cols-2 gap-4">
                    <button type="button" class="flex items-center justify-center gap-3 h-14 rounded-full bg-surface-container-high hover:bg-surface-container-highest transition-colors active:scale-95">
                        <svg class="w-5 h-5" viewbox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="currentColor"></path><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="currentColor"></path><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="currentColor"></path><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="currentColor"></path></svg>
                        <span class="text-sm font-bold text-on-surface">Google</span>
                    </button>
                    <button type="button" class="flex items-center justify-center gap-3 h-14 rounded-full bg-surface-container-high hover:bg-surface-container-highest transition-colors active:scale-95">
                        <svg class="w-5 h-5" viewbox="0 0 24 24"><path d="M17.05 20.28c-.96.95-2.17 1.87-3.66 1.87-1.4 0-2.08-.85-3.87-.85-1.78 0-2.48.83-3.83.85-1.48.02-2.84-1.12-3.83-2.55-2.02-2.92-1.55-7.51.41-10.33 1.01-1.44 2.5-2.35 4.14-2.38 1.25-.02 2.43.85 3.19.85.76 0 2.21-1.07 3.73-.91 1.5.06 2.65.61 3.43 1.76-3.23 1.89-2.7 6.13.56 7.46-.73 1.74-1.71 3.42-3.29 5.08zM14.5 1.83C14.5 2.92 13.9 4.11 13 5.03c-.9.91-2.18 1.6-3.32 1.5-.13-1.09.43-2.33 1.27-3.23.86-.92 2.24-1.63 3.32-1.47.11 0 .23 0 .23 0z" fill="currentColor"></path></svg>
                        <span class="text-sm font-bold text-on-surface">Apple</span>
                    </button>
                </div>
                
                <!-- Mobile Sign-up Link -->
                <div class="lg:hidden mt-10 text-center">
                    <p class="text-sm text-on-surface-variant">
                        New to the neighborhood? <a class="font-bold text-primary underline decoration-2 underline-offset-4" href="{{ route('register') }}">Sign Up Free</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="w-full py-12 bg-[#f2f4f5] dark:bg-slate-950">
    <div class="flex flex-col md:flex-row justify-between items-center px-8 gap-4 max-w-7xl mx-auto">
        <p class="text-sm font-['Plus_Jakarta_Sans'] text-slate-500 dark:text-slate-400">© 2024 Howdy Chat. All rights reserved.</p>
        <div class="flex gap-8">
            <a class="text-sm font-['Plus_Jakarta_Sans'] text-slate-500 dark:text-slate-400 hover:text-[#f39200] transition-colors" href="#">Privacy Policy</a>
            <a class="text-sm font-['Plus_Jakarta_Sans'] text-slate-500 dark:text-slate-400 hover:text-[#f39200] transition-colors" href="#">Terms of Service</a>
            <a class="text-sm font-['Plus_Jakarta_Sans'] text-slate-500 dark:text-slate-400 hover:text-[#f39200] transition-colors" href="#">Help Center</a>
            <a class="text-sm font-['Plus_Jakarta_Sans'] text-slate-500 dark:text-slate-400 hover:text-[#f39200] transition-colors" href="#">Contact Us</a>
        </div>
    </div>
</footer>

</body>
</html>

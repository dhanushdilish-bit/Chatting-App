<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Howdy | Launching...</title>
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
                        "on-error": "#ffffff",
                        "inverse-on-surface": "#ffeee0",
                        "outline": "#877362",
                        "surface-tint": "#8a5100",
                        "primary-container": "#f39200",
                        "primary": "#8a5100",
                        "surface-variant": "#f1dfd2",
                        "on-tertiary-fixed": "#001e2f",
                        "primary-fixed": "#ffdcbd",
                        "secondary": "#286679",
                        "surface-bright": "#fff8f5",
                        "on-surface": "#231a12",
                        "on-secondary-fixed": "#001f28",
                        "surface-container-highest": "#f1dfd2",
                        "secondary-container": "#aee8ff",
                        "on-tertiary-container": "#004261",
                        "on-primary-fixed": "#2c1600",
                        "on-surface-variant": "#544434",
                        "tertiary-container": "#02b3ff",
                        "on-tertiary-fixed-variant": "#004b6f",
                        "inverse-surface": "#392f25",
                        "on-primary-container": "#5c3400",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#95cfe5",
                        "on-secondary-container": "#2d6a7d",
                        "tertiary-fixed": "#c9e6ff",
                        "tertiary": "#006491",
                        "on-primary-fixed-variant": "#693c00",
                        "on-tertiary": "#ffffff",
                        "surface": "#fff8f5",
                        "background": "#fff8f5",
                        "on-secondary": "#ffffff",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#ffb86e",
                        "error-container": "#ffdad6",
                        "surface-dim": "#e8d7c9",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#f7e5d7",
                        "surface-container": "#fdebdd",
                        "on-background": "#231a12",
                        "primary-fixed-dim": "#ffb86e",
                        "error": "#ba1a1a",
                        "tertiary-fixed-dim": "#8aceff",
                        "surface-container-low": "#fff1e7",
                        "secondary-fixed": "#b6eaff",
                        "outline-variant": "#dac2ae",
                        "on-secondary-fixed-variant": "#014e60"
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
        @keyframes float-slow {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(2%, 3%) scale(1.05); }
        }
        @keyframes loading-progress {
            0% { width: 0%; }
            20% { width: 15%; }
            50% { width: 65%; }
            80% { width: 85%; }
            100% { width: 100%; }
        }
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes scale-pulse {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        .animate-float-slow {
            animation: float-slow 15s ease-in-out infinite alternate;
        }
        .animate-loading-bar {
            animation: loading-progress 4s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }
        .animate-fade-up {
            animation: fade-up 1.2s ease-out forwards;
        }
        .animate-scale-in {
            animation: scale-pulse 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        .glass-morphism {
            background: rgba(255, 248, 245, 0.4);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
        }
        
        /* Quick fade out animation for transition out */
        .fade-out-page {
            animation: fadeOut 0.5s ease forwards;
        }
        @keyframes fadeOut {
            to { opacity: 0; }
        }
    </style>
    
    <script>
        // Check if intro was already played this session
        if (sessionStorage.getItem('introPlayed') === 'true') {
            // Instantly redirect if they already saw this
            window.location.replace('/welcome');
        } else {
            // Mark intro as played
            sessionStorage.setItem('introPlayed', 'true');
            
            // Wait for the 4s animation, then fade body out and redirect
            setTimeout(() => {
                document.body.classList.add('fade-out-page');
                setTimeout(() => {
                    window.location.href = '/welcome';
                }, 450); // wait for fade out
            }, 4000);
        }
    </script>
</head>

<body class="bg-surface font-body text-on-surface overflow-hidden h-screen w-screen flex items-center justify-center">

<!-- Background Energetic Canvas -->
<div class="fixed inset-0 z-0 overflow-hidden">
    <!-- Floating Primary Blob -->
    <div class="absolute -top-[10%] -left-[10%] w-[60%] h-[60%] rounded-full bg-primary-container/20 blur-[120px] animate-float-slow"></div>
    <!-- Floating Secondary Blob -->
    <div class="absolute -bottom-[10%] -right-[10%] w-[60%] h-[60%] rounded-full bg-secondary/15 blur-[120px] animate-float-slow" style="animation-delay: -5s;"></div>
    <!-- Center Subtle Texture -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,transparent_0%,rgba(255,248,245,0.8)_100%)]"></div>
</div>

<!-- Central Branding Anchor -->
<main class="relative z-10 flex flex-col items-center justify-center px-6 text-center max-w-lg w-full">
    <!-- Logo Container -->
    <div class="mb-12 relative">
        <!-- Halo Glow -->
        <div class="absolute inset-0 bg-primary/10 blur-3xl rounded-full scale-150 animate-pulse"></div>
        <!-- Howdy Logo -->
        <div class="relative animate-scale-in">
            <img src="/logo1.png" alt="Howdy Logo" class="w-32 md:w-40 h-auto drop-shadow-[0_8px_24px_rgba(138,81,0,0.15)]" onerror="this.style.display='none'" />
        </div>
    </div>
    
    <!-- Typography & Content -->
    <div class="space-y-8 animate-fade-up" style="animation-delay: 0.4s;">
        <div class="space-y-3">
            <h1 class="font-headline text-3xl md:text-4xl font-extrabold tracking-tight italic text-[#f39200]">
                Howdy
            </h1>
            <p class="text-on-surface-variant/80 font-medium tracking-wide label-md uppercase">
                Your concierge is arriving...
            </p>
        </div>
        
        <!-- Loading System -->
        <div class="w-full max-w-[280px] mx-auto space-y-6">
            <!-- Progress Track -->
            <div class="h-1.5 w-full bg-surface-container-high rounded-full overflow-hidden shadow-inner">
                <!-- Progress Bar with Gradient -->
                <div class="h-full bg-gradient-to-r from-primary to-primary-container rounded-full animate-loading-bar shadow-[0_0_12px_rgba(243,146,0,0.4)]"></div>
            </div>
            
            <!-- Status Icons -->
            <div class="flex justify-between items-center px-1">
                <div class="flex items-center gap-2 text-secondary/60">
                    <span class="material-symbols-outlined text-[20px]" data-icon="concierge_bell">doorbell</span>
                    <span class="text-[10px] font-bold uppercase tracking-[0.15em]">Personalizing</span>
                </div>
                <div class="flex items-center gap-2 text-primary/60">
                    <span class="material-symbols-outlined text-[20px]" data-icon="bolt">bolt</span>
                    <span class="text-[10px] font-bold uppercase tracking-[0.15em]">Optimizing</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Branding -->
    <div class="fixed bottom-12 left-0 w-full flex flex-col items-center space-y-4 opacity-40 animate-fade-up" style="animation-delay: 0.8s;">
        <div class="flex items-center gap-4">
            <div class="h-[1px] w-8 bg-outline-variant/30"></div>
            <span class="text-[11px] font-bold tracking-[0.2em] uppercase text-secondary">Premium Experience</span>
            <div class="h-[1px] w-8 bg-outline-variant/30"></div>
        </div>
        <p class="text-[10px] text-on-surface-variant font-medium">© 2024 Howdy Concierge Services</p>
    </div>
</main>

<!-- Glass Overlay for Depth -->
<div class="fixed inset-0 pointer-events-none border-[24px] border-surface/20 z-20"></div>

<!-- Material Icons Support -->
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        display: inline-block;
        line-height: 1;
        text-transform: none;
        letter-spacing: normal;
        word-wrap: normal;
        white-space: nowrap;
        direction: ltr;
    }
</style>

</body>
</html>

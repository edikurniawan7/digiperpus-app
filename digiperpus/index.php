<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiperpus | Sistem Perpustakaan Digital</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#3b82f6',
                        'blue-secondary': '#0065F8',
                        'teal-primary': '#0d9488',
                        'teal-secondary': '#14b8a6',
                        'cyan-accent': '#0bbee0',
                        'gray-light': '#f8fafc',
                        'emerald-accent': '#10b981'
                    },
                },
            },
        }
    </script>

    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        html, body {
            font-family: 'Inter', ui-sans-serif, system-ui, apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
        }
    </style>
    
</head>
<body class="bg-teal-50 min-h-screen relative">
    <!-- Navbar --> 
    <nav class="bg-white backdrop-blur-md shadow-xl border-b border-white/20 fixed w-full top-0 z-50 transition-all duration-500" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center group">
                    <img src="assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="h-20 w-50 rounded-3xl object-cover">
                </div>
                <div class="hidden md:flex flex-2 justify-center">
                    <div class="flex items-center space-x-1">
                        <a href="#beranda" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Beranda</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#tentang" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Tentang</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#fitur" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Fitur</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#kontak" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Kontak</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>

                        
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <a href="auth/login.php" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Login→</span>
                    </a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-primary transition-colors p-2 rounded-lg hover:bg-blue-50">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Konten Utama -->
    <main class="pt-24">
        <!-- Bagian Hero -->
         <section class="relative h-[85vh] pt-20 flex items-center justify-center">
        <!-- Latar Belakang Hero -->
        <img 
            src="assets/img/123.jpg" 
            alt="Latar Belakang Hero"
            class="absolute inset-0 w-full h-full object-cover"
        >

        <!-- Overlay -->
        <div class="absolute inset-0 bg-navy/65"></div>
            <div class="relative z-10 text-center text-white px-6 max-w-4xl">
                
                    <a href="#fitur" class="border border-white px-8 py-3 rounded-full font-semibold hover:bg-mint hover:text-navy transition">
                        Pelajari Lebih Lanjut →
                    </a>
                </div>
            </div>
        </section>   
</body>
</html>
<nav class="fixed top-0 left-64 right-0 h-20 bg-white shadow flex items-center px-5 z-40 transition-all">

    <!-- Judul -->
    <div class="flex-1">
        <h1 class="text-xl font-bold text-blue-secondary">Dashboard Admin</h1>
        <p class="text-sm text-gray-500">Digiperpus | Sistem Perpustakaan Digital</p>
    </div>

    <!-- User Info -->
    <div class="flex items-center gap-4">
        <div class="text-right">
            <p class="text-sm font-semibold text-blue-secondary">
                Edi Kurniawan
            </p>
            <p class="text-xs text-gray-500">Admin</p>
        </div>
        <!--Profil Admin-->
        <a href="profil_admin.php">
            <img src="../assets/img/profil.webp" alt="User Icon" class="w-10 h-10 rounded-full object-cover">
        </a>
    </div>

</nav>

<aside id="top-bar-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full bg-white transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
<div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">
    <div class="flex items-center group">
        <img src="../assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="m-auto h-15 w-40 rounded-3xl object-cover">
    </div>
    
    <!-- Menu -->
    <ul class="space-y-2 font-medium mt-8 ml-2">
        <li>
            <a href="index.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <img src="" alt="" class="w-5 h-5 mr-3">
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="buku.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <img src="" alt="" class="w-5 h-5 mr-3">
                <span>Buku</span>
            </a>
        </li>
        <li>
            <a href="anggota.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <img src="" alt="" class="w-5 h-5 mr-3">
                <span>Anggota</span>
            </a>
        </li>
        <li>
            <a href="peminjaman.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <img src="" alt="" class="w-5 h-5 mr-3">
                <span>Peminjaman</span>
            </a>
        </li>
    </ul>
</div>
<?php
// Koneksi ke database
include '../config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>

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
<body class="bg-gradient-to-t from-cyan-100 to-teal-50 min-h-screen">
    <!-- Sidebar -->
    <?php include 'partials/sidebar.php'; ?>
    
    <!-- Konten Utama -->
    <main class="flex-1 ml-64 p-8 mt-20">
        <h1 class="text-3xl font-bold text-blue-secondary mb-6">Daftar Buku</h1>

        <!-- Daftar Buku -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <!-- Bagian Filter & Pencarian -->
            <div class="mb-6 flex items-center gap-4">
                <!-- Tombol Tambah Buku -->
                <a href="tambah_buku.php" class="bg-blue-secondary text-white px-4 py-2 rounded-full hover:bg-blue-primary transition whitespace-nowrap">
                    + Tambah Buku
                </a>
                
                <!-- Filter Kategori Buku -->
                

                <!-- Form Pencarian Buku -->
                <?php
                    $keyword = isset($_GET['search']) ? $_GET['search'] : '';



                ?>
                <form action="" method="GET" class="flex items-center gap-5 w-full">
                    <input 
                        name="search" 
                        placeholder="Cari buku..." 
                        value="<?= htmlspecialchars($keyword); ?>"
                        class="flex-1 px-4 py-2 border-2 border-gray-300 rounded-full focus:border-teal-primary focus:outline-none transition-colors"
                    >
                    <button type="submit" class="bg-blue-secondary text-white px-4 py-2 rounded-full hover:bg-teal-primary transition flex-shrink-0">
                        Cari
                    </button>
                </form>
            </div>

            <!-- Grid Tampilan Buku -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <?php
                // Ambil data buku dari database
                $query = mysqli_query($config, "SELECT * FROM buku ORDER BY judul ASC");
                while ($buku = mysqli_fetch_array($query)) {
                ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <!-- Cover Buku -->
                    <img 
                        src="../assets/img/cover/<?= $buku['cover']; ?>" 
                        alt="<?= $buku['judul']; ?>" 
                        class="w-full h-48 object-cover bg-blue-100"
                    >
                    
                    <!-- Informasi Buku -->
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="text-lg font-bold text-blue-secondary mb-3">
                            <?= $buku['judul']; ?>
                        </h3>
                        
                        <div class="flex flex-col gap-2 mb-4">
                            <!-- Pengarang -->
                            <div class="text-sm text-gray-600">
                                <?= $buku['pengarang']; ?>
                            </div>
                            <!-- Stok Buku -->
                            <div class="text-sm text-gray-600">
                                <span class="font-semibold">Stok:</span> <?= $buku['stok']; ?>
                            </div>
                        </div>
                        
                        <!-- Tombol Aksi -->
                        <div class="flex gap-2 mt-auto">
                            <!-- Tombol Edit -->
                            <a href="edit_buku.php?id=<?= $buku['id_buku']; ?>" class="flex-1 bg-blue-secondary text-white px-1 py-1 rounded-full text-center text-sm font-semibold hover:bg-blue-primary transition">
                                Edit
                            </a>
                            <!-- Tombol Hapus -->
                            <a href="hapus_buku.php?id=<?= $buku['id_buku']; ?>" class="flex-1 bg-red-500 text-white px-1 py-1 rounded-full text-center text-sm font-semibold hover:bg-red-600 transition" onclick="return confirm('Hapus buku ini?')">
                                Hapus
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>
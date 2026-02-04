<?php
include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>

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
    <main class="flex-1 ml-64 p-8 mt-20 ">
        <h1 class="text-3xl font-bold text-blue-secondary mb-6">Daftar Anggota</h1>

        <!-- Tabel Data Anggota -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-blue-secondary rounded-full text-white">
                        <th class="px-4 py-2 text-left">ID Anggota</th>
                        <th class="px-4 py-2 text-left">Nama Lengkap</th>
                        <th class="px-4 py-2 text-left">Username</th>
                        <th class="px-4 py-2 text-left">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Ambil data anggota dari database
                    $query = "SELECT id_user, nama, username, kelas FROM users WHERE role='user' ORDER BY nama ASC";
                    $result = mysqli_query($config, $query);

                    // Tampilkan data anggota
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='border-b hover:bg-gray-100'>";
                        echo "<td class='px-4 py-2'>" . $row['id_user'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row['nama'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row['username'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row['kelas'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
        </div>
    </main>
        
</body>
</html>
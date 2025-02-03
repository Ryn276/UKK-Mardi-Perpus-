<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #ede0d4; /* Warna klasik elegan */
            color: #4a4a4a;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #5C3A21;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .navbar.scrolled {
            background-color: #3B2818;
        }

        .hero {
            position: relative;
            background-image: url('/images/Rak Buku.jpg'); /* Pastikan gambar sesuai */
            background-size: cover;
            background-position: center;
            min-height: 91vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            flex: 1;
            z-index: 1;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-blue {
            background-color: #5C3A21;
            color: white;
        }

        .btn-blue:hover {
            background-color: #3B2818;
        }

        .footer {
            background-color: #3B2818;
            color: #e0e0e0;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed top-0 left-0 w-full py-4 z-10">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
            <h1 class="text-3xl font-bold text-[#ffe0b2]">Perpustakaan Digital</h1>
            <div>
                @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn bg-red-600 text-white hover:bg-red-700">Keluar</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-blue">Masuk</a>
                <a href="{{ route('register') }}" class="btn btn-green">Daftar</a>
                @endauth
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h2 class="text-4xl font-bold">Selamat Datang di Perpustakaan Digital!</h2>
            <p class="text-lg">Akses berbagai koleksi buku digital kapan saja, di mana saja.</p>
            @auth
            <a href="{{ route('books.index') }}" class="btn btn-blue mt-6">Jelajahi Buku</a>
            @endauth
        </div>
    </section>

    <footer class="footer py-6 text-center">
        <p>&copy; 2025 Perpustakaan Digital SMK Antartika 1. Semua Hak Dilindungi.</p>
    </footer>

    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>

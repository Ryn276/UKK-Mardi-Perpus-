<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Admin Perpustakaan') }}</title>
    @vite('resources/css/app.css')
    <style>
        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .flex {
                flex-direction: column;
            }

            /* Sidebar */
            aside {
                position: relative;
                width: 100%;
                height: auto;
                padding: 10px;
            }

            /* Main Content */
            main {
                margin-left: 0;
                margin-top: 10px; /* Mengurangi jarak atas */
                padding: 10px; /* Mengurangi padding */
            }

            /* Menyesuaikan ukuran font di sidebar */
            aside .text-lg {
                font-size: 0.9rem;
            }

            /* Menyesuaikan tampilan menu di sidebar */
            aside nav ul {
                padding-left: 0;
            }

            aside nav ul li {
                margin-bottom: 10px; /* Mengurangi jarak antar menu */
            }
        }

        /* Responsif untuk layar lebih kecil dari 576px */
        @media (max-width: 576px) {
            aside .text-3xl {
                font-size: 1.5rem;
            }

            aside .text-lg {
                font-size: 0.9rem;
            }

            .text-2xl {
                font-size: 1.5rem;
            }

            .bg-gray-100 {
                padding: 5px;
            }
        }
    </style>
</head>

<body class="bg-[#2B1D0E] text-[#D4AF37] font-sans">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-72 [#3E2C18] text-[#D4AF37] p-4 fixed top-0 left-0 h-screen shadow-lg z-10">
            <div class="flex flex-col h-full">
                <div class="mb-4 text-center">
                    <h3 class="text-3xl font-bold text-[#FFD700]">Admin Perpustakaan</h3>
                </div>

                <!-- Navigation -->
                <nav>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('dashboard') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('dashboard') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('rak.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('rak.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-cogs mr-3"></i> Rak
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('ddc.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('ddc.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-th-list mr-3"></i> DDC
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('format.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('format.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-clipboard-list mr-3"></i> Format
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('penerbit.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('penerbit.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-print mr-3"></i> Penerbit
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pengarang.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('pengarang.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-user-edit mr-3"></i> Pengarang
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jenis_anggota.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('jenis_anggota.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-users mr-3"></i> Jenis Anggota
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pustaka.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('pustaka.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-book mr-3"></i> Pustaka
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('anggota.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('anggota.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-users mr-3"></i> Anggota
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.index') }}" class="flex items-center text-lg px-4 py-2 rounded-lg hover:bg-[#5A3E22] transition duration-300 {{ request()->routeIs('transaksi.index') ? 'bg-[#5A3E22]' : '' }}">
                                <i class="fas fa-exchange-alt mr-3"></i> Transaksi
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Logout -->
                <div class="mt-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center justify-center w-full text-lg bg-red-600 hover:bg-red-500 px-4 py-3 rounded-lg text-white transition duration-300">
                            <i class="fas fa-sign-out-alt mr-3"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-72 p-4 bg-gray-100">
            <header class="bg-white shadow-md p-4 rounded-lg mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">@yield('header', 'Admin Dashboard')</h1>
            </header>
            <section class="bg-white p-6 shadow-md rounded-lg">
                @yield('content')
            </section>
        </main>
    </div>

    @vite('resources/js/app.js')
</body>

</html>

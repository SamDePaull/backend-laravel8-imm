<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        /* Custom CSS */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f4f6;
        }

        .header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
        }

        .header .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }

        .navigation {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navigation li {
            margin-right: 20px;
        }

        .navigation li a {
            text-decoration: none;
            color: #333333;
            transition: color 0.3s ease;
        }

        .navigation li a:hover {
            color: #ff6b6b;
        }

        .content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="min-h-screen">
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo style="height: 40px;" />
                </a>
            </div>
            <div class="logo">{{ config('app.name', 'Laravel') }}</div>
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">

            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
</div>
</body>
</html>

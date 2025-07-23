<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'طرحینار')</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @font-face {
            font-family: 'sorayaFont';
            src: url('{{ asset('fonts/A_Soraya.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'diroozFont';
            src: url('{{ asset('fonts/Dirooz.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'diroozFont', serif;
        }
        .font-soraya {
            font-family: 'sorayaFont', serif;
        }
    </style>
</head>
<body class="text-charcoal">
    <!-- header -->
    <header class="fixed top-0 w-full z-50 bg-white/30 backdrop-blur-md shadow-md border-b border-white/20">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex justify-start items-center">
                <img src="/images/logo.png" alt="logo" class="w-10">
                <div class="text-xl font-bold font-soraya mr-2 pt-2">طرحینار</div>
            </a>

            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <svg data-lucide="menu" class="w-6 h-6"></svg>
            </button>

            <nav class="space-x-6 hidden md:block">
                <a href="#plans">پلن‌ها</a>
                <a href="#portfolio">نمونه کار‌ها</a>
                <a href="#about-me">درباره من</a>
                <a href="#contact-me">تماس و سفارش</a>
                <a href="#faq">سوالات متداول</a>
            </nav>
        </div>
    </header>

    <div id="mobile-menu" class="fixed top-0 left-0 h-full w-64 bg-white/30 backdrop-blur-md text-xl shadow-lg z-50 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="p-4 border-b border-gray-200 flex justify-between items-center">
            <span class="text-lg font-bold">منو</span>
            <button id="menu-close">
                <svg data-lucide="x" class="w-6 h-6"></svg>
            </button>
        </div>
        <nav class="flex flex-col p-4 space-y-6">
            <a href="#plans" class="flex justify-start">
                <i data-lucide="component" class="ml-2"></i>
                <span>پلن‌ها</span>
            </a>
            <a href="#portfolio" class="flex justify-start">
                <i data-lucide="briefcase-business" class="ml-2"></i>
                <span>نمونه کار‌ها</span>
            </a>
            <a href="#about-me" class="flex justify-start">
                <i data-lucide="square-user-round" class="ml-2"></i>
                <span>درباره من</span>
            </a>
            <a href="#contact-me" class="flex justify-start">
                <i data-lucide="phone" class="ml-2"></i>
                <span>تماس و سفارش</span>
            </a>
            <a href="#faq" class="flex justify-start">
                <i data-lucide="file-question-mark" class="ml-2"></i>
                <span>سوالات متداول</span>
            </a>
        </nav>
    </div>

    @yield('content')

    <button id="scrollToTopBtn" class="hidden cursor-pointer shadow-2xl fixed bottom-6 left-6 z-50 bg-pomegranate text-white p-3 rounded-full hover:scale-90 transition duration-500">
        <i data-lucide="chevron-up"></i>
    </button>

    <!-- footer -->
    <div class="w-full text-center bg-light-gray py-1">
        تمامی حقوق این سایت متعلق به <span class="font-soraya font-semibold text-pomegranate">طرحینار</span> می‌باشد © 2025
    </div>
</body>
</html>

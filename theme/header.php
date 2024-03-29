<?php

include "components/define-domain.php";
include "components/svg-sprite.php";

?>
<!doctype html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="TMMOB Mimarlar Odası Konya Şubesi">
    <title>TMMOB Mimarlar Odası Konya Şubesi</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=domain?>assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=domain?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=domain?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=domain?>assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=domain?>assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?=domain?>assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#5bbad5">
    <meta name="msapplication-config" content="<?=domain?>assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#959387">
    <style>
        @font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:url(<?=domain?>assets/fonts/montserrat-latin-ext-normal-400.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;font-display:swap;src:url(<?=domain?>assets/fonts/montserrat-latin-ext-normal-500.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;font-display:swap;src:url(<?=domain?>assets/fonts/montserrat-latin-ext-normal-600.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;font-display:swap;src:url(<?=domain?>assets/fonts/montserrat-latin-ext-normal-700.woff2) format('woff2');unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}
    </style>
    <link rel="stylesheet"
        href="<?= domain ?>assets/css/main.css<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>">
</head>

<body class="bg-light">
    <div id="search_overlay"
        class="absolute top-0 left-0 w-full h-2/7 z-8 bg-light flex justify-center items-center transition-400 transition-transform">
        <svg class="absolute top-5 right-5 cursor-pointer transition-300 transition-colors w-10 h-10 xs:w-7 xs:h-7"
            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" id="close_search"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="">
                        <div class="flex items-center h-20 xs:h-15">
                            <label for="name" class="flex-1 h-full">
                                <input type="text" placeholder="Ne Aramıştınız?" id="name" name="name"
                                    class="w-full h-full border-none p-5 text-primary leading-none" required>
                            </label>
                            <button
                                class="flex-none block h-full w-20 xs:w-15 aspect-square flex items-center justify-center transition-colors transition-300 bg-primary border-none cursor-pointer">
                                <?= getSprite("search_icon", "fill-white w-7 xs:w-5 h-7 xs:h-5") ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="search_overlay_backdrop"
        class="absolute top-0 left-0 w-screen h-screen z-5 bg-black opacity-0 pointer-events-none select-none transition-400 transition-opacity">
    </div>
    <header class="header_lg block md:hidden bg-white pt-11 relative z-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="index.php" class="block pb-6.5">
                        <img src="<?= domain ?>assets/img/svg/logo.svg" alt="TMMOB Mimarlar Odası Konya Şubesi"
                            class="block h-15">
                    </a>
                </div>
                <div class="col-lg-9 flex items-end justify-end gap-x-9.5">
                    <ul aria-label="Main menu" id="main-nav" class="flex gap-x-10.5 lg:gap-x-5">
                        <li class="has-mega-menu">
                            <a href=""
                                class="text-secondary inline-block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
                                Konya Şube
                            </a>
                            <div
                                class="mega-menu absolute z-2 pt-8 transition-300 transition-all opacity-0 select-none pointer-events-none">
                                <div class="container">
                                    <div class="menu-container bg-white py-9.5 relative">
                                        <div class="absolute triangle border-solid top-0"></div>
                                        <div class="wrapper flex justify-between gap-x-10">
                                            <div class="mega-list flex flex-col">
                                                <span
                                                    class="block mb-3 text-secondary font-bold leading-none">HAKKIMIZDA</span>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tigh">Kuruluş
                                                    ve Amaç</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tigh">Şube
                                                    Yönetim Kurulu</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tigh">Kütüphane</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tigh">Çalışma
                                                    Raporlar</a>
                                            </div>
                                            <div class="mega-list flex flex-col">
                                                <span
                                                    class="block mb-3 text-secondary font-bold leading-none">ORGANLAR</span>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Denetleme
                                                    Kurulu</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Soruşturma
                                                    ve Uzlaştırma Kurulu</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Oda
                                                    Genel Kurul Delegeleri</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Komite,
                                                    Komisyon ve Kulüpler</a>
                                            </div>
                                            <div class="mega-list flex flex-col">
                                                <span class="block mb-3 text-secondary font-bold leading-none">MESLEKİ
                                                    DENETİM</span>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Belgeler</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">En
                                                    Az Bedel Hesabı</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Yapı
                                                    Birim Maliyetleri</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Mimari
                                                    Çizim Standartları</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Sürekli
                                                    Mesleki Gelişim</a>
                                            </div>
                                            <div class="mega-list flex flex-col">
                                                <span
                                                    class="block mb-3 text-secondary font-bold leading-none">ÜYELİK</span>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Kayıt
                                                    Koşulları</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Ödenti
                                                    ve Belgeler</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Büro
                                                    Tescil</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Öğrenci
                                                    Üyelik</a>
                                            </div>
                                            <div class="mega-list flex flex-col">
                                                <span
                                                    class="block mb-3 text-secondary font-bold leading-none">YAYINLAR</span>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Mimaran</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Bültenler</a>
                                                <a href=""
                                                    class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Raporları</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="has-dropdown relative">
                            <a href=""
                                class="text-secondary inline-block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
                                Mevzuat
                            </a>
                            <div
                                class="dropdown-container absolute before-absolute z-2 pt-8 transition-300 transition-all opacity-0 select-none pointer-events-none whitespace-nowrap">
                                <nav class="wrapper w-full bg-white py-8 pl-10 pr-15.5">
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Mimarlar
                                        Odası Mevzuatı</a>
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Bakanlık
                                        Görüşleri</a>
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Kanunlar</a>
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Yönetmelikler</a>
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Plan
                                        Notları</a>
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Sözleşmeler</a>
                                </nav>
                            </div>
                        </li>
                        <li class="has-dropdown relative">
                            <a href=""
                                class="text-secondary inline-block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
                                Faaliyetler
                            </a>
                            <div
                                class="dropdown-container absolute before-absolute z-2 pt-8 transition-300 transition-all opacity-0 select-none pointer-events-none whitespace-nowrap">
                                <nav class="wrapper w-full bg-white py-8 pl-10 pr-15.5">
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Etkinlikler</a>
                                    <a href=""
                                        class="py-2 block text-secondary relative before-absolute text-sm leading-tight">Ziyaret
                                        ve Kabuller</a>
                                </nav>
                            </div>
                        </li>
                        <li>
                            <a href=""
                                class="text-secondary inline-block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
                                Haber Arşivi
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="text-secondary inline-block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
                                İletişim
                            </a>
                        </li>
                    </ul>
                    <span aria-label="Arama" class="header_search cursor-pointer w-6 h-6 block mb-7.5">
                        <?= getSprite("search_icon", "fill-dark w-6 h-6") ?>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <header class="header_sm relative hidden md:block bg-secondary z-7">
        <div class="container-lg">
            <div class="row">
                <div class="col-6 col-sm-4">
                    <a href="" class="logo">
                        <img src="<?= domain ?>assets/img/svg/logo_white.svg" alt="TMMOB Mimarlar Odası Konya Şubesi"
                            class="block w-full h-15 object-contain object-left">
                    </a>
                </div>
                <div class="col-6 col-sm-8 flex items-center justify-end gap-x-6">
                    <span aria-label="Arama" class="header_search cursor-pointer w-6 h-6 block">
                        <?= getSprite("search_icon", "fill-light w-6 h-6") ?>
                    </span>
                    <div class="menuButton relative flex flex-col items-center justify-between">
                        <span class="block w-full"></span>
                        <span class="block w-full absolute"></span>
                        <span class="block w-full"></span>
                        <span class="block w-full"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div
        class="mobileMenuBackdrop fixed top-0 left-0 w-full h-full z-4 transition-opacity transition-300 pointer-events-none select-none opacity-0">
    </div>
    <div class="mobileMenu hidden md:block fixed w-4/5 h-screen z-6 bg-primary pb-10">
        <div class="accordion flex flex-col gap-y-4" id="nav-mobile-1">
            <div class="accordion-item">
                <h2 class="accordion-header my-0">
                    <button class="accordion-button collapsed text-2xl font-bold" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false"
                        aria-controls="collapse-1">
                        Konya Şube
                    </button>
                </h2>
                <div id="collapse-1" class="accordion-collapse collapse" data-bs-parent="#nav-mobile-1">
                    <div class="accordion-body pl-6 pr-3 py-4">
                        <!-- Mega Menu Start -->
                        <div class="accordion flex flex-col gap-y-3" id="sub-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header my-0">
                                    <button
                                        class="accordion-button collapsed text-xl xs:text-lg font-semibold pl-2 pr-0"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-1"
                                        aria-expanded="false" aria-controls="collapse-1-1">
                                        HAKKIMIZDA
                                    </button>
                                </h2>
                                <div id="collapse-1-1" class="accordion-collapse collapse"
                                    data-bs-parent="#sub-accordion">
                                    <div class="accordion-body px-2 flex flex-col gap-y-3 pt-4 pb-3">
                                        <a href="" class="block text-white xs:text-sm">Kuruluş ve Amaç</a>
                                        <a href="" class="block text-white xs:text-sm">Şube Yönetim Kurulu</a>
                                        <a href="" class="block text-white xs:text-sm">Kütüphane</a>
                                        <a href="" class="block text-white xs:text-sm">Çalışma Raporları</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header my-0">
                                    <button
                                        class="accordion-button collapsed text-xl xs:text-lg font-semibold pl-2 pr-0"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-2"
                                        aria-expanded="false" aria-controls="collapse-1-2">
                                        ORGANLAR
                                    </button>
                                </h2>
                                <div id="collapse-1-2" class="accordion-collapse collapse"
                                    data-bs-parent="#sub-accordion">
                                    <div class="accordion-body px-2 flex flex-col gap-y-3 pt-4 pb-3">
                                        <a href="" class="block text-white xs:text-sm">Denetleme Kurulu</a>
                                        <a href="" class="block text-white xs:text-sm">Soruşturma ve Uzlaştırma
                                            Kurulu</a>
                                        <a href="" class="block text-white xs:text-sm">Oda Genel Kurul Delegeleri</a>
                                        <a href="" class="block text-white xs:text-sm">Komite, Komisyon ve Kulüpler</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header my-0">
                                    <button
                                        class="accordion-button collapsed text-xl xs:text-lg font-semibold pl-2 pr-0"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-3"
                                        aria-expanded="false" aria-controls="collapse-1-3">
                                        MESLEKİ DENETİM
                                    </button>
                                </h2>
                                <div id="collapse-1-3" class="accordion-collapse collapse"
                                    data-bs-parent="#sub-accordion">
                                    <div class="accordion-body px-2 flex flex-col gap-y-3 pt-4 pb-3">
                                        <a href="" class="block text-white xs:text-sm">Belgeler</a>
                                        <a href="" class="block text-white xs:text-sm">En Az Bedel Hesabı</a>
                                        <a href="" class="block text-white xs:text-sm">Yapı Birim Maliyetleri</a>
                                        <a href="" class="block text-white xs:text-sm">Mimari Çizim Standartları</a>
                                        <a href="" class="block text-white xs:text-sm">Sürekli Mesleki Gelişim</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header my-0">
                                    <button
                                        class="accordion-button collapsed text-xl xs:text-lg font-semibold pl-2 pr-0"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-4"
                                        aria-expanded="false" aria-controls="collapse-1-4">
                                        ÜYELİK
                                    </button>
                                </h2>
                                <div id="collapse-1-4" class="accordion-collapse collapse"
                                    data-bs-parent="#sub-accordion">
                                    <div class="accordion-body px-2 flex flex-col gap-y-3 pt-4 pb-3">
                                        <a href="" class="block text-white xs:text-sm">Kayıt Koşulları</a>
                                        <a href="" class="block text-white xs:text-sm">Ödenti ve Belgeler</a>
                                        <a href="" class="block text-white xs:text-sm">Büro Tescil</a>
                                        <a href="" class="block text-white xs:text-sm">Öğrenci Üyelik</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header my-0">
                                    <button
                                        class="accordion-button collapsed text-xl xs:text-lg font-semibold pl-2 pr-0"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-5"
                                        aria-expanded="false" aria-controls="collapse-1-5">
                                        YAYINLAR
                                    </button>
                                </h2>
                                <div id="collapse-1-5" class="accordion-collapse collapse"
                                    data-bs-parent="#sub-accordion">
                                    <div class="accordion-body px-2 flex flex-col gap-y-3 pt-4 pb-3">
                                        <a href="" class="block text-white xs:text-sm">Mimaran</a>
                                        <a href="" class="block text-white xs:text-sm">Bültenler</a>
                                        <a href="" class="block text-white xs:text-sm">Raporlar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mega Menu End -->
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header my-0">
                    <button class="accordion-button collapsed text-2xl font-bold" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                        aria-controls="collapse-2">
                        Mevzuat
                    </button>
                </h2>
                <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#nav-mobile-1">
                    <div class="accordion-body flex flex-col gap-y-3 pl-6 pr-3 py-4">
                        <a href="" class="block text-white xs:text-sm">Mimarlar Odası Mevzuatı</a>
                        <a href="" class="block text-white xs:text-sm">Bakanlık Görüşleri</a>
                        <a href="" class="block text-white xs:text-sm">Kanunlar</a>
                        <a href="" class="block text-white xs:text-sm">Yönetmelikler</a>
                        <a href="" class="block text-white xs:text-sm">Plan Notları</a>
                        <a href="" class="block text-white xs:text-sm">Sözleşmeler</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header my-0">
                    <button class="accordion-button collapsed text-2xl font-bold" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                        aria-controls="collapse-3">
                        Faaliyetler
                    </button>
                </h2>
                <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#nav-mobile-1">
                    <div class="accordion-body flex flex-col gap-y-3 pl-6 pr-3 py-4">
                        <a href="" class="block text-white xs:text-sm">Etkinlikler</a>
                        <a href="" class="block text-white xs:text-sm">Ziyaretler ve Kabuller</a>
                    </div>
                </div>
            </div>
            <a href="" class="text-2xl text-white font-bold px-5">Haber Arşivi</a>
            <a href="" class="text-2xl text-white font-bold px-5">İletişim</a>
        </div>
    </div>
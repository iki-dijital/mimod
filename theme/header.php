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
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet';"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="<?= domain ?>assets/css/main.css<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>">
</head>

<body class="bg-light">
    <div id="search_overlay"
        class="absolute top-0 left-0 w-full h-2/7 z-6 bg-light flex justify-center items-center transition-400 transition-transform">
        <svg class="absolute top-5 right-5 cursor-pointer transition-300 transition-colors"
            xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" stroke="currentColor"
            stroke-width="1.5" id="close_search" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="">
                        <div class="flex items-center h-20">
                            <label for="name" class="flex-1 h-full">
                                <input type="text" placeholder="Ne Aramıştınız?" id="name" name="name"
                                    class="w-full h-full border-none p-5 text-primary leading-none" required>
                            </label>
                            <button
                                class="flex-none block h-full w-20 aspect-square flex items-center justify-center transition-colors transition-300 bg-primary border-none cursor-pointer">
                                <?= getSprite("search_icon", "fill-white w-7 h-7") ?>
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
                    <ul aria-label="Main menu" id="main-nav" class="flex gap-x-10.5">
                        <li class="has-mega-menu">
                            <a href=""
                                class="text-secondary block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
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
                                class="text-secondary block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
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
                                class="text-secondary block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
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
                                class="text-secondary block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
                                Haber Arşivi
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="text-secondary block font-medium pb-7.5 pt-4 transition-300 relative after-absolute">
                                İletişim
                            </a>
                        </li>
                    </ul>
                    <span aria-label="Arama" class="cursor-pointer w-6 h-6 block mb-7.5" class="search"
                        id="header_search">
                        <?= getSprite("search_icon", "fill-dark w-6 h-6") ?>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <header class="header_sm relative hidden md:block bg-primary z-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="" class="logo">
                        <img src="<?= domain ?>assets/img/svg/logo.svg" alt="">
                    </a>
                </div>
                <div class="col-6 flex items-center">
                    <div class="menuButton bg-primary relative flex flex-col items-center justify-between">
                        <span class="block w-full"></span>
                        <span class="block w-full absolute"></span>
                        <span class="block w-full"></span>
                        <span class="block w-full"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobileMenu hidden md:block fixed w-screen h-screen z-4 bg-primary">
        <nav aria-label="Mobile menu" id="nav-mobile-1"></nav>
    </div>
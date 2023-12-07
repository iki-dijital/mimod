<?php
$js_file = 'bultenler';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Yayınlar</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Yayınlar</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Bültenler</a>
        </nav>
    </div>
</section>
<div class="bottom-menu hidden md:flex bg-secondary text-center justify-center py-5 mb-7.5">
    <div id="page-menu-button" class="flex justify-center items-center gap-x-4">
        <div class="text-lg text-light font-medium">Sayfa Menü</div>
        <div class="w-10 h-5 flex flex-col justify-between" id="page-menu-button">
            <span class="w-full h-1 rounded bg-light block"></span>
            <span class="w-full h-1 rounded bg-light block"></span>
            <span class="w-full h-1 rounded bg-light block"></span>
        </div>
    </div>
</div>
<div id="page-menu" class="hidden md:block fixed pb-4 w-4/5 h-full top-0 bg-white z-4 overflow-scroll cursor-pointer">
    <div id="page-menu-close" class="absolute z-2 pointer-events-auto right-5 w-10 h-10 xs:w-7 xs:h-7">
        <svg class="cursor-pointer transition-300 transition-colors w-full h-full"
            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </div>
</div>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="content-wrapper">
                    <h2>Bültenler</h2>
                    <div class="row">
                        <?php for ($i = 1; $i <= 6; $i++): ?>
                            <div class="col-md-4 col-6">
                                <a href="" class="mimaran_cover bulten_cover block p-4 bg-white mb-10 transition-shadow transition-300">
                                    <div class="img h-full border border-solid border-dark pt-4 pb-5 px-18 lg:px-5 bg-light flex flex-col justify-end">
                                        <!-- Alt etiketi güncelle -->
                                        <img src="<?= domain ?>assets/img/svg/delete_pdf_cover.svg"
                                            alt="Mimaran 13.sayı" class="block w-full lg:w-7/12 lg:mx-auto object-contain object-center mb-9 lg:mb-5"
                                            loading="lazy">
                                        <span
                                            class="title text-secondary font-semibold text-lg leading-tight block w-full text-center">
                                            Bülten
                                        </span>
                                        <span class="edition text-sm text-secondary leading-tight block w-full text-center">
                                            24.11.2023
                                        </span>
                                    </div>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <aside class="sticky md:hidden p-2 bg-white top-0">
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">HAKKIMIZDA</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="active text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kuruluş
                                    ve Amaç</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Şube
                                    Yönetim Kurulu</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kütüphane</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Çalışma
                                    Raporları</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">ORGANLAR</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Denetleme
                                    Kurulu</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Soruşturma
                                    ve Uzlaştırma Kurlu</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Oda
                                    Genel Kurul Delegeleri</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Komite,
                                    Komisyon ve Kulüpler</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">MESLEKİ
                            DENETİM</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Belgeler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">En Az
                                    Bedel Hesabı</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Yapı
                                    Birim Maliyetleri</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Mimari
                                    Çizim Standartları</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">ÜYELİK</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kayıt
                                    Koşulları</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Ödenti
                                    ve Belgeler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Büro
                                    Tescil</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Öğrenci
                                    Üyelik</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">YAYINLAR</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Mimaran</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Bültenler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Raporlar</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
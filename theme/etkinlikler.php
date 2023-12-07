<?php
$js_file = 'etkinlikler';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Faaliyetler</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Faaliyetler</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Etkinlikler</a>
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
                    <div class="dynamic-form mb-11.5">
                        <div class="form-wrapper py-2 pr-2 md:pb-3 pl-5 bg-white flex md:flex-col md:gap-y-4 justify-betwen items-center">
                            <span class="text-xl text-secondary font-bold leading-none">Etkinlikler</span>
                            <form action="" class="flex-1 w-full flex justify-end md:justify-between gap-x-10">
                                <div id="event_type_wrapper" class="custom-select">
                                    <select name="type" id="event_type" autocomplete="off">
                                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                            <option value="type_<?= $i ?>">Genel
                                                <?= $i ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div id="year_type_wrapper" class="custom-select w-25">
                                    <select name="type" id="year_type" autocomplete="off">
                                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                            <option value="type_<?= $i ?>">
                                                <?= 2024 - $i ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        for ($i = 1; $i <= 30; $i++): ?>
                            <div class="col-xl-4 col-6">
                                <a href=""
                                    class="gorus_component block px-2 pt-2 pb-8 bg-white mb-10 md:mb-6 transition-shadow transition-300 text-secondary relative">
                                    <div class="ribbon absolute top-2 left-1/2 py-1.5 px-8 bg-white w-fit whitespace-nowrap text-secondary font-medium text-xs leading-relaxed">30 Ağustos 2023</div>
                                    <img src="<?= domain ?>assets/img/delete_etkinlik_<?= rand(1, 5) ?>.webp" alt="Görsel"
                                        class="block w-full aspect-square object-cover object-center mb-4" loading="lazy">
                                    <span
                                        class="min-h-22 block text-sm font-medium leading-snug text-center flex items-center">
                                        Çevre ve Şehircilik Bakanlığının Sığınak Yönetmeliği Uygulamaları Hakkındaki
                                        Görüşleri
                                    </span>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="pagination flex gap-x-2">
                        <?php for ($i = 1; $i <= 7; $i++): ?>
                            <a href="" class="flex bg-cream items-center justify-center w-8 h-8 p-2 text-sm text-secondary font-medium text-center leading-none transition-colors transition-300"><?=$i?></a>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <aside class="sticky md:hidden p-2 bg-white top-0">
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">FAALİYETLER</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Etkinlikler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="active text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Ziyaret
                                    ve Kabuller</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
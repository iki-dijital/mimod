<?php
$js_file = 'bakanlik_gorusleri';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Mevzuat</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Mevzuat</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Bakanlık Görüşleri</a>
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
                    <h2>Bakanlık Görüşleri</h2>
                    <div class="row mt-6.5">
                        <?php
                        $bakanlik_gorus_list = [
                            "Çevre ve Şehircilik Bakanlığının
                            22.02.2018 Otopark Yönetmeliği'nin
                            Uygulamaları Hakkındaki Görüşleri",
                            "Çevre ve Şehircilik Bakanlığı'nın
                            03/07/2017 Planlı Alanlar İmar
                            Yönetmeliği'nin Uygulamaları
                            Hakkındaki Görüşleri",
                            "Çevre ve Şehircilik Bakanlığının
                            Sığınak Yönetmeliği Uygulamaları
                            Hakkındaki Görüşleri"
                        ];
                        for ($i = 1; $i <= 6; $i++): ?>
                            <div class="col-xl-4 col-6">
                                <a href="" class="gorus_component block px-4 pt-4 pb-8 bg-white mb-10 md:mb-6 transition-shadow transition-300 text-secondary">
                                    <img src="<?= domain ?>assets/img/svg/delete_gorus_img.svg" alt="Görsel"
                                        class="block w-full aspect-square object-cover object-center mb-4">
                                    <span class="min-h-22 block text-sm font-medium leading-snug text-center flex items-center">
                                        <?= $bakanlik_gorus_list[rand(0, 2)] ?>
                                    </span>
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">MEVZUAT</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Mimarlar
                                    Odası Mevzuat</a>
                            </li>
                            <li>
                                <a href=""
                                    class="active text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Bakanlık
                                    Görüşleri</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kanunlar</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Yönetmelikler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Plan
                                    Notları</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Sözleşmeler</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
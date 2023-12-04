<?php
$js_file = 'yapi_birim_maliyetleri';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Mesleki Denetim</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Mesleki Denetim</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Yapı Birim
                Maliyetleri</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <h2>Yapı Birim Maliyetleri</h2>
                    <div class="mt-8.5">
                        <?php
                        $yapi_birim_title_list = [
                            "2023 / 2 Yapı Birim Maliyetleri",
                            "2022 3. Dönem Yapı Birim Maliyetleri",
                            "2022 Yapı Birim Maliyetleri",
                            "2020 Yapı Birim Maliyetleri",
                            "2018 Yapı Birim Maliyetleri",
                            "2016 Yapı Birim Maliyetleri",
                        ];
                        for ($i = 1; $i <= 6; $i++): ?>
                            <a href=""
                                class="download_component block mb-6 bg-white flex items-center justify-between min-h-20 pl-3 transition-shadow transition-300">
                                <span
                                    class="py-3 text-sm leadig-tight text-secondary"><?= $yapi_birim_title_list[$i - 1] ?></span>
                                <img src="<?= domain ?>assets/img/svg/delete_file_pdf.svg" alt="PDF"
                                    class="h-20 aspect-square object-contain object-center">
                            </a>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="p-2 bg-white top-0">
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">HAKKIMIZDA</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kuruluş
                                    ve Amaç</a>
                            </li>
                            <li>
                                <a href=""
                                    class="active text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Şube
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">ORGANLAR</span>
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">MESLEKİ
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">ÜYELİK</span>
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">YAYINLAR</span>
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
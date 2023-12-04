<?php
$js_file = 'bakanlik_gorus_detay';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Mevzuat</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Mevzuat</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Bakanlık Görüşleri</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Çevre ve Şehircilik
                Bakanlığının 22.02.2018 Otopark Yönetmeliği'nin Uygulamaları
                Hakkındaki Görüşleri</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <h2>Çevre ve Şehircilik Bakanlığının 22.02.2018 Otopark Yönetmeliği'nin Uygulamaları 
Hakkındaki Görüşleri</h2>
                    <div class="mt-8.5">
                        <?php
                        $gorus_title_list = [
                            "Geçici Madde-3 konularına ilişkin Torbalı Belediyesine verilen görüş",
"Yapılacak otoparkların kapalı olma zorunluluğu olup olmadığı, açık otopark yapılıp yapılmayacağı, LPG'li araçların kapalı
otoparklara giriş yapıp yapamayacağı hususunda Gaziantep Ticaret Odasına verilen görüş.",
"Geçici Madde-3 konularına ilişkin Torbalı Belediyesine verilen görüş"

                        ];
                        for ($i = 1; $i <= 6; $i++): ?>
                            <a href=""
                                class="download_component mb-6 bg-white flex items-center justify-between min-h-20 pl-3 transition-shadow transition-300">
                                <span class="py-3 text-sm leadig-tight text-secondary">
                                    <?= $gorus_title_list[rand(0,2)] ?>
                                </span>
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
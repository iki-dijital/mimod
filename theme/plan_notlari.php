<?php
$js_file = 'plan_notlari';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Mevzuat</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Mevzuat</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Plan Notları</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <h2>Plan Notları</h2>
                    <div class="row mt-8.5">
                        <?php
                        for ($i = 1; $i <= 6; $i++): ?>
                            <div class="col-lg-4">
                                <a href=""
                                    class="gorus_component block px-4 pt-4 pb-8 bg-white mb-10 transition-shadow transition-300 text-secondary">
                                    <img src="<?= domain ?>assets/img/svg/delete_gorus_img.svg" alt="Görsel"
                                        class="block w-full aspect-square object-cover object-center mb-4">
                                    <span
                                        class="min-h-22 block text-sm font-medium leading-snug text-center flex items-center">
                                        Lorem Ipsum is simply dummy
                                        text of the printing and typesetting
                                        industry.
                                    </span>
                                </a>
                            </div>
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
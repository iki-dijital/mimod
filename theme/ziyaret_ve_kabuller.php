<?php
$js_file = 'ziyaret_ve_kabuller';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Faaliyetler</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Faaliyetler</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Ziyaret ve Kabuller</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <div class="dynamic-form mb-11.5">
                        <div class="form-wrapper py-2 pr-2 pl-5 bg-white flex justify-betwen items-center">
                            <span class="text-xl text-secondary font-bold leading-none">Ziyaret ve Kabuller</span>
                            <form action="" class="flex-1 w-full flex justify-end gap-x-10">
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
                            <div class="col-lg-4">
                                <a href=""
                                    class="gorus_component block px-2 pt-2 pb-8 bg-white mb-8 transition-shadow transition-300 text-secondary relative">
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
            <div class="col-lg-3">
                <aside class="p-2 bg-white top-0">
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
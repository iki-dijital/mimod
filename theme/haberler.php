<?php
$js_file = 'haberler';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Faaliyetler</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Haber Arşivi</a>
        </nav>
    </div>
</section>
<div class="bottom-menu hidden md:flex bg-secondary text-center justify-center py-5 mb-7.5">
</div>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-wrapper">
                    <div class="dynamic-form mb-11.5">
                        <div class="form-wrapper py-2 pr-2 pl-5 bg-white flex justify-betwen items-center">
                            <span class="text-xl text-secondary font-bold leading-none">Haberler</span>
                            <form action="" class="flex-1 w-full flex justify-end gap-x-10">
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
                            <div class="col-xl-3 col-6">
                                <a href=""
                                    class="gorus_component block px-2 pt-2 pb-8 bg-white mb-6 transition-shadow transition-300 text-secondary relative">
                                    <div
                                        class="ribbon absolute top-2 left-1/2 py-1.5 px-8 bg-white w-fit whitespace-nowrap text-secondary font-medium text-xs leading-relaxed">
                                        30 Ağustos 2023</div>
                                    <img src="<?= domain ?>assets/img/delete_etkinlik_<?= rand(1, 5) ?>.webp" alt="Görsel"
                                        class="block w-full aspect-square object-cover object-center mb-4" loading="lazy">
                                    <span
                                        class="min-h-19 block text-sm font-medium leading-snug text-center flex items-center">
                                        Çevre ve Şehircilik Bakanlığının Sığınak Yönetmeliği Uygulamaları Hakkındaki
                                        Görüşleri
                                    </span>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="pagination flex gap-x-2 mt-6">
                        <?php for ($i = 1; $i <= 7; $i++): ?>
                            <a href=""
                                class="flex bg-cream items-center justify-center w-8 h-8 p-2 text-sm text-secondary font-medium text-center leading-none transition-colors transition-300">
                                <?= $i ?>
                            </a>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
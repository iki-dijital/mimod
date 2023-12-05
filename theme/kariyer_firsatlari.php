<?php
$js_file = 'kariyer_firsatlari';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Hakkımızda</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Haber Arşivi</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Haber Başlık</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section id="home-career" class="mb-25">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 flex justify-between items-center mb-12.5">
                                <div>
                                    <h2 class="text-xl text-secondary font-bold leading-none my-0">Kariyer Fırsatları</h2>
                                    <p class="leading-snug my-0 text-secondary"></p>
                                </div>
                                <div class="all-btn flex gap-x-4.5">
                                    <a href=""
                                        class="btn bg-primary text-white text-sm font-medium rounded-sm flex items-center text-center justify-center px-4 transition-colors transition-300">İlan
                                        Ver</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs bg-primary" id="home-career-tabs" role="tablist">
                                    <?php
                                    $home_careers_tab_list = ["Personel Arayanlar", "İş Arayanlar", "Stajyer Arayanlar", "Staj Yeri Arayanlar"];
                                    for ($i = 1; $i <= 4; $i++): ?>
                                    <li class="nav-item" role="presentation">
                                            <button class="nav-link py-5 px-10 text-white cursor-pointer transition-colors transition-300 <?= $i == 1 ? 'active' : '' ?>" id="tab-<?= $i ?>"
                                                data-bs-toggle="tab" data-bs-target="#tab-<?=$i?>-content" type="button" role="tab"
                                                aria-controls="#tab-<?= $i ?>-content"
                                                aria-selected="<?= $i == 1 ? 'true' : 'false' ?>">
                                                <?= $home_careers_tab_list[$i - 1] ?>
                                            </button>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                                <div class="tab-content relative before-absolute py-5" id="home-careers-tab-content">
                                    <?php for ($i = 1; $i <= 4; $i++): ?>
                                        <div class="tab-pane <?= $i == 1 ? 'show active' : '' ?>" id="tab-<?= $i ?>-content"
                                            role="tabpanel" aria-labelledby="tab-<?= $i ?>" tabindex="0">
                                            <?php for ($j = 1; $j <= 10; $j++): ?>
                                                <div class="p-2 bg-white mb-6 px-3">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <!-- Firma adını gönder -->
                                                            <div class="img bg-primary aspect-square">
                                                                <img src="<?= domain ?>assets/img/delete_dummy_logo.webp" alt="Firma adı"
                                                                    class="block w-full h-full object-contain object-center" loading="lazy">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 flex flex-col justify-center">
                                                            <span class="font-medium text-secondary leading-tight block">LOREM İPSOM
                                                                DİZAYN</span>
                                                            <span class="font-medium text-secondary leading-tight block">KONYA</span>
                                                        </div>
                                                        <div class="col-lg-2 offset-lg-1 flex flex-col justify-center">
                                                            <span class="text-sm text-secondary leading-tight block">İlan Tarihi</span>
                                                            <!-- Tab görmek için indeksi ekledim -->
                                                            <span class="font-medium leading-tight text-secondary block">(Tab
                                                                <?= $i ?>) 05 Eylül 2023
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-2 offset-lg-2 flex items-center justify-center">
                                                            <a href=""
                                                                class="btn bg-primary text-white rounded-sm px-7 py-4 transition-colors transition-300">İlanı
                                                                İncele</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
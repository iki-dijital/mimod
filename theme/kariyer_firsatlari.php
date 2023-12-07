<?php
$js_file = 'kariyer_firsatlari';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Hakkımızda</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="
            Sayfa haritası">
            <a href=""
                class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href=""
                class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Haber
                Arşivi</a>
            <a href=""
                class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Haber
                Başlık</a>
        </nav>
    </div>
</section>
<div class="bottom-menu hidden md:flex bg-secondary text-center justify-center py-5 mb-7.5"></div>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section id="home-career" class="mb-25 md:mb-15 sm:mb-8">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-lg-12 flex sm:flex-col justify-between sm:justify-center items-center mb-12.5 md:gap-x-6 sm:mb-5 sm:gap-y-5">
                                <div class="sm:text-center">
                                    <h2 class="text-3xl md:text-xl text-secondary font-bold leading-none mt-0 mb-2">KARİYER
                                        FIRSATLARI</h2>
                                    <p class="leading-snug my-0 text-secondary">Son Eklenen İlanları ve İş ilanlarını
                                        buradan takip
                                        edebilirsiniz</p>
                                </div>
                                <div class="all-btn flex gap-x-4.5">
                                    <a href=""
                                        class="btn bg-primary text-white text-sm font-medium rounded-sm flex items-center text-center justify-center px-4 transition-colors transition-300">Tüm
                                        İlanları Gör</a>
                                    <a href=""
                                        class="btn bg-primary text-white text-sm font-medium rounded-sm flex items-center text-center justify-center px-4 transition-colors transition-300">İlan
                                        Ver</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs bg-primary md:flex sm:flex-wrap" id="home-career-tabs" role="tablist">
                                    <?php
                                    $home_careers_tab_list = ["Personel Arayanlar", "İş Arayanlar", "Stajyer Arayanlar", "Staj Yeri Arayanlar"];
                                    for ($i = 1; $i <= 4; $i++): ?>
                                    <li class="nav-item md:flex-1 sm:flex-none sm:w-1/2" role="presentation">
                                        <!-- Ana sayfadakinden farklı text-sm classı var dikkat et -->
                                            <button class="nav-link py-5 px-10 md:px-3 md:w-full text-white cursor-pointer transition-colors transition-300 md:text-sm <?= $i == 1 ? 'active' : '' ?>" id="tab-<?= $i ?>"
                                                data-bs-toggle="tab" data-bs-target="#tab-<?=$i?>-content" type="button" role="tab"
                                                aria-controls="#tab-<?= $i ?>-content"
                                                aria-selected="<?= $i == 1 ? 'true' : 'false' ?>">
                                                <?= $home_careers_tab_list[$i - 1] ?>
                                            </button>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                                <div class="tab-content relative before-absolute py-5" id="home-careers-tab-content">
                                    <?php for($i = 1; $i <= 4; $i++): ?>
                                        <div class="tab-pane <?= $i == 1 ? 'show active' : '' ?>" id="tab-<?= $i ?>-content"
                                            role="tabpanel" aria-labelledby="tab-<?= $i ?>" tabindex="0">
                                            <div class="sm:flex sm:flex-wrap">
                                                <?php for($j = 1; $j <= 10; $j++): ?>
                                                    <div
                                                        class="<?= $j % 2 == 0 ? 'sm:pl-1.5' : 'sm:pr-1.5' ?> xs:px-0 sm:w-1/2 xs:w-full">
                                                        <div class="p-2 bg-white mb-6 sm:mb-3 px-3">
                                                            <div class="row sm:gap-y-3 sm:py-3">
                                                                <div class="col-lg-2 col-md-3 sm:flex sm:justify-center">
                                                                    <!-- Firma adını gönder -->
                                                                    <div class="img bg-primary aspect-square">
                                                                        <img src="<?= domain ?>assets/img/delete_dummy_logo.webp"
                                                                            alt="Firma adı"
                                                                            class="block w-full h-full object-contain object-center"
                                                                            loading="lazy">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-3 flex flex-col justify-center sm:items-center">
                                                                    <span
                                                                        class="font-medium text-secondary leading-tight block">LOREM
                                                                        İPSOM
                                                                        DİZAYN</span>
                                                                    <span
                                                                        class="font-medium text-secondary leading-tight block">KONYA</span>
                                                                </div>
                                                                <div
                                                                    class="col-md-3 offset-lg-1 flex flex-col justify-center sm:items-center">
                                                                    <span
                                                                        class="text-sm text-secondary leading-tight block">İlan
                                                                        Tarihi</span>
                                                                    <!-- Tab görmek için indeksi ekledim -->
                                                                    <span
                                                                        class="font-medium leading-tight text-secondary block">(Tab
                                                                        <?= $i ?>) 05 Eylül 2023
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="col-lg-2 col-md-3 offset-lg-1 flex items-center justify-center">
                                                                    <a href=""
                                                                        class="btn bg-primary text-white rounded-sm px-7 py-4 transition-colors transition-300">İlanı
                                                                        İncele</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
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
<?php
$js_file = 'anlasmali_kurumlar';
include "header.php"; ?>
<section id="page-banner" class="bg-primary">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Anlaşmalı Kurumlar</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anlaşmalı Kurumlar</a>
        </nav>
    </div>
</section>
<div class="bottom-menu hidden md:flex bg-secondary text-center justify-center py-5 mb-0"></div>
<section id="page-content">
    <div class="banner-img">
        <img src="<?=domain?>assets/img/banner_img.webp" alt="Görsel başlık" class="block w-full h-full object-cover object-center mb-6">
    </div>
    <div class="container">
        <div class="row in-network-photos">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <div class="col-6">
                    <a href="<?=domain?>assets/img/anlasma_<?=rand(1,6)?>.webp" class="in-network-anchor block mb-6">
                        <img src="<?=domain?>assets/img/anlasma_<?=rand(1,6)?>.webp" alt="Görsel başlık" loading="lazy" class="block w-full h-full object-cover object-center">
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
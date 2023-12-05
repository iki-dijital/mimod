<?php
$js_file = 'ziyaretdetay';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Faaliyetler</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Faaliyetler</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Ziyaret ve
                Kabuller</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Ziyaret Başlık</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-wrapper h-full flex flex-col">
                    <!-- Slash'tan sonrasını dinamik yap -->
                    <div class="visit_date text-secondary leading-relaxed mb-6">Ziyaret / 29 Kasım 2023</div>
                    <h2 class="flex-none">Ziyaret Başlığı</h2>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 mt-14">
                <div class="photo-gallery">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="mb-6 pb-6 text-xl font-bold leading-none text-secondary mt-0">Etkinlik Foto
                                Galeri</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="masonry-grid relative w-full mb-20">
                                <div class="grid-sizer"></div>
                                <?php for ($i = 1; $i <= 20; $i++):
                                    $x = rand(1, 9);
                                    ?>
                                    <a href="<?= domain ?>assets/img/gallery_<?= $x ?>.webp"
                                        class="glightbox grid_item block mb-6">
                                        <img src="<?= domain ?>assets/img/gallery_<?= $x ?>.webp" alt="Görsel başlık"
                                            class="block w-full">
                                    </a>
                                <?php endfor; ?>
                            </div>
                            <div class="flex justify-center w-full">
                                <a href=""
                                    class="all_events min-h-15 px-7.5 py-4 inline-flex items-center justify-center text-center font-medium leading-none text-secondary bg-cream transition-colors transition-300">Bütün Ziyaret ve Kabuller</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
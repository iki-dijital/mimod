<?php
$js_file = 'etkinlikdetay';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Faaliyetler</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="
            Sayfa haritası">
            <a href=""
                class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href=""
                class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Faaliyetler</a>
            <a href=""
                class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Etkinlikler</a>
            <a href=""
                class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Etkinlik
                Adı</a>
        </nav>
    </div>
</section>
<div class="bottom-menu hidden md:flex bg-secondary text-center justify-center py-5 mb-7.5"></div>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 md:order-2">
                <div class="content-wrapper h-full flex flex-col md:pt-10">
                    <h2 class="flex-none">Etkinliğin Adı</h2>
                    <div class="flex flex-col flex-1">
                        <div class="event-details flex flex-col gap-y-4 md:gap-y-2 mt-17 md:mt-3 md:mb-10">
                            <div class="flex items-center gap-x-3.5">
                                <div class="flex-none flex items-center justify-center w-7 h-7">
                                    <?= getSprite("event_detail_date", "w-7 h-7") ?>
                                </div>
                                <p>29 Kasım 2023</p>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <div class="flex-none flex items-center justify-center w-7 h-7">
                                    <?= getSprite("event_detail_time", "w-7 h-7") ?>
                                </div>
                                <p>14:30</p>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <div class="flex-none flex items-center justify-center w-7 h-7">
                                    <?= getSprite("event_detail_location", "w-7 h-7") ?>
                                </div>
                                <p>No15 Mimar Evi</p>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <div class="flex-none flex items-center justify-center w-7 h-7">
                                    <?= getSprite("event_detail_moderator", "w-7 h-7") ?>
                                </div>
                                <p>Moderatör Adı Soyadı</p>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <div class="flex-none flex items-center justify-center w-7 h-7">
                                    <?= getSprite("event_detail_debater", "w-7 h-7") ?>
                                </div>
                                <p>Konuşmacı Adı Soyadı, Konuşmacı Adı Soyadı, Konuşmacı Adı Soyadı,</p>
                            </div>
                        </div>
                        <div class="event-sponsors flex items-center gap-x-10 mt-auto">
                            <a href="" class="block">
                                <img src="<?= domain ?>assets/img/svg/event_kmf.svg" alt="KMF" class="block h-7">
                            </a>
                            <a href="" class="block">
                                <img src="<?= domain ?>assets/img/svg/event_arkademi.svg" alt="KMF" class="block h-7">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 md:order-1">
                <div class="img w-full aspect-square overflow-hidden">
                    <img src="<?= domain ?>assets/img/delete_etkinlik_<?= rand(1, 5) ?>.webp" alt="Etkinlik başlık"
                        class="w-full h-full object-cover object-center block">
                </div>
            </div>
            <div class="col-lg-12 mt-11.5 md:order-3">
                <div class="content-wrapper mb-9">
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin
                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                        literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
                        1.10.33
                        of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                        This
                        book is a treatise on the theory of ethics, very popular during the Renaissance. The first line
                        of
                        Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                </div>
                <div class="video-gallery mt-20.5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="mb-6 pb-6 text-xl font-bold leading-none text-secondary mt-0">Etkinlik Video
                                Galeri</h2>
                        </div>
                        <div class="col-lg-4 col-6">
                            <a href="https://www.youtube.com/watch?v=DQmFFcAeD7E"
                                class="glightbox bg-secondary relative md:mb-6 block">
                                <div
                                    class="overlay flex items-center justify-center absolute top-0 left-0 w-full h-full z-2">
                                    <img src="<?= domain ?>assets/img/svg/play_icon.svg" alt="Oynat" loading="lazy"
                                        class="w-7 block">
                                </div>
                                <img src="<?= domain ?>assets/img/gallery_1.webp" alt="Video başlık"
                                    class="block w-full h-full object-cover object-center">
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <a href="https://www.youtube.com/watch?v=DQmFFcAeD7E"
                                class="glightbox bg-secondary relative md:mb-6 block">
                                <div
                                    class="overlay flex items-center justify-center absolute top-0 left-0 w-full h-full z-2">
                                    <img src="<?= domain ?>assets/img/svg/play_icon.svg" alt="Oynat" loading="lazy"
                                        class="w-7 block">
                                </div>
                                <img src="<?= domain ?>assets/img/gallery_1.webp" alt="Video başlık"
                                    class="block w-full h-full object-cover object-center">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="photo-gallery mt-20.5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="mb-6 pb-6 text-xl font-bold leading-none text-secondary mt-0">Etkinlik Foto
                                Galeri</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="masonry-grid relative w-full mb-20 md:mb-6">
                                <div class="grid-sizer"></div>
                                <?php for($i = 1; $i <= 20; $i++):
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
                                    class="all_events min-h-15 px-7.5 py-4 inline-flex items-center justify-center text-center font-medium leading-none text-secondary bg-cream transition-colors transition-300">Bütün
                                    Etkinlikler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
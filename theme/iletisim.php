<?php
$js_file = 'iletisim';
include "header.php"; ?>
<section id="page-banner" class="bg-primary">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">İletişim</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">İletişim</a>
        </nav>
    </div>
</section>
<section id="contact-content">
    <div class="container">
        <div class="row mb-6">
            <div class="col-lg-5 py-23 md:py-10">
                <div
                    class="black_info bg-secondary relative after-absolute flex flex-col justify-center items-start pl-8 py-5 md:py-10 md:px-3 h-full">
                    <img src="<?= domain ?>assets/img/svg/logo_white.svg" alt="TMMOB Mimarlar Odası Konya Şubesi"
                        class="block mb-10 h-15">
                    <div class="flex flex-col gap-y-4 md:gap-y-3">
                        <div class="flex items-center gap-x-4">
                            <div class="flex-none w-6 h-5 flex items-center justify-center">
                                <?= getSprite("agency_map", "fill-light w-5 h-5") ?>
                            </div>
                            <p class="text-white leading-snug my-0">Atatürk Cad. No. 15 42040 Meram / Konya</p>
                        </div>
                        <div class="flex items-center gap-x-4">
                            <div class="flex-none w-6 h-5 flex items-center justify-center">
                                <?= getSprite("agency_phone", "fill-light w-5 h-5") ?>
                            </div>
                            <p class="text-white leading-snug my-0">0332 353 47 17</p>
                        </div>
                        <div class="flex items-center gap-x-4">
                            <div class="flex-none w-6 h-5 flex items-center justify-center">
                                <?= getSprite("agency_fax", "fill-light w-5 h-5") ?>
                            </div>
                            <p class="text-white leading-snug my-0">0332 353 41 61</p>
                        </div>
                        <div class="flex items-center gap-x-4">
                            <div class="flex-none w-6 h-5 flex items-center justify-center">
                                <?= getSprite("agency_mail", "fill-light w-5 h-5") ?>
                            </div>
                            <p class="text-white leading-snug my-0">konya@mimarlarodasi.org.tr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="bg-cream py-23">
                    <div class="w-5/7 md:w-full md:px-3 mx-auto">
                        <form action="" class="contact_page_form">
                            <span class="block text-secondary text-xl font-bold leading-none mb-6">İletişim Formu</span>
                            <label for="name" class="block w-full mb-6">
                                <input class="bg-white p-3 border-none text-sm leading-none text-secondary w-full"
                                    type="text" name="name" id="name" placeholder="Adınız / Soyadınız" required>
                            </label>
                            <label for="mail" class="block w-full mb-6">
                                <input class="bg-white p-3 border-none text-sm leading-none text-secondary w-full"
                                    type="email" name="mail" id="mail" placeholder="E-Posta Adresiniz" required>
                            </label>
                            <label for="phone" class="block w-full mb-6">
                                <input class="bg-white p-3 border-none text-sm leading-none text-secondary w-full"
                                    type="tel" name="phone" id="phone" placeholder="Telefon Numaranız">
                            </label>
                            <label for="message" class="block w-full mb-6">
                                <textarea class="bg-white p-3 border-none text-sm leading-none text-secondary w-full"
                                    name="message" id="message" placeholder="Mesajınız"></textarea>
                            </label>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="text-white font-semibold text-center flex items-center justify-center px-17 py-3 transition-300 transition-colors border-none cursor-pointer">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="map" class="mb-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1113.5360771292333!2d32.488157611868445!3d37.87068641291953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d085a964c52d8d%3A0xfea7d58bf63bc01a!2sMimarlar%20Odasi!5e0!3m2!1sen!2str!4v1701801165909!5m2!1sen!2str"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row mb-21">
            <div class="col-lg-12">
                <h2 class="text-secondary text-xl font-bold leading-none mt-0 mb-6">Temsilcilikler</h2>
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class="agency_item bg-cream flex md:flex-col md:gap-y-5 justify-between items-center pt-6 pl-4 pb-9 md:pb-6 mb-6">
                        <div>
                            <h3 class="font-bold leading-none text-secondary mt-0 mb-4.5">Afyonkarahisar Temsilciliği</h3>
                            <div class="flex flex-col gap-y-2">
                                <div class="flex items-center gap-x-4">
                                    <div class="flex-none w-5 h-4 flex items-center justify-center">
                                        <?= getSprite("agency_map", "fill-secondary w-4 h-4") ?>
                                    </div>
                                    <p class="text-secondary leading-tight my-0">Atatürk Cad. No. 15 42040 Meram / Konya</p>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div class="flex-none w-5 h-4 flex items-center justify-center">
                                        <?= getSprite("agency_phone", "fill-secondary w-4 h-4") ?>
                                    </div>
                                    <p class="text-secondary leading-tight my-0">0332 353 47 17</p>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div class="flex-none w-5 h-4 flex items-center justify-center">
                                        <?= getSprite("agency_fax", "fill-secondary w-4 h-4") ?>
                                    </div>
                                    <p class="text-secondary leading-tight my-0">0332 353 41 61</p>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div class="flex-none w-5 h-4 flex items-center justify-center">
                                        <?= getSprite("agency_mail", "fill-secondary w-4 h-4") ?>
                                    </div>
                                    <p class="text-secondary leading-tight my-0">konya@mimarlarodasi.org.tr</p>
                                </div>
                            </div>
                        </div>
                        <div class="social flex items-center gap-x-6.5">
                            <a href="" class="w-6 h-6 flex items-center jutify-center" target="_blank">
                                <?= getSprite("linkedin", "fill-dark w-6 h-6 tranisiton-colors transition-300") ?>
                            </a>
                            <a href="" class="w-6 h-6 flex items-center jutify-center" target="_blank">
                                <?= getSprite("instagram", "fill-dark w-6 h-6 tranisiton-colors transition-300") ?>
                            </a>
                            <a href="" class="w-6 h-6 flex items-center jutify-center" target="_blank">
                                <?= getSprite("twitter_x", "fill-dark w-6 h-6 tranisiton-colors transition-300") ?>
                            </a>
                            <a href="" class="w-6 h-6 flex items-center jutify-center" target="_blank">
                                <?= getSprite("facebook", "fill-dark w-6 h-6 tranisiton-colors transition-300") ?>
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
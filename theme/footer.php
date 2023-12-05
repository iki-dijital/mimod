<footer class="relative before-absolute bg-secondary py-14">
    <img src="<?= domain ?>assets/img/svg/footer_pattern.svg" alt="Footer"
        class="absolute bottom-0 left-0 w-full h-full z-0 object-cover object-center">
    <div class="container relative z-1">
        <div class="row">
            <div class="footer-left col-lg-4 pt-19.5 pb-16.5 bg-primary relative after-absolute before-absolute">
                <a href="" class="block logo mb-7">
                    <img src="<?= domain ?>assets/img/svg/logo_white.svg" alt="TMMOB Mimarlar Odası Konya Şubesi">
                </a>
                <p class="text-white text-sm mt-0 mb-2">&copy; 2023 &bull; TMMOB MİAMARLAR ODASI KONYA ŞUBESİ</p>
                <p class="text-white text-xs leading-none mt-0 mb-15">Tüm Hakları Saklıdır.</p>
                <div class="flex flex-wrap gap-y-2.5 mb-14">
                    <div class="flex items-center gap-x-1.5 w-full">
                        <div class="flex items-center justify-center w-4 h-4">
                            <?= getSprite("contact_map", "fill-secondary w-full h-full") ?>
                        </div>
                        <address class="text-white text-sm leading-tight">Sahipata Mh. Atatürk Cd. No:15 Meram/Konya
                        </address>

                    </div>
                    <div class="flex items-center gap-x-1.5 w-5/11 pr-9.5">
                        <div class="flex items-center justify-center w-4 aspect-square">
                            <?= getSprite("contact_phone", "fill-secondary w-full h-full") ?>
                        </div>
                        <a href="tel:+903323534717" class="text-white text-sm leading-tight">+90 332 353 47 17</a>

                    </div>
                    <div class="flex items-center gap-x-1.5 w-5/11">
                        <div class="flex items-center justify-center w-4 aspect-square">
                            <?= getSprite("contact_fax", "fill-secondary w-full h-full") ?>
                        </div>
                        <p class="text-white text-sm leading-tight my-0">+90 332 353 41 61</p>
                    </div>
                    <div class="flex items-center gap-x-1.5 w-5/11 pr-9.5">
                        <div class="flex items-center justify-center w-4 aspect-square">
                            <?= getSprite("contact_mail", "fill-secondary w-full h-full") ?>
                        </div>
                        <a href="mailto:konya@mo.org.tr" class="text-white text-sm leading-tight">konya@mo.org.tr</a>
                    </div>
                    <div class="flex items-center gap-x-1.5 w-5/11">
                        <div class="flex items-center justify-center w-4 aspect-square">
                            <?= getSprite("contact_hour", "fill-secondary w-full h-full") ?>
                        </div>
                        <p class="text-white text-sm leading-tight my-0">Hafta için 10:00 - 17:00</p>
                    </div>
                </div>
                <form action="" class="mb-15">
                    <span class="text-xl text-white leading-none block mb-1">İlk Bilen <strong class="font-bold">Siz
                            Olun</strong></span>
                    <p class="text-white mt-0 leading-normal mb-2">Bültenimize kayıt olun; yenilik, gelişme ve
                        fırsatlardan ilk siz haberdar olun.</p>
                    <div class="flex w-full">
                        <label for="newsletter" class="block h-full flex-1">
                            <input type="email" name="newsletter" id="newsletter" placeholder="E-Posta Adresiniz"
                                class="w-full border-none text-sm leading-none text-dark h-full px-3">
                        </label>
                        <button
                            class="btn cursor-pointer border-none transition-colors transition-300 bg-secondary text-white justify-center flex-none px-6">Gönder</button>
                    </div>
                </form>
                <div class="social flex items-center gap-x-13">
                    <a href="" class="w-7 h-7 flex items-center jutify-center" target="_blank">
                        <?= getSprite("linkedin", "fill-secondary w-7 h-7 tranisiton-colors transition-300") ?>
                    </a>
                    <a href="" class="w-7 h-7 flex items-center jutify-center" target="_blank">
                        <?= getSprite("instagram", "fill-secondary w-7 h-7 tranisiton-colors transition-300") ?>
                    </a>
                    <a href="" class="w-7 h-7 flex items-center jutify-center" target="_blank">
                        <?= getSprite("youtube", "fill-secondary w-7 h-7 tranisiton-colors transition-300") ?>
                    </a>
                    <a href="" class="w-7 h-7 flex items-center jutify-center" target="_blank">
                        <?= getSprite("twitter_x", "fill-secondary w-7 h-7 tranisiton-colors transition-300") ?>
                    </a>
                    <a href="" class="w-7 h-7 flex items-center jutify-center" target="_blank">
                        <?= getSprite("facebook", "fill-secondary w-7 h-7 tranisiton-colors transition-300") ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-2">
                <div class="navlist mb-2">
                    <span class="font-bold leading-none text-dark block mb-2">HAKKIMIZDA</span>
                    <!-- Menüden önceki kelimeyi değiştir -->
                    <ul aria-label="Hakkımızda menü">
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Kuruluş ve Amaç
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Şube Yönetim Kurulu
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Kütüphane
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Çalışma Raporu
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navlist mb-2">
                    <span class="font-bold leading-none text-dark block mb-2">ORGANLAR</span>
                    <!-- Menüden önceki kelimeyi değiştir -->
                    <ul aria-label="Organlar menü">
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Denetleme Kurulu
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Soruşturma ve Uzlaşma Kurulu
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Oda Genel Kurul Delegeleri
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Komit, Komisyon ve Kulüpler
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navlist mb-2">
                    <span class="font-bold leading-none text-dark block mb-2">MESLEKİ DENETİM</span>
                    <!-- Menüden önceki kelimeyi değiştir -->
                    <ul aria-label="Mesleki Denetim menü">
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Belgeler
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                En Az Bedel Hesabı
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Yapı Birim Maliyetleri
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Mimari Çizim Standartları
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Sürekli Mesleki Gelişim
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navlist mb-2">
                    <span class="font-bold leading-none text-dark block mb-2">ÜYELİK</span>
                    <!-- Menüden önceki kelimeyi değiştir -->
                    <ul aria-label="Üyelik menü">
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Kayıt Koşulları
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Ödenti ve Belgeler
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Büro Tescil
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Öğrenci Üyelik
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Sürekli Mesleki Gelişim
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="navlist mb-2">
                    <span class="font-bold leading-none text-dark block mb-2">YAYINLAR</span>
                    <!-- Menüden önceki kelimeyi değiştir -->
                    <ul aria-label="Yayınlar menü">
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Mimaran
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Bültenler
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Raporlar
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navlist mb-2">
                    <span class="font-bold leading-none text-dark block mb-2">MEVZUAT</span>
                    <!-- Menüden önceki kelimeyi değiştir -->
                    <ul aria-label="Mevzuat menü">
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Mimarlar Odası Mevzuatı
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Bakanlık Görüşleri
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Kanunlar
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Yönetmelikler
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Plan Notları
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Sözleşmeler
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navlist mb-16">
                    <span class="font-bold leading-none text-dark block mb-2">FAALİYETLR</span>
                    <!-- Menüden önceki kelimeyi değiştir -->
                    <ul aria-label="Faaliyetler menü">
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Basında Biz
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Etkinlikler
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 block text-white relative before-absolute leading-tight">
                                Ziyaret ve Kabuller
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="" class="single leading-none text-white font-bold mb-4 block relative before-absolute">HABER ARŞİVİ</a>
                <a href="" class="single leading-none text-white font-bold mb-4 block relative before-absolute">İLETİŞİM</a>
            </div>
        </div>
    </div>
</footer>
<script
    src="<?= domain ?>assets/js/<?= $js_file ? $js_file : 'main' ?>.js<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>"
    type="module"></script>
</body>

</html>
<?php
$js_file = 'kayit_kosullari';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Üyelik</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Üyelik</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Kayıt Koşulları</a>
        </nav>
    </div>
</section>
<div class="bottom-menu hidden md:flex bg-secondary text-center justify-center py-5 mb-7.5">
    <div id="page-menu-button" class="flex justify-center items-center gap-x-4">
        <div class="text-lg text-light font-medium">Sayfa Menü</div>
        <div class="w-10 h-5 flex flex-col justify-between" id="page-menu-button">
            <span class="w-full h-1 rounded bg-light block"></span>
            <span class="w-full h-1 rounded bg-light block"></span>
            <span class="w-full h-1 rounded bg-light block"></span>
        </div>
    </div>
</div>
<div id="page-menu" class="hidden md:block fixed pb-4 w-4/5 h-full top-0 bg-white z-4 overflow-scroll cursor-pointer">
    <div id="page-menu-close" class="absolute z-2 pointer-events-auto right-5 w-10 h-10 xs:w-7 xs:h-7">
        <svg class="cursor-pointer transition-300 transition-colors w-full h-full"
            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </div>
</div>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="content-wrapper">
                    <h2>Kayıt Koşulları</h2>
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <h3>Yeni Kayıt İçin Gerekli Evraklar</h3>
                        <p>
                            <strong>
                                1) Türkiye Cumhuriyeti’nde bulunan Üniversitelerin Mimarlık ve Endüstri Ürünleri Tasarımı
                                Bölümlerinden mezun olanların Üye kayıt başvurularında;
                            </strong>
                        </p>
                        <ul>
                            <li>
                                <p>
                                    3 Adet Vesikalık Fotoğraf
                                </p>
                            </li>
                            <li>
                                <p>
                                    Diploma aslı bulundurmak kaydı ile 2 Adet noter tasdikli diploma fotokopisi ya da mezun
                                    oldukları okuldan alınan “Aslı Gibidir” onaylı 2 adet ıslak imzalı ‘Geçici Mezuniyet
                                    Belgesi’ (e-devletten alınan belge kabul edilmemektedir!)
                                </p>
                            </li>
                            <li>
                                <p>
                                    Nüfus Cüzdanı Aslı ve 2 Adet Fotokopisi
                                </p>
                            </li>
                            <li>
                                <p>
                                    İkametgah
                                </p>
                            </li>
                            <li>
                                <p>
                                    Mezuniyet Tarihi İtibariyle Aidat (son beş yıl x 960 TL.) (5 yıldan önceki borçlar
                                    ilgili yılın aidat miktarı üzerinden hesaplanır)
                                </p>
                            </li>
                            <li>
                                <p>
                                    Kayıt ücreti: 2023 yılı için : 200 TL.
                                </p>
                            </li>
                            <li>
                                <p>
                                    (Yönetmelik gereği sadece ilk kayıt işlemine esas olmak üzere mezuniyet tarihi ile Odaya
                                    kayıt olunan tarih arasında mimarlık mesleğini yapmadığını belgelediği takdirde
                                    aidatları düşülmektedir. Bu düşümler mezunların E-Devlet üzerinden SGK sistemindeki
                                    verileri esas alınarak hesaplandığından, başvuru esnasında E-DEVLET’ten alınan 4A
                                    DETAYLI HİZMET DÖKÜMÜ’ne sahip olunması gerekmektedir.)
                                </p>
                            </li>
                        </ul>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <aside class="sticky md:hidden p-2 bg-white top-0">
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">HAKKIMIZDA</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="active text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kuruluş
                                    ve Amaç</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Şube
                                    Yönetim Kurulu</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kütüphane</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Çalışma
                                    Raporları</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">ORGANLAR</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Denetleme
                                    Kurulu</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Soruşturma
                                    ve Uzlaştırma Kurlu</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Oda
                                    Genel Kurul Delegeleri</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Komite,
                                    Komisyon ve Kulüpler</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">MESLEKİ
                            DENETİM</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Belgeler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">En Az
                                    Bedel Hesabı</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Yapı
                                    Birim Maliyetleri</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Mimari
                                    Çizim Standartları</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">ÜYELİK</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kayıt
                                    Koşulları</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Ödenti
                                    ve Belgeler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Büro
                                    Tescil</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Öğrenci
                                    Üyelik</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3">YAYINLAR</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Mimaran</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Bültenler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Raporlar</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
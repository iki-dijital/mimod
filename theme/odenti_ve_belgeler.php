<?php
$js_file = 'odenti_ve_belgeler';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Üyelik</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Üyelik</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Ödenti ve Belgeler</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <h2>Ödenti ve Belgeler</h2>
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
            <div class="col-lg-3">
                <aside class="p-2 bg-white">
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
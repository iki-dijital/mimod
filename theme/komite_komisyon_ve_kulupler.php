<?php
$js_file = 'oda_genel_kurul_delegeleri';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Organlar</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Organlar</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Komite, Komisyon ve
                Kulüpler</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <h2>Komite, Komisyon ve Kulüpler </h2>
                    <div class="committee-form mb-6 mt-7 py-7.5 pl-5 pr-11 flex items-center justify-between gap-x-5">
                        <span class="text-secondary text-xl font-bold leading-tight">Komite, Komisyon ve Kulüp Başvuru
                            Formu için Tıklayınız.</span>
                        <a href=""
                            class="flex items-center bg-primary text-light text-sm text-white font-semibold leading-none min-h-15 px-11 py-4 transition-colors transition-300">Başvuru
                            Formu</a>
                    </div>
                    <div
                        class="delegates-list-heading min-h-15 py-2.5 px-5 bg-primary text-light font-semibold text-xl leading-tight mb-0.5 flex items-center">
                        Kentsel Dönüşüm ve Planlama Komisyonu
                    </div>
                    <div class="row mb-2.5 pb-5">
                        <?php for ($i = 1; $i <= 45; $i++): ?>
                            <div class="col-lg-4">
                                <div class="delegates-member py-3 text-secondary leading-tight px-5">Adı Soyadı
                                    <?= $i ?>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>

                    <div
                        class="delegates-list-heading min-h-15 py-2.5 px-5 bg-primary text-white font-semibold text-xl leading-tight mb-0.5 flex items-center">
                        Kentsel Dönüşüm ve Planlama Komisyonu
                    </div>
                    <div class="row mb-2.5 pb-5">
                        <?php for ($i = 1; $i <= 41; $i++): ?>
                            <div class="col-lg-4">
                                <div class="delegates-member py-3 text-secondary leading-tight px-5">Adı Soyadı
                                    <?= $i ?>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="p-2 bg-white top-0">
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">HAKKIMIZDA</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Kuruluş
                                    ve Amaç</a>
                            </li>
                            <li>
                                <a href=""
                                    class="active text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Şube
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">ORGANLAR</span>
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">MESLEKİ
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">ÜYELİK</span>
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
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">YAYINLAR</span>
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
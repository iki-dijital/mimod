<?php
$js_file = 'sube_yonetim_kurulu';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Hakkımızda</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Hakkımızda</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Şube Yönetim
                Kurulu</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <h2>Şube Yönetim Kurulu</h2>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur.
                    </p>
                    <div
                        class="open-accordion-title bg-primary text-light font-semibold min-h-15 py-3 flex items-center pl-5 text-xl leading-normal">
                        18. Dönem Yönetim Kurulu</div>
                    <div class="open-accordion-content pt-6 pb-7.5">
                        <div class="row">
                            <?php for ($i = 1; $i <= 13; $i++): ?>
                                <div class="col-lg-3 <?= $i == 1 ? 'first-member' : '' ?>">
                                    <div class="board-member mb-7.5">
                                        <div class="img mb-3">
                                            <img src="<?= domain ?>assets/img/svg/member_<?= rand(1, 2) % 2 == 0 ? 'male' : 'female' ?>.svg"
                                                alt="Üye görseli" class="block w-full h-full object-contain object-bottom" loading="lazy">
                                        </div>
                                        <div class="info">
                                            <h3 class="text-secondary font-medium text-base leading-tight mt-0 mb-0.5">İsim
                                                Soyisim</h3>
                                            <span class="text-dark text-sm leading-tight"><?=$i == 1 ? 'Başkan' : 'Yönetim Kurulu Üyesi' ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="accordion" id="templateAccordion">
                        <?php for ($i = 1; $i < 18; $i++): ?>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header my-0">
                                    <button
                                        class="accordion-button min-h-15 py-3 text-xl leading-normal font-semibold cursor-pointer collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $i ?>"
                                        aria-expanded="false"
                                        aria-controls="collapse-<?= $i ?>">
                                        <?= 18 - $i ?>. Dönem Yönetim Kurulu
                                    </button>
                                </h2>
                                <div id="collapse-<?= $i ?>"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#templateAccordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <?php for ($j = 1; $j <= 13; $j++): ?>
                                                <div class="col-lg-3 <?= $j == 1 ? 'first-member' : '' ?>">
                                                    <div class="board-member mb-7.5">
                                                        <div class="img mb-3">
                                                            <img src="<?= domain ?>assets/img/svg/member_<?= rand(1, 2) % 2 == 0 ? 'male' : 'female' ?>.svg"
                                                                alt="Üye görseli"
                                                                class="block w-full h-full object-contain object-bottom" loading="lazy">
                                                        </div>
                                                        <div class="info">
                                                            <h3
                                                                class="text-secondary font-medium text-base leading-tight mt-0 mb-0.5">
                                                                İsim
                                                                Soyisim</h3>
                                                            <span class="text-dark text-sm leading-tight"><?=$j == 1 ? 'Başkan' : 'Yönetim Kurulu Üyesi'?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
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
<?php
$js_file = 'index';
include "header.php";
?>
<main>
    <section id="home-banner" class="relative z-1 mb-19">
        <div class="fade-slide-container relative before-absolute" id="banner-fade">
            <div class="slide-wrapper relative z-1">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="slide-item <?= $i == 1 ? 'active ' : '' ?>">
                        <div class="relative">
                            <div class="bg bg-primary absolute top-0 left-0 w-full h-9/10"></div>
                            <div class="container pt-2 relative z-2">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="content flex flex-col justify-center items-start h-full pb-3.5 gap-y-9">
                                            <h2
                                                class="text-secondary text-3xl font-bold leading-snug my-0 opacity-0 transition-500">
                                                <?= $i ?> OTOPARK YÖNETMELİĞİNDE DEĞİŞİKLİK YAPILMASINA DAİR YÖNETMELİK
                                            </h2>
                                            <p class="text-white text-xl leading-snug opacity-0 transition-500">
                                                Çevre, Şehircilik ve İklim Değişikliği Bakanlığı tarafından Otopark
                                                Değişiklik
                                                Yapılmasına Dair Yönetmelik 12 Ağustos 2023 tarihli, 32277 sayılı Resmi
                                                Gazete’de yayımlandı.
                                            </p>
                                            <a href=""
                                                class="btn bg-secondary px-8 text-white rounded-sm opacity-0 transition-500">İncele</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="img aspect-square w-full">
                                            <img src="<?= domain ?>assets/img/delete_slide_img_<?= $i % 2 + 1 ?>.webp"
                                                alt="Slayt başlık" class="block w-full h-full object-cover object-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="slide-nav flex items-end">
                <div class="container pb-4.5 flex gap-x-2.5 items-center">
                    <div class="prev">
                        <?= getSprite("triangle_right", "transition-color transition-300 w-5") ?>
                    </div>
                    <div class="next">
                        <?= getSprite("triangle_right", "transition-color transition-300 w-5") ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-quicklinks" class="mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href=""
                        class="quicklink block h-full relative before-absolute flex items-center py-6.5 rounded-sm text-white bg-primary overflow-hidden"
                        target="_blank">
                        <span class="icon relative z-1 flex items-center justify-center">
                            <img src="<?= domain ?>assets/img/svg/quick_en_az_bedel.svg" alt="En az bedel hesabı"
                                class="block h-15 object-center object-contain" loading="lazy">
                        </span>
                        <span
                            class="text relative z-1 font-medium text-lg flex items-center justify-center text-center">
                            En Az Bedel Hesabı
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href=""
                        class="quicklink block h-full relative before-absolute flex items-center py-6.5 rounded-sm text-white bg-primary overflow-hidden">
                        <span class="icon relative z-1 flex items-center justify-center">
                            <img src="<?= domain ?>assets/img/svg/quick_mesleki_denetim.svg" alt="Mesleki denetim"
                                class="block h-15 object-center object-contain" loading="lazy">
                        </span>
                        <span
                            class="text relative z-1 font-medium text-lg flex items-center justify-center text-center">
                            Mesleki Denetim
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href=""
                        class="quicklink block h-full relative before-absolute flex items-center py-6.5 rounded-sm text-white bg-primary overflow-hidden">
                        <span class="icon relative z-1 flex items-center justify-center">
                            <img src="<?= domain ?>assets/img/svg/quick_plan_notlari.svg" alt="Plan notları"
                                class="block h-15 object-center object-contain" loading="lazy">
                        </span>
                        <span
                            class="text relative z-1 font-medium text-lg flex items-center justify-center text-center">
                            Plan Notları
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="home-organisations" class="mb-22.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="org_link relative before-absolute pt-5.5 px-6.5">
                        <img src="<?= domain ?>assets/img/svg/organisation_mimaran.svg" alt="Mimaran logo"
                            class="block mb-5 h-9 w-full object-center object-contain relative z-1">
                        <div class="black_box relative before-absolute pb-25 pt-9 px-5 rounded-sm bg-secondary">
                            <p class="my-0 text-white leading-snug text-center relative z-1">Aradığınız kitapları
                                Mimarlar Odası Konya Şubesi kütüphanesi data bankasından sorgulayabilirsiniz.</p>
                            <a href=""
                                class="btn absolute bottom-5 bg-primary text-white px-11.5 left-1/2 z-1">İncele</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="org_link relative before-absolute pt-5.5 px-6.5">
                        <img src="<?= domain ?>assets/img/svg/organisation_kmf.svg" alt="Konya Mimarlık Festivali logo"
                            class="block mb-5 h-9 w-full object-center object-contain relative z-1">
                        <div class="black_box relative before-absolute pb-25 pt-9 px-5 rounded-sm bg-secondary">
                            <p class="my-0 text-white leading-snug text-center relative z-1">Aradığınız kitapları
                                Mimarlar Odası Konya Şubesi kütüphanesi data bankasından sorgulayabilirsiniz.</p>
                            <a href=""
                                class="btn absolute bottom-5 bg-primary text-white px-11.5 left-1/2 z-1">İncele</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="org_link relative before-absolute pt-5.5 px-6.5">
                        <img src="<?= domain ?>assets/img/svg/organisation_arkademi.svg" alt="Arkademi logo"
                            class="block mb-5 h-9 w-full object-center object-contain relative z-1">
                        <div class="black_box relative before-absolute pb-25 pt-9 px-5 rounded-sm bg-secondary">
                            <p class="my-0 text-white leading-snug text-center relative z-1">Aradığınız kitapları
                                Mimarlar Odası Konya Şubesi kütüphanesi data bankasından sorgulayabilirsiniz.</p>
                            <a href=""
                                class="btn absolute bottom-5 bg-primary text-white px-11.5 left-1/2 z-1">İncele</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-papers" class="relative before-absolute">
        <div class="container relative z-1">
            <div class="row">
                <div class="col-lg-12 flex justify-between items-center mb-7">
                    <h2 class="text-secondary text-3xl font-bold leading-none my-0">YAYINLAR</h2>
                    <div class="paper-nav flex items-center justify-end gap-x-2.5">
                        <button class="prev bg-transparent border-none cursor-pointer p-0" aria-label="Önceki yayın">
                            <?= getSprite("triangle_right", "transition-color transition-300 fill-dark w-5") ?>
                        </button>
                        <button class="next bg-transparent border-none cursor-pointer p-0" aria-label="Sonraki yayın">
                            <?= getSprite("triangle_right", "transition-color transition-300 fill-dark w-5") ?>
                        </button>
                    </div>
                </div>
                <div class="col-lg-12 mb-15">
                    <div class="blaze-slider" id="home-papers-blaze">
                        <div class="blaze-container">
                            <div class="blaze-track-container">
                                <div class="blaze-track">
                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                        <div>
                                            <a href="" class="mimaran_cover block p-4 bg-white transition-300 transition-shadow">
                                                <div class="img border border-solid border-dark pt-4 pb-5 px-12 flex flex-col justify-end">
                                                    <!-- Alt etiketi güncelle -->
                                                    <img src="<?= domain ?>assets/img/delete_mimaran_<?= $i % 5 + 1 ?>.webp"
                                                        alt="Mimaran 13.sayı"
                                                        class="block w-full object-contain object-center mb-4.5"
                                                        loading="lazy">
                                                    <span
                                                        class="title text-secondary font-semibold text-lg leading-tight block w-full text-center">
                                                        Mimaran
                                                    </span>
                                                    <span
                                                        class="edition text-sm text-secondary leading-tight block w-full text-center">
                                                        <?= rand(1, 15) ?>. Sayı
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 flex justify-between items-center mb-20">
                    <h2 class="text-light text-3xl font-bold leading-none my-0">ETKİNLİK TAKVİMİ</h2>
                    <div class="events-nav flex items-center justify-end gap-x-2.5">
                        <button class="prev bg-transparent border-none cursor-pointer p-0" aria-label="Önceki yayın">
                            <?= getSprite("triangle_right", "transition-opacity transition-300 fill-light w-5") ?>
                        </button>
                        <button class="next bg-transparent border-none cursor-pointer p-0" aria-label="Sonraki yayın">
                            <?= getSprite("triangle_right", "transition-opacity transition-300 fill-light w-5") ?>
                        </button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="blaze-slider" id="home-events-blaze">
                        <div class="blaze-container">
                            <div class="blaze-track-container pb-2.5">
                                <div class="blaze-track">
                                    <?php for ($i = 1; $i <= 20; $i++): ?>
                                        <a href="" class="flex flex-col gap-y-2.5 relative after-absolute pb-7.5">
                                            <div class="title text-white font-bold text-sm leading-snug transition-colors transition-300">
                                                MİMARİ PROJE SÜRECİNDE YANGIN EMNİYET ÖNLEMLERİ
                                            </div>
                                            <div class="location flex items-center gap-x-2.5">
                                                <span class="icon w-6">
                                                    <?= getSprite("event_location", "fill-white w-4 h-7 transition-colors transition-300") ?>
                                                </span>
                                                <span class="flex-1 text-xs leading-relaxed text-white transition-colors transition-300">Mimar Evi No:
                                                    15</span>
                                            </div>
                                            <div class="location flex items-center gap-x-2.5 transition-colors transition-300">
                                                <span class="icon w-6 flex-none">
                                                    <?= getSprite("event_calendar", "fill-white w-5 h-5 transition-colors transition-300") ?>
                                                </span>
                                                <span class="flex-1 text-xs leading-relaxed text-white transition-colors transition-300">
                                                    11 Ağustos 2023 <br>
                                                    Saat: 18.30
                                                </span>
                                            </div>
                                        </a>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= domain ?>assets/img/svg/main_papers_bg.svg" alt="Yayınlar"
            class="absolute z-0 left-0 w-full h-2/3 object-cover object-bottom" loading="lazy">
    </section>
    <section id="home-library" class="bg-cover bg-no-repeat bg-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 relative z-3">
                    <form action="">
                        <div class="flex items-center h-15">
                            <label for="name" class="flex-1 h-full">
                                <input type="search" placeholder="Kitap Adı veya Yazar Adı" required id="name" name="name"
                                    class="w-full h-full border-none p-5 text-primary text-sm leading-none">
                            </label>
                            <button
                                class="flex-none block h-full w-15 aspect-square flex items-center justify-center transition-colors transition-300 bg-primary border-none cursor-pointer">
                                <?= getSprite("search_icon", "fill-white w-5 h-5") ?>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 relative z-2">
                    <img src="<?= domain ?>assets/img/kutuphane.webp" alt="Kütüphane"
                        class="absolute bottom-0 w-full object-contain object-center">
                </div>
                <div class="col-lg-3 flex items-end">
                    <div
                        class="library-title relative before-absolute after-absolute pt-12 pb-14 text-white text-right flex flex-col gap-y-5.5 justify-center bg-primary">
                        <h2 class="text-3xl my-0 font-bold leading-snug relative z-1">MİMARLAR ODASI KONYA ŞUBE
                            KÜTÜPHANESİ</h2>
                        <p class="leading-snug my-0 relative z-1">Aradığınız kitapları Mimarlar Odası Konya Şubesi
                            kütüphanesi data bankasından sorgulayabilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="in-network-provider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper relative before-absolute after-absolute bg-primary">
                        <div class="row relative z-1">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="row">
                                    <div class="col-lg-5 py-15 flex flex-col items-start gap-y-6">
                                        <h2 class="text-secondary text-3xl font-bold leading-snug my-0 ">ANLAŞMALI
                                            KURUMLAR
                                        </h2>
                                        <p class="text-white leading-snug my-0">
                                            Mimarlar Odası Konya Şubesi üyelerine özel anlaşmalı firmalar ve avantajlı
                                            fırsatlar.
                                        </p>
                                        <a href=""
                                            class="btn bg-secondary px-8 text-white rounded-sm transition-colors transition-300">Avantajlar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?= domain ?>assets/img/network_img.webp" alt="Anlaşmalar" loading="lazy"
                            class="block absolute top-0 right-0 w-1/2 h-full z-1 object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-career" class="mb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 flex justify-between items-center mb-12.5">
                    <div>
                        <h2 class="text-3xl text-secondary font-bold leading-none mt-0 mb-2">KARİYER FIRSATLARI</h2>
                        <p class="leading-snug my-0 text-secondary">Son Eklenen İlanları ve İş ilanlarını buradan takip
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
                    <ul class="nav nav-tabs bg-primary" id="home-career-tabs" role="tablist">
                        <?php
                        $home_careers_tab_list = ["Personel Arayanlar", "İş Arayanlar", "Stajyer Arayanlar", "Staj Yeri Arayanlar"];
                        for ($i = 1; $i <= 4; $i++): ?>
                         <li class="nav-item" role="presentation">
                                <button class="nav-link py-5 px-10 text-white cursor-pointer transition-colors transition-300 <?= $i == 1 ? 'active' : '' ?>" id="tab-<?= $i ?>"
                                    data-bs-toggle="tab" data-bs-target="#tab-<?=$i?>-content" type="button" role="tab"
                                    aria-controls="#tab-<?= $i ?>-content"
                                    aria-selected="<?= $i == 1 ? 'true' : 'false' ?>">
                                    <?= $home_careers_tab_list[$i - 1] ?>
                                </button>
                            </li>
                        <?php endfor; ?>
                    </ul>
                    <div class="tab-content relative before-absolute py-5" id="home-careers-tab-content">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class="tab-pane <?= $i == 1 ? 'show active' : '' ?>" id="tab-<?= $i ?>-content"
                                role="tabpanel" aria-labelledby="tab-<?= $i ?>" tabindex="0">
                                <?php for ($j = 1; $j <= 10; $j++): ?>
                                    <div class="p-2 bg-white mb-6 px-3">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <!-- Firma adını gönder -->
                                                <div class="img bg-primary aspect-square">
                                                    <img src="<?= domain ?>assets/img/delete_dummy_logo.webp" alt="Firma adı"
                                                        class="block w-full h-full object-contain object-center" loading="lazy">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 flex flex-col justify-center">
                                                <span class="font-medium text-secondary leading-tight block">LOREM İPSOM
                                                    DİZAYN</span>
                                                <span class="font-medium text-secondary leading-tight block">KONYA</span>
                                            </div>
                                            <div class="col-lg-2 offset-lg-1 flex flex-col justify-center">
                                                <span class="text-sm text-secondary leading-tight block">İlan Tarihi</span>
                                                <!-- Tab görmek için indeksi ekledim -->
                                                <span class="font-medium leading-tight text-secondary block">(Tab
                                                    <?= $i ?>) 05 Eylül 2023
                                                </span>
                                            </div>
                                            <div class="col-lg-2 offset-lg-2 flex items-center justify-center">
                                                <a href=""
                                                    class="btn bg-primary text-white rounded-sm px-7 py-4 transition-colors transition-300">İlanı
                                                    İncele</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-social">
        <div class="container">
            <div class="wrapper">
                <span class="text-3xl text-dark leading-none text-center mb-7.5 block">@MimodKonya <strong class="font-bold">BİZİ TAKİP EDİN</strong></span>
                <div class="flex justify-center gap-x-6">
                    <a href="" class="aspect-square flex flex-col justify-center items-center gap-y-8 p-5 bg-white rounded-sm transition-300 transition-colors">
                        <?= getSprite("linkedin", "fill-dark w-8 h-8 transition-colors transition-300") ?>
                        <span class="text-dark text-sm leading-none text-center transition-300 transition-colors">LINKEDIN</span>
                    </a>
                    <a href="" class="aspect-square flex flex-col justify-center items-center gap-y-8 p-5 bg-white rounded-sm transition-300 transition-colors">
                        <?= getSprite("instagram", "fill-dark w-8 h-8 transition-colors transition-300") ?>
                        <span class="text-dark text-sm leading-none text-center transition-300 transition-colors">INSTAGRAM</span>
                    </a>
                    <a href="" class="aspect-square flex flex-col justify-center items-center gap-y-8 p-5 bg-white rounded-sm transition-300 transition-colors">
                        <?= getSprite("youtube", "fill-dark w-8 h-8 transition-colors transition-300") ?>
                        <span class="text-dark text-sm leading-none text-center transition-300 transition-colors">YOUTUBE</span>
                    </a>
                    <a href="" class="aspect-square flex flex-col justify-center items-center gap-y-8 p-5 bg-white rounded-sm transition-300 transition-colors">
                        <?= getSprite("twitter_x", "fill-dark w-8 h-8 transition-colors transition-300") ?>
                        <span class="text-dark text-sm leading-none text-center transition-300 transition-colors">TWITTER</span>
                    </a>
                    <a href="" class="aspect-square flex flex-col justify-center items-center gap-y-8 p-5 bg-white rounded-sm transition-300 transition-colors">
                        <?= getSprite("facebook", "fill-dark w-8 h-8 transition-colors transition-300") ?>
                        <span class="text-dark text-sm leading-none text-center transition-300 transition-colors">FACEBOOK</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>
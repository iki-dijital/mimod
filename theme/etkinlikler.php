<?php
$js_file = 'etkinlikler';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Faaliyetler</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Faaliyetler</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300">Etkinlikler</a>
        </nav>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-wrapper">
                    <div class="dynamic-form">
                        <div class="form-wrapper py-2 pr-2 pl-5 bg-white flex justify-betwen items-center">
                            <span class="text-xl text-secondary font-bold leading-none">Etkinlikler</span>
                            <form action="" class="flex-1 w-full flex justify-end gap-x-10">
                                <div id="event_type_wrapper" class="custom-select w-25">
                                    <select name="type" id="event_type"
                                        autocomplete="off">
                                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                            <option value="type_<?= $i ?>">Genel
                                                <?= $i ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div id="year_type_wrapper" class="custom-select w-25">
                                    <select name="type" id="year_type"
                                        autocomplete="off">
                                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                            <option value="type_<?= $i ?>">Genel
                                                <?= $i ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="p-2 bg-white top-0">
                    <div class="aside-list">
                        <span
                            class="bg-light text-xl flex items-center leading-tight font-bold text-secondary pl-3 py-2.5">FAALİYETLER</span>
                        <ul>
                            <li>
                                <a href=""
                                    class="text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Etkinlikler</a>
                            </li>
                            <li>
                                <a href=""
                                    class="active text-sm relative before-absolute pb-2.5 pt-3 pl-3 text-secondary block">Ziyaret
                                    ve Kabuller</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
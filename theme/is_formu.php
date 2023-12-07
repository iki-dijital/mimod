<?php
$js_file = 'is_formu';
include "header.php"; ?>
<section id="page-banner" class="bg-primary mb-7.5 md:mb-0">
    <div class="container h-full flex flex-col justify-center">
        <h1 class="text-3xl text-center font-bold leading-none text-secondary mt-0">Kariyer Fırsatları</h1>
        <nav id="banner-breadcrumb" class="flex justify-center items-center gap-x-6 flex-wrap gap-y-2"" aria-label="Sayfa haritası">
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">Anasayfa</a>
            <a href="" class="text-light leading-tight relative transition-colors transition-300 whitespace-nowrap sm:text-sm">İş İlanı Formu</a>
        </nav>
    </div>
</section>
<div class="bottom-menu hidden md:flex bg-secondary text-center justify-center py-5 mb-7.5"></div>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-xl text-secondary font-bold leading-none mt-0 mb-7.5">İş İlanı Gönder</h2>
                <form action="" class="job_application_form">
                    <fieldset class="p-0 mt-0 mb-8 mx-0 border-none">
                        <legend class="font-semibold leading-none text-secondary mt-0 mb-6.5">İlan Kategorisi Seçiniz
                        </legend>
                        <div class="categories flex items-center gap-x-9 xs:gap-y-4 md:gap-x-4 md:justify-between xs:flex-wrap">
                            <label for="personal" class="relative flex items-center gap-x-3 cursor-pointer xs:flex-none xs:w-2/5">
                                <input type="radio" id="personal" name="job_category"
                                    class="absolute z-2 top-0 left-0 w-full h-full opacity-0 cursor-pointer">
                                <span
                                    class="icon block flex-none w-6 h-6 rounded-full border border-solid border-secondary relative after-absolute"></span>
                                <span class="text md:text-sm">Personel Arayanlar</span>
                            </label>
                            <label for="looking_job" class="relative flex items-center gap-x-3 cursor-pointer xs:flex-none xs:w-2/5">
                                <input type="radio" id="looking_job" name="job_category"
                                    class="absolute z-2 top-0 left-0 w-full h-full opacity-0 cursor-pointer">
                                <span
                                    class="icon block flex-none w-6 h-6 rounded-full border border-solid border-secondary relative after-absolute"></span>
                                <span class="text md:text-sm">İş Arayanlar</span>
                            </label>
                            <label for="looking_intern" class="relative flex items-center gap-x-3 cursor-pointer xs:flex-none xs:w-2/5">
                                <input type="radio" id="looking_intern" name="job_category"
                                    class="absolute z-2 top-0 left-0 w-full h-full opacity-0 cursor-pointer">
                                <span
                                    class="icon block flex-none w-6 h-6 rounded-full border border-solid border-secondary relative after-absolute"></span>
                                <span class="text md:text-sm">Stajyer Arayanlar</span>
                            </label>
                            <label for="looking_internship" class="relative flex items-center gap-x-3 cursor-pointer xs:flex-none xs:w-2/5">
                                <input type="radio" id="looking_internship" name="job_category"
                                    class="absolute z-2 top-0 left-0 w-full h-full opacity-0 cursor-pointer">
                                <span
                                    class="icon block flex-none w-6 h-6 rounded-full border border-solid border-secondary relative after-absolute"></span>
                                <span class="text md:text-sm">Staj Yeri Arayanlar</span>
                            </label>
                        </div>
                    </fieldset>
                    <h3 class="font-semibold leading-none text-secondary mt-0 mb-6.5">Logo</h3>
                    <label for="file" class="file_upload flex items-center cursor-pointer gap-x-4 mb-6">
                        <input type="file" name="file" id="file" class="hidden">
                        <span
                            class="icon py-4 px-7.5 bg-cream text-secondary leading-none transition-colors transition-300">Dosya
                            Seç</span>
                        <span class="text">Dosya Seçilmedi</span>
                    </label>
                    <div class="row input_area">
                        <div class="col-lg-6">
                            <label for="name"
                                class="block w-full text-sm font-medium text-secondary leading-none mb-2.5">Firma / Kişi
                                Adı</label>
                            <input type="text" name="name" id="name"
                                class="block w-full border-none text-sm text-secondary p-3" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="sector"
                                class="block w-full text-sm font-medium text-secondary leading-none mb-2.5">Sektör</label>
                            <input type="text" name="sektör" id="sektör"
                                class="block w-full border-none text-sm text-secondary p-3" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="address"
                                class="block w-full text-sm font-medium text-secondary leading-none mb-2.5">Adres</label>
                            <input type="text" name="address" id="address"
                                class="block w-full border-none text-sm text-secondary p-3" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="city"
                                class="block w-full text-sm font-medium text-secondary leading-none mb-2.5">Şehir</label>
                            <input type="text" id="city" name="city"
                                class="block w-full border-none text-sm text-secondary p-3" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone"
                                class="block w-full text-sm font-medium text-secondary leading-none mb-2.5">Telefon</label>
                            <input type="tel" name="phone" id="phone"
                                class="block w-full border-none text-sm text-secondary p-3" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="mail"
                                class="block w-full text-sm font-medium text-secondary leading-none mb-2.5">İnternet
                                Sitesi / E-Posta</label>
                            <input type="text" name="mail" id="mail"
                                class="block w-full border-none text-sm text-secondary p-3">
                        </div>
                        <div class="col-lg-12">
                            <label for="message"
                                class="block w-full text-sm font-medium text-secondary leading-none mb-2.5">Açıklama /
                                Detaylı Bilgiler</label>
                            <textarea name="message" id="message"
                                class="block w-full border-none text-sm text-secondary p-3"></textarea>
                        </div>
                    </div>
                    <div class="check_data">
                        <input type="checkbox" name="data" id="data">
                        <label for="data" class="flex items-center gap-x-2.5 cursor-pointer select-none">
                            <span
                                class="icon block w-6 h-6 border border-solid border-secondary transition-colors transition-300 relative after-absolute"></span>
                            <span class="text text-secondary leading-snug">
                                <a href="" target="_blank" class="text-secondary">Kişisel verilerimin</a> korunması kanunu okudum kabul
                                ediyorum.
                            </span>
                        </label>
                    </div>
                    <div class="flex justify-end -mt-2 md:mt-6">
                        <button type="submit"
                            class="btn bg-cream text-secondary leading-none py-2 px-10 transition-colors transition-300 border-none cursor-pointer">Gönder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
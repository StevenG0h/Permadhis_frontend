@extends('landingNav.landingNav')
@section('content')
    <div class="container">
        <div class="main" id="home" style="background-image: url({{ asset('image/IMG_9616.JPG') }});">
            <div class="main-wrapper">
                 <div class="main-wrapper-img">
                     <img src="{{ asset('image/LogoPmd.png') }}" alt="">
                 </div>
                 <div class="main-wrapper-title">
                    <h2>Persaudaraan Mahasiswa Buddhis <br> Politeknik Caltex Riau</h2>
                 </div>
                 <div class="mobile-main-wrapper">
                     <h2>Selamat Datang di <br> Website Kami</h2>
                     <img src="{{ asset('image/LogoPmd.png') }}" alt="">
                     <p>Persaudaraan Mahasiswa Buddhis <br> Politeknik Caltex Riau</p>
                    <p>Ingin tahu tentang kami?</p>
                    <a href="#about">
                        <svg class="side-content-footer-image" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"  stroke="none">
                                <path d="M2356 4560 c-382 -44 -754 -200 -1056 -443 -931 -749 -1004 -2132 -157 -2979 601 -601 1521 -757 2286 -388 610 295 1022 860 1115 1529 21 144 21 407 0 553 -121 884 -788 1567 -1674 1713 -114 19 -404 27 -514 15z m590 -1319 c21 -16 166 -156 320 -312 237 -239 284 -291 295 -326 24 -84 17 -94 -304 -425 -161 -165 -304 -306 -319 -314 -15 -8 -46 -14 -70 -14 -104 0 -183 112 -144 203 9 22 76 100 162 187 l147 150 -672 0 c-735 0 -713 -2 -764 59 -58 69 -58 153 0 222 51 61 30 59 760 59 l667 0 -156 158 c-116 117 -157 165 -163 190 -30 139 128 247 241 163z"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="side-content">
            <div class="side-content-title">
                <h1>
                    Selamat Datang di Website Kami
                </h1>
            </div>
            
            <div class="side-content-footer">
                <h2>Ingin tahu tentang kami?</h2>
                <a href="#about">
                    <svg class="side-content-footer-image" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"  stroke="none">
                            <path d="M2356 4560 c-382 -44 -754 -200 -1056 -443 -931 -749 -1004 -2132 -157 -2979 601 -601 1521 -757 2286 -388 610 295 1022 860 1115 1529 21 144 21 407 0 553 -121 884 -788 1567 -1674 1713 -114 19 -404 27 -514 15z m590 -1319 c21 -16 166 -156 320 -312 237 -239 284 -291 295 -326 24 -84 17 -94 -304 -425 -161 -165 -304 -306 -319 -314 -15 -8 -46 -14 -70 -14 -104 0 -183 112 -144 203 9 22 76 100 162 187 l147 150 -672 0 c-735 0 -713 -2 -764 59 -58 69 -58 153 0 222 51 61 30 59 760 59 l667 0 -156 158 c-116 117 -157 165 -163 190 -30 139 128 247 241 163z"/>
                        </g>
                    </svg>
                </a>
                
            </div>
        </div>
        
        <div class="main" id="about" style="background-image: url({{ asset('image/IMG_9616.JPG') }});">
            <div class="main-wrapper">
                <div class="about-wrapper">
                    <div class="about-title-wrapper">
                        <div class="about-title-img">
                            <img src="{{ asset('image/LogoPmd.png') }}" alt="">
                        </div>
                        <h1>Apa itu Permadhis</h1>
                    </div>
                    <p class="about-p">Persaudaraan Mahasiswa Buddhis Politeknik Caltex Riau (Permadhis PCR) merupakan salah satu Unit Kegiatan Mahasiswa (UKM) di PCR dan didirikan di Kampus Politeknik Caltex Riau pada tanggal 19 Juli 2002 . Permadhis PCR menjadi tempat berkumpulnya mahasiswa/i Buddhis yang ada di PCR. Sebagai salah satu UKM di kampus PCR, Permadhis sendiri memiliki beberapa kegiatan tahunan yang dilaksanakan rutin setiap tahunnya sesuai dengan jadwal yang telah dipertimbangkan seperti kegiatan Perayaan Hari Metta, Bakti Sosial, Rapat Anggota, Inagurasi, dan Ulang Tahun Permadhis PCR. Setiap kegiatan yang dilaksanakan oleh Permadhis memiliki tujuan masing-masing yang tentunya tidak meyimpang dari makna UKM Permadhis sendiri yang berlandaskan Persaudaraan.</p>
                    <h2>Visi</h2>
                    <p class="about-p">Mewujudkan Permadhis PCR sebagai pusat kegiatan mahasiswa Buddhis di Provinsi Riau.</p>
                    <h2 class="">Visi</h2>
                    <ol>
                        <li>Mengembangkan UKM PERMADHIS PCR dengan melakukan kerjasama dengan pihak dalam maupun pihak luar. </li>
                        <li>Mengembangkan sikap dan perilaku anggota PERMADHIS PCR berdasarkan ajaran agama Buddha, Pancasila, dan UUD’45. </li>
                        <li>Mempererat hubungan antar sesama umat beragama khususnya agama Buddha.</li>
                    </ol>
                </div>
                <div class="mobile-main-link">
                    <div class="side-content-link">
                        <h2>Kunjungi sosial media kami</h2>
                        <a class="side-content-link-box" href="https://www.instagram.com/permadhispcr/">
                            <img src="{{ asset('image/instagram.png') }}" alt="instagram">
                            <h2>@permadhispcr</h2>
                        </a>
                        <a href="#event">
                            <svg class="side-content-footer-image" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"  stroke="none">
                                    <path d="M2356 4560 c-382 -44 -754 -200 -1056 -443 -931 -749 -1004 -2132 -157 -2979 601 -601 1521 -757 2286 -388 610 295 1022 860 1115 1529 21 144 21 407 0 553 -121 884 -788 1567 -1674 1713 -114 19 -404 27 -514 15z m590 -1319 c21 -16 166 -156 320 -312 237 -239 284 -291 295 -326 24 -84 17 -94 -304 -425 -161 -165 -304 -306 -319 -314 -15 -8 -46 -14 -70 -14 -104 0 -183 112 -144 203 9 22 76 100 162 187 l147 150 -672 0 c-735 0 -713 -2 -764 59 -58 69 -58 153 0 222 51 61 30 59 760 59 l667 0 -156 158 c-116 117 -157 165 -163 190 -30 139 128 247 241 163z"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="side-content">
            <div class="side-content-title">
                <h1>
                    Tentang Kami
                </h1>
            </div>
            <div class="side-content-link">
                <h2>Kunjungi sosial media kami</h2>
                <a class="side-content-link-box" href="https://www.instagram.com/permadhispcr/">
                    <img src="{{ asset('image/instagram.png') }}" alt="instagram">
                    <h2>@permadhispcr</h2>
                </a>
            </div>
            <div class="side-content-footer">
                <h2>Event-event kami</h2>
                <a href="#event">
                    <svg class="side-content-footer-image" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"  stroke="none">
                            <path d="M2356 4560 c-382 -44 -754 -200 -1056 -443 -931 -749 -1004 -2132 -157 -2979 601 -601 1521 -757 2286 -388 610 295 1022 860 1115 1529 21 144 21 407 0 553 -121 884 -788 1567 -1674 1713 -114 19 -404 27 -514 15z m590 -1319 c21 -16 166 -156 320 -312 237 -239 284 -291 295 -326 24 -84 17 -94 -304 -425 -161 -165 -304 -306 -319 -314 -15 -8 -46 -14 -70 -14 -104 0 -183 112 -144 203 9 22 76 100 162 187 l147 150 -672 0 c-735 0 -713 -2 -764 59 -58 69 -58 153 0 222 51 61 30 59 760 59 l667 0 -156 158 c-116 117 -157 165 -163 190 -30 139 128 247 241 163z"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        
<div class="event-main" id="event">
            <div class="event-main-wrapper">
                <div class="event-wrapper">
                    <div class="event-image-carousel-button-wrapper">
                        <button onclick="carousel(0,0)" class="event-image-carousel-button button-active"></button>
                        <button onclick="carousel(1,0)" class="event-image-carousel-button"></button>
                        <button onclick="carousel(2,0)" class="event-image-carousel-button"></button>
                        <button onclick="carousel(3,0)" class="event-image-carousel-button"></button>
                        <button onclick="carousel(4,0)" class="event-image-carousel-button"></button>
                    </div>
                    <div class="event-image-carousel-wrapper">            
                        <div class="event-image-carousel">
                            <img src="{{ asset('image/DSC04989.JPG') }}" alt="" srcset="">
                            <img src="{{ asset('image/DSC04994.JPG') }}" alt="" srcset="">
                            <img src="{{ asset('image/DSC04999.JPG') }}" alt="" srcset="">
                            <img src="{{ asset('image/DSC05027.JPG') }}" alt="" srcset="">
                            <img src="{{ asset('image/DSC05029.JPG') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-side-content">
            <div class="side-content-title">
                <img src="{{ asset('image/Metta_2022_Logo (1).png') }}" alt="">
                <h2>
                    Event donor darah dan lomba untuk anak muda
                </h2>
            </div>
            <div class="side-content-link">
                <a class="side-content-link-box" href="https://www.instagram.com/mettapermadhis/">
                    <img src="{{ asset('image/instagram.png') }}" alt="instagram">
                    <h2>@mettapermadhis</h2>
                </a>
            </div>
            <div class="side-content-footer">
                <h2>Permadhis Cup</h2>
            </div>
        </div>
    </div>
    
</body>
</html>
<script src="{{ asset('js/main.js') }}"></script>
@endSection
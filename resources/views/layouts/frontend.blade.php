<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>QuickTix - Travel Cepat</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('homepage') }}" class="nav__logo"
                    >Quick<i class="bx bxs-map"></i> Tix</a
                >

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Halaman Utama</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Destinasi</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span>Panduan Wisata</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Tentang Kami</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- theme -->
                <i class="bx bx-moon change-theme" id="theme-button"></i>

                <a target="_blank" href="https://api.whatsapp.com/send?phone=088111444&text=Halo saya tertarik untuk membeli paket travel di QuickTix" class="button nav__button">Pesan Sekarang</a>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">
                        Quick<i class="bx bxs-map"></i> Tix
                    </a>
                    <p class="footer__description">
                        Kami hadir untuk membantu anda <br />
                        menemukan tempat destinasi terbaik
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Tentang QuickTix</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Tentang Kami </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Hubungi Kami </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Pusat Bantuan </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Lainnya</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Syarat & Ketentuan </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"
                                    >Daftarkan Akomodasi Anda
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Daftarkan Bisnis Aktivitas Anda </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow kami di</h3>

                        <ul class="footer__social">
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-pinterest"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; QuickTix. All rigths reserved
                </span>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>

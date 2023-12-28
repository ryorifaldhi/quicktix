@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img
                src="{{ asset('frontend/assets/img/contact-hero.jpg') }}"
                alt=""
                class="islands__bg"
              />
              <div class="bg__overlay">
                <div class="islands__container container">
                  <div class="islands__data">
                    <h2 class="islands__subtitle">QuickTix</h2>
                    <h1 class="islands__title">Hubungi Kami</h1>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <div class="contact__container container grid">
          <div class="contact__images">
            <div class="contact__orbe"></div>

            <div class="contact__img">
              <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
            </div>
          </div>

          <div class="contact__content">
            <div class="contact__data">
              <span class="section__subtitle">QuickTix</span>
              <h2 class="section__title">Hubungi Kami</h2>
              <p class="contact__description">
                Apakah ada masalah dalam menemukan tempat untuk perjalanan Anda berikutnya?
                <br> Butuh panduan di perjalanan pertama atau butuh konsultasi seputar traveling? <br>
                Hubungi kami dibawah ini.
              </p>
            </div>

            <div class="contact__card">
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-phone-call"></i>
                  <div>
                    <h3 class="contact__card-title">Telepon</h3>
                    <p class="contact__card-description">+62 822 6789 0503</p>
                  </div>
                </div>

                <button class="button contact__card-button">Telepon Sekarang</button>
              </div>
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-message-rounded-dots"></i>
                  <div>
                    <h3 class="contact__card-title">Whatsapp</h3>
                    <p class="contact__card-description">+62 822 6789 0503</p>
                  </div>
                </div>

                <button class="button contact__card-button">Hubungi Sekarang</button>
              </div>

@endsection
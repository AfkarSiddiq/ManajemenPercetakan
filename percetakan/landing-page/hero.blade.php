@extends('landingpage.index')
@section('content')

<section id="hero" class="d-flex align-items-center">
      <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Nyetak</h1>
            <h2>Perusahaan percetakan terbaik di Indonesia</h2>
          </div>
        </div>

        <div class="row icon-boxes">
          <div
            class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            <div class="icon-box">
              <div class="icon"><i class="ri-check-line"></i></div>
              <h4 class="title"><a href="">Premium Quality Product</a></h4>
              <p class="description">
                Kami menyediakan produk dengan kualitas terbaik
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="300"
          >
            <div class="icon-box">
              <div class="icon"><i class="ri-palette-line"></i></div>
              <h4 class="title"><a href="">Excellent Services</a></h4>
              <p class="description">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="400"
          >
            <div class="icon-box">
              <div class="icon"><i class="ri-command-line"></i></div>
              <h4 class="title"><a href="">24/7 Support</a></h4>
              <p class="description">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('landingpage.services')
@include('landingpage.counts')
@endsection
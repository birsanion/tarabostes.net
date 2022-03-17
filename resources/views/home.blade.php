@extends('layouts.app')

@section('content')
  <section id="hero">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="8000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(/img/banners/sarmisegetuza.png)">
            <div class="carousel-container">
              <div class="container header-top">
                <p class="animate__animated animate__fadeInDown">
                  <strong>
                    We build tech for humanity
                  </strong>
                </p>
                <h4 class="animate__animated animate__fadeInDown">
                  One idea can change the world.<br>
                  New ideas will discover new worlds.<br>
                  Technology for the professional development of visually impaired people.<br>
                  We make lives better with mobile technologies.
                </h4>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/img/banners/coloana-infinit.png)">
            <div class="carousel-container">
              <div class="container header-top">
                <p class="animate__animated animate__fadeInDown">
                  <strong>
                    Helping Business Security & Peace of Mind for Your Family
                  </strong>
                </p>
                <h4 class="animate__animated animate__fadeInDown">We make lives better with mobile technologies</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/img/banners/casa-poporului.png)">
            <div class="carousel-container header-top">
              <div class="container">
                <p class="animate__animated animate__fadeInDown">
                  <strong>
                    Trusted Digital Transformation Parteners for StartUp, Growing, Non profit organization, Government Institutions
                  </strong>
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/img/banners/balea-lac.png)">
            <div class="carousel-container">
              <div class="container header-top">
                <p class="animate__animated animate__fadeInDown">
                  <strong>
                    Digital solutions that make people move and together we can make extraordinary things happen
                  </strong>
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/img/banners/sfinx.png)">
            <div class="carousel-container">
              <div class="container header-top">
                <p class="animate__animated animate__fadeInDown">
                  <strong>
                    We&#39;re a team of creative thinkers &amp; makers Bespoke Software Development and Digital Transformation from Conception to Delivery
                  </strong>
                </p>
                <h4 class="animate__animated animate__fadeInDown">
                  Trusted software development: delivered intelligently, designed to unlock growth.
                </h4>
              </div>
            </div>
          </div>

        </div>
      </div>
  </section>


  <main id="main">
    <div class="area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 mb-3" data-aos="fade-right" data-aos-delay="100">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="https://picsum.photos/900/520" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
            <div>
              <div class="section-headline">
                <h2>Tehnology Focus</h2>
              </div>
              <p>
                Our unique, four step process means we don’t simply meet our clients’ needs, we exceed them.
                Whatever the goal, however complicated the brief, we are driven to succeed.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="services-img">
              <img src="https://picsum.photos/520/450" alt="">
            </div>
            <div class="services-content">
              <h3 class="mb-1">define</h3>
              <ul>
                <li>
                  <strong class="list-item-marker">&#9473</strong> education
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="services-img">
              <img src="https://picsum.photos/520/450" alt="">
            </div>
            <div class="services-content">
              <h3 class="mb-1">design</h3>
              <ul>
                <li>
                  <strong class="list-item-marker">&#9473</strong> mobile UI/UX design
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="services-img">
              <img src="https://picsum.photos/520/450" alt="">
            </div>
            <div class="services-content">
              <h3 class="mb-1">develop</h3>
              <ul>
                <li>
                  <strong class="list-item-marker">&#9473</strong> mobile app development
                </li>
                <li>
                  <strong class="list-item-marker">&#9473</strong> application design
                </li>
                <li>
                  <strong class="list-item-marker">&#9473</strong> development, optimisation & consolidation
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="services-img">
              <img src="https://picsum.photos/520/450" alt="">
            </div>
            <div class="services-content">
              <h3 class="mb-1">drive</h3>
              <ul>
                <li>
                  <strong class="list-item-marker">&#9473</strong> web development
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--<div class="blog-area">
      <div class="blog-inner area-padding">
        <div class="container ">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="https://picsum.photos/850/530" alt="">
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="https://picsum.photos/850/530" alt="">
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="https://picsum.photos/850/530" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <div class="suscribe-area"></div>
    <div class="text-center">
      <img src="assets/img/arrow-down.png" alt="" width="50">
    </div>

    <div class="blog-area">
      <div class="blog-inner area-padding">
        <div class="container ">
          <div class="row">
            <div class="col-xs-12">
              <div class="section-headline mb-4">
                <h2>Our Perspectives</h2>
              </div>
            </div>

            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="https://picsum.photos/850/530" alt="">
                  </a>
                </div>
                <div class="blog-text">
                  <p class="m-2">
                    why should SMEs consider <strong>Flutter</strong> for Mobile App Development?
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="https://picsum.photos/850/530" alt="">
                  </a>
                </div>
                <div class="blog-text">
                  <p class="m-2">
                    coreography vs. orchestration in microservice arhitecture
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="https://picsum.photos/850/530" alt="">
                  </a>
                </div>
                <div class="blog-text">
                  <p class="m-2">
                    neuroeducation / foundation
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 py-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="section-headline">
              <h2>Tehnology Focus</h2>
            </div>
            <p>
              We build solutions in the two biggest areas of people&#39;s lives. Health &amp; Wealth and Education. We know how to build valuable intellectual property in these highly regulated industries.
            </p>
            <a class="ready-btn border-0">Education</a>
            <a class="ready-btn border-0">Health</a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
@extends('layouts.app')

@section('content')
  <section id="hero">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="8000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(/img/banners/sarmisegetuza.jpg)">
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

          <div class="carousel-item" style="background-image: url(/img/banners/coloana-infinit.jpg)">
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

          <div class="carousel-item" style="background-image: url(/img/banners/casa-poporului.jpg)">
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

          <div class="carousel-item" style="background-image: url(/img/banners/balea-lac.jpg)">
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

          <div class="carousel-item" style="background-image: url(/img/banners/sfinx.jpg)">
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
          <div class="col-xs-12 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
            <div>
              <div class="section-headline">
                <h2>Tehnology Focus</h2>
              </div>
              <h5>
                <strong>
                  Technology for the professional development of visually impaired people
                </strong>
              </h5>
              <h5>
                <strong>
                  We make lives better with mobile technologies
                </strong>
              </h5>
              <h6>
                Our unique, four step process means we don’t simply meet our clients’ needs, we exceed them.
                Whatever the goal, however complicated the brief, we are driven to succeed.
              </h6>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <a href="{!! route('api-integration') !!}">
              <div class="services-img">
                <img src="https://picsum.photos/520/450" alt="">
              </div>
              <div class="services-content">
                <h5 class="mb-1">API Integration</h5>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <a href="{!! route('design') !!}">
              <div class="services-img">
                <img src="https://picsum.photos/520/450" alt="">
              </div>
              <div class="services-content">
                <h5 class="mb-1">Mobile UI/UX Design</h5>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <a href="{!! route('mobile-development') !!}">
              <div class="services-img">
                <img src="https://picsum.photos/520/450" alt="">
              </div>
              <div class="services-content">
                <h5 class="mb-1">Mobile App Development </h5>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <a href="{!! route('web-development') !!}">
              <div class="services-img">
                <img src="https://picsum.photos/520/450" alt="">
              </div>
              <div class="services-content">
                <h5 class="mb-1">Drive web development</h5>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3 mx-auto" data-aos="zoom-in" data-aos-delay="100">
            <a href="{!! route('internet-of-things') !!}">
              <div class="single-blog-img">
                <img src="/img/internet-of-things.jpg" alt="">
              </div>
              <div class="services-content">
                <h5 class="mb-1">Internet of Things Consulting </h5>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="single-blog">
              <a href="{!! route('blockchain-development') !!}">
                <div class="single-blog-img">
                  <img src="/img/blockchain.jpg" alt="">
                </div>
                <div class="services-content">
                  <h5 class="mb-1">Blockchain Development </h5>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12 mb-3 mx-auto" data-aos="zoom-in" data-aos-delay="100">
            <a href="{!! route('cloud-consulting') !!}">
              <div class="single-blog-img">
                <img src="/img/cloud-consulting.jpg" alt="">
              </div>
              <div class="services-content">
                <h5 class="mb-1">Cloud consulting</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="suscribe-area"></div>
    <div class="text-center">
      <img src="/img/arrow-down.png" alt="" width="50">
    </div>

    <div class="blog-area">
      <div class="blog-inner area-padding">
        <div class="container ">
          <div class="row">
            <div class="col-xs-12" data-aos="fade-left" data-aos-delay="100">
              <div class="section-headline mb-4">
                <h2>Our Perspectives</h2>
              </div>
              <h5>
                <strong>
                  Whatever your challenge, we'll find the right solution
                </strong>
              </h5>
              <h6 class="mb-4">
                Solving complex problems to move your business forward
              </h6>
              <h6>
                The best digital products are created around specific business goals, objectives and aspirations to unlock real value. We start by understanding your challenges, before determining how technology and design can move you forward.
              </h6>
              <h6>
                Working across all industries with a variety of innovative and inspirational clients, we strategise, design, build and maintain the technology they need to keep moving.
              </h6>
              <h6>
                The digital product journey presents multiple challenges and the below list provides a helpful starting point when trying to understand the kind of support you need.
              </h6>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 mb-4" data-aos="zoom-in" data-aos-delay="100">
              <a href="{!! route('tehnology-strategy') !!}">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <img src="https://picsum.photos/850/530" alt="">
                  </div>
                  <div class="services-content">
                    <h5 class="mb-1">Tehnology strategy</h5>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 mb-5" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <a href="{!! route('product-strategy') !!}">
                  <div class="single-blog-img">
                    <img src="https://picsum.photos/850/530" alt="">
                  </div>
                  <div class="services-content">
                    <h5 class="mb-1">Product strategy</h5>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 mb-5" data-aos="zoom-in" data-aos-delay="100">
              <a href="{!! route('neurorezonance') !!}">
                <div class="single-blog-img">
                  <img src="https://picsum.photos/850/530" alt="">
                </div>
                <div class="services-content">
                  <h5 class="mb-1">Neuroeducation</h5>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 mb-5" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <a href="{!! route('digital-transformation') !!}">
                  <div class="single-blog-img">
                    <img src="https://picsum.photos/850/530" alt="">
                  </div>
                  <div class="services-content">
                    <h5 class="mb-1">Digital transformation</h5>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 mb-5" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <a href="{!! route('innovation') !!}">
                  <div class="single-blog-img">
                    <img src="https://picsum.photos/850/530" alt="">
                  </div>
                  <div class="services-content">
                    <h5 class="mb-1">Innovation</h5>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 mb-5" data-aos="zoom-in" data-aos-delay="100">
              <div class="single-blog">
                <a href="{!! route('foundation') !!}">
                  <div class="single-blog-img">
                    <img src="https://picsum.photos/850/530" alt="">
                  </div>
                  <div class="services-content">
                    <h5 class="mb-1">Foundation</h5>
                  </div>
                </a>
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
              <h2>Where we do it.</h2>
            </div>
            <p>
              We build solutions in the two biggest areas of people's lives. Health & Wealth and Education. We know how to build valuable intellectual property in these highly regulated industries.
            </p>
            <a class="ready-btn border-0">Education</a>
            <a class="ready-btn border-0">Health</a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
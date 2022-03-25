@extends('layouts.app')

@section('content')
<main id="main">
  <div class="header-bg page-area d-flex align-items-center" style="background-image: url(/img/banners/solutions.jpg)">
    <div class="container">
      <div class="container">
        <div class="header-title" data-aos="fade-up" data-aos-delay="100">
          <h2 class="m-0"><strong>Hi-tech Solutions<strong></h2>
          <h4><strong>Purpose-built outcome-oriented solutions.</strong></h4>
          <h6 class="m-0">Whatever your challenge, we'll find the right solution</h6>
          <h6>Solving complex problems to move your business forward</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-4">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 py-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="section-headline">
            <h2>Overview</h2>
          </div>
          <h6>
            The best digital products are created around specific business goals, objectives and aspirations to unlock real value. We start by understanding your challenges, before determining how technology and design can move you forward.
            Working across all industries with a variety of innovative and inspirational clients, we strategise, design, build and maintain the technology they need to keep moving.
            The digital product journey presents multiple challenges and the below list provides a helpful starting point when trying to understand the kind of support you need.
          </h6>
        </div>
      </div>
    </div>
  </div>

  <div class="suscribe-area">
    <div class="container py-5">
      <div class="row">
        <div class="col-sm-12">
          <nav  class="nav nav-pills nav-fill mb-5" data-aos="fade-up" data-aos-delay="100">
            <button class="nav-link mx-2 active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#stage-1" type="button" role="tab" aria-selected="true">Stage 1: Starting point </button>
            <button class="nav-link mx-2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#stage-2" type="button" role="tab" aria-selected="false">Stage 2: Specific requirement</button>
            <button class="nav-link mx-2" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#stage-3" type="button" role="tab" aria-selected="false">Stage 3: Improve a product</button>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="stage-1" role="tabpanel" aria-labelledby="nav-home-tab">
              <h6 class="text-uppercase" data-aos="fade-up" data-aos-delay="100">
                <strong>
                  <small class="section-title">
                    How can we help you?
                  </small>
                </strong>
              </h6>
              <div class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="100">
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.understand-the-market-landscape') !!}">
                  <h4>I'm looking to understand the market landscape</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.understand-how-mobile-can-help-my-business') !!}">
                  <h4>I want to understand how a mobile strategy will help my business</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.innovate-with-technology') !!}">
                  <h4 class="section-headline">I'm looking to innovate with technology</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.build-on-an-initial-idea') !!}">
                  <h4>I want help defining my idea</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.identify-the-right-technology-stack') !!}">
                  <h4>I need to identify the right technology stack</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="stage-2" role="tabpanel" aria-labelledby="nav-profile-tab">
              <h6 class="text-uppercase" data-aos="fade-up" data-aos-delay="100">
                <strong>
                  <small class="section-title">
                    How can we help you?
                  </small>
                </strong>
              </h6>
              <div class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="100">
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.visualise-my-product-idea') !!}">
                  <h4>I'm looking to visualise my digital product idea</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.understand-user-interactions') !!}">
                  <h4>I need to better understand the user experience</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.understand-my-existing-code-base') !!}">
                  <h4>I want to understand my existing code base</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.test-design-concepts') !!}">
                  <h4>I want to test my design concepts</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.integrate-mobile-and-web-apps-with-other-technology') !!}">
                  <h4>I want to integrate mobile and web apps with other technology</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.fix-legacy-or-under-performing-products') !!}">
                  <h4>I need to improve existing or legacy technolog</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.develop-a-new-digital-product') !!}">
                  <h4>I want to develop a digital product</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.design-a-new-digital-product') !!}">
                  <h4>I want to design a digital product</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.build-a-web-app') !!}">
                  <h4>I need a web app partner</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.build-a-mobile-app') !!}">
                  <h4>I need a mobile app partner </h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="stage-3" role="tabpanel" aria-labelledby="nav-contact-tab">
              <h6 class="text-uppercase" data-aos="fade-up" data-aos-delay="100">
                <strong>
                  <small class="section-title">
                    How can we help you?
                  </small>
                </strong>
              </h6>
              <div class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="100">
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.raise-the-profile-of-my-app') !!}">
                  <h4>I'd like to raise the profile of my app</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.manage-my-app-reviews-and-ratings') !!}">
                  <h4>I want to better manage my app reviews and ratings</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.improve-the-conversion-performance-of-my-app') !!}">
                  <h4>I need to improve the conversion performance of my app</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.get-featured-in-the-app-store') !!}">
                  <h4>I want to get featured in the App Store</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('solutions.bolster-my-existing-in-house-teams') !!}">
                  <h4>I am looking to grow and complement my in-house teams</h4>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

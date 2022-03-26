@extends('layouts.app')

@section('content')
<main id="main">
  <div class="header-bg page-area d-flex align-items-center" style="background-image: url(/img/banners/services.jpg)">
    <div class="container">
      <div class="header-title" data-aos="fade-up" data-aos-delay="100">
        <h2 class="m-0"><strong>We build digital products<strong></h2>
        <h4><strong>that power business</strong></h4>
        <h5>We create technology to keep our clients and their customers moving forward.</h5>
      </div>
    </div>
  </div>

  <div class="mb-4">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 py-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="section-headline">
            <h2>Building secure, scalable, and lightning-fast digital products.</h2>
          </div>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Software that performs
            </strong>
          </h5>
          <h6>
            Modernizing legacy systems or creating a product from the ground up? We help companies define their tech stack, architecture, and infrastructure to stand the test of time.
          </h6>
          <h6>
            We work as partners at every stage of your digital journey. Unleash the potential in your organisation with insight and innovation. Deliver transformational digital products via engineering excellence and the assurance of ongoing performance through optimisation and support.
          </h6>
        </div>
      </div>
    </div>
  </div>

  <div class="suscribe-area mb-4">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 pr-3" >
          <div class="section-headline mb-3" data-aos="fade-up" data-aos-delay="100">
            <h2>Defining your product vision with insight and innovation</h2>
          </div>
          <h6 data-aos="fade-up" data-aos-delay="100">
            Any great product starts with a vision, followed by the strategy to deliver it. Our multi-disciplinary teams can bring innovative thinking to existing challenges, collaboratively help to define the best customer experiences to move your business forward and outline the technology capable of delivering it.
          </h6>
        </div>
        <div class="col-lg-6">
          <h6 class="text-uppercase" data-aos="fade-up" data-aos-delay="100">
            <strong>
              <small class="section-title">
                How can we help you?
              </small>
            </strong>
          </h6>
          <div class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="100">
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('tehnology-strategy') !!}">
              <h4 class="section-headline">Tehonogy strategy</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('product-strategy') !!}">
              <h4>Product strategy</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('digital-transformation') !!}">
              <h4>Digital transformation</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('innovation') !!}">
              <h4>Innovation</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('neurorezonance') !!}">
              <h4>Neuroeducation</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('foundation') !!}">
              <h4>Foundation</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-4">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 pr-3">
          <div class="section-headline mb-3" data-aos="fade-up" data-aos-delay="100">
            <h2>Designing and engineering transformational products</h2>
          </div>
          <h6 data-aos="fade-up" data-aos-delay="100">
            Experience designers and software engineers combine to create digital products and solutions focused on results. With your users front and centre, we’ll research, design, code and test our way through even the most complex problems to deliver technology that moves boundaries.
          </h6>
        </div>
        <div class="col-lg-6">
          <h6 class="text-uppercase" data-aos="fade-up" data-aos-delay="100">
            <strong>
              <small class="section-title">How can we help you?</small>
            </strong>
          </h6>
          <div class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="100">
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('api-integration') !!}">
              <h4>API integration</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('design') !!}">
              <h4>Mobile UI/UX Desing</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('mobile-development') !!}">
              <h4>Mobile App Development</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('internet-of-things') !!}">
              <h4>Internet of Things Consulting</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('blockchain-development') !!}">
              <h4>Blockchain Development</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('cloud-consulting') !!}">
              <h4>Cloud consulting</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="suscribe-area mb-4">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 pr-3">
          <div class="section-headline mb-3" data-aos="fade-up" data-aos-delay="100">
            <h2>Performance through support and optimisation</h2>
          </div>
          <h6 data-aos="fade-up" data-aos-delay="100">
            Our managed services team focuses on core support, monitoring and maintenance to ensure uptime and reliability. A combination of marketers, data scientists and engineers can help you take your product to the next level through continual analysis of user behaviours and technology performance.
          </h6>
        </div>
        <div class="col-lg-6">
          <h6 class="text-uppercase" data-aos="fade-up" data-aos-delay="100">
            <strong>
              <small class="section-title">
                How can we help you?
              </small>
            </strong>
          </h6>
          <div class="list-group list-group-flush" data-aos="fade-up" data-aos-delay="100">
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('services.monitoring') !!}">
              <h4>Monitoring</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('services.optimisation-and-conversion') !!}">
              <h4>Optimisation and conversion</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('services.maintain') !!}">
              <h4>Maintain</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('services.data-science-and-analytics') !!}">
              <h4>Data science and analytics</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center px-0" href="{!! route('services.support') !!}">
              <h4>Support</h4>
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-4">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-headline" data-aos="fade-up" data-aos-delay="100">
            <h2>Ready to move forward?</h2>
          </div>
          <h5 class="mb-5" data-aos="fade-up" data-aos-delay="100">
            Get in touch for a discovery call
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

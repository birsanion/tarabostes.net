<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a class="navbar-brand" href="{!! route('home') !!}">
          <img src="/img/logo.png" alt="" class="d-inline-block align-text-top">
        </a>
      </div>

      <div>
        <div class="d-flex justify-content-end">
          <a type="button" id="btn-high-contrast" class="blindcontrol cursor-pointer">
            <img src="/img/icon_highcontrast_normal.png"/>
          </a>
          <a type="button" id="btn-text-bigger" class="blindcontrol cursor-pointer">
            <img src="/img/icon_plussizetext_mouseover.png" />
          </a>
          <a type="button" id="btn-text-smaller" class="blindcontrol cursor-pointer">
            <img src="/img/icon_minussizetext_mouseover.png" />
          </a>
        </div>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link text-uppercase" href="{!! route('experience') !!}"><strong>Experience</strong></a></li>
            <li><a class="nav-link text-uppercase" href="{!! route('services') !!}"><strong>Services</strong></a></li>
            <li><a class="nav-link text-uppercase" href="{!! route('solutions') !!}"><strong>Solutions</strong></a></li>
            <li><a class="nav-link text-uppercase" href="{!! route('about') !!}"><strong>About</strong></a></li>
            <li><a class="nav-link text-uppercase" href="{!! route('contact') !!}"><strong>Get in touch</strong></a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </div>
</header>
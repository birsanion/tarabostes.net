<footer>
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
          <div class="footer-content">
            <div class="footer-head">
              <h4 class="text-uppercase"><strong>Quick links</strong></h4>
              <ul>
                <li><a href="{!! route('home') !!}">Home</a></li>
                <li>Company</li>
                <li href="{!! route('contact') !!}">Contact us</li>
                <li>Privacy Policy</li>
                <li>Terms & Conditions</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
          <div class="footer-content">
            <div class="footer-head">
              <h4 class="text-uppercase"><strong>Services</strong></h4>
              <ul>
                <li><a href="{!! route('api-integration') !!}">API Integration</a></li>
                <li><a href="{!! route('design') !!}">Mobile UI/UX Design</a></li>
                <li><a href="{!! route('mobile-development') !!}">Mobile App Development</a></li>
                <li><a href="{!! route('web-development') !!}">Driver Web Development</a></li>
                <li><a href="{!! route('internet-of-things') !!}">Internet of things</a></li>
                <li><a href="{!! route('blockchain-development') !!}">Blockchain Development</a></li>
                <li><a href="{!! route('cloud-consulting') !!}">Cloud Consulting</a></li>
              </ul>
            </div>
          </div>
        </div>

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="footer-content">
          <div class="footer-head">
            <h4 class="text-uppercase"><strong>Abous us</strong></h4>
            <p>Based in Bucharest, Romania, Tarabostes S.A. is recognized as one of top digital solutions providers in Romania. Bringing digital softwares and solutions to manu fields of activities, especialu in education. Tarabostes offers a wide array of expertise and services to ensure clients achieve innovative, stabile and intelligent mobile applications, software and enterprise integrations <a class="text-white" href="{!! route('about') !!}"><strong>...read more</strong></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-area-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="copyright text-center">
            <p class="text-uppercase">
              Copyright &copy; {{ date('Y')}} TARABOSTES is a registred trademark. All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
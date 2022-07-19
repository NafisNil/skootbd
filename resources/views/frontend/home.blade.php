@extends('frontend.layout.index')
@section('title')
    Skoot LTD -  Easy, Comfortable and Affordable ride
@endsection
@section('content')
@include('frontend.layout.slider')
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
  <div class="container">

    <div class="row gy-4">



      <div class="col-xl-4 col-md-12 d-flex offset-md-2" data-aos="zoom-out" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
          <h4><a href="" class="stretched-link">Our Mission</a></h4>
          <p>{!!$mission->desc!!}</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-12 d-flex" data-aos="zoom-out" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
          <h4><a href="" class="stretched-link">Our Vision</a></h4>
          <p>{!!$vision->desc!!}</p>
        </div>
      </div><!-- End Service Item -->

     

    </div>

  </div>
</section><!-- End Featured Services Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>About Us</h2>

    </div>

    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-5">
        <div class="about-img">
          <img src="{{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}}" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-7">
        <h3 class="pt-0 pt-lg-5">{!!@$about->desc!!}</h3>



      </div>

    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="zoom-out">

    <div class="clients-slider swiper">
      <div class="swiper-wrapper align-items-center">
        @foreach ($partner as $key=>$item)
     
        <div class="swiper-slides">  <a href="{{@$item->url}}" target="_blank" rel="noopener noreferrer"> <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" class="img-fluid" alt=""></a> </div>
           
        @endforeach
      </div>
    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Call To Action Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-out">

    <div class="row g-5">

      <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
        <h3>Welcome Message from Us</h3>
        <p> {!!$message->desc!!}</p>
      
      </div>

      <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
        <div class="img">
          <img src="{{(!empty($message->logo))?URL::to('storage/'.$message->logo):URL::to('image/no_image.png')}}" alt="" class="img-fluid">
        </div>
      </div>

    </div>

  </div>
</section><!-- End Call To Action Section -->

<!-- ======= On Focus Section ======= -->
<section id="onfocus" class="onfocus">
  <div class="container-fluid p-0" data-aos="fade-up">

    <div class="row g-0">
      <div class="col-lg-6 video-play position-relative">
        <<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <img src="{{(!empty($message->logo))?URL::to('storage/'.$message->logo):URL::to('image/no_image.png')}}" alt="" style="max-height: 400px;max-width:700px">
      </div>
      <div class="col-lg-6">
        <div class="content d-flex flex-column justify-content-center h-100">
          <h3>Message from Us</h3>
          <p class="fst-italic">
          {!!$message->desc!!}
          </p>
  
       
        </div>
      </div>
    </div>

  </div>
</section><!-- End On Focus Section -->

<!-- ======= Features Section ======= -->
<!-- End Features Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Team</h2>
 
    </div>

    <div class="row gy-5">
        @foreach ($team as $item)
      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
            <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>{{$item->name}}</h3>
            </a>
            <p>{!!$item->speech!!}</p>
          </div>
        </div>
      </div><!-- End Service Item -->
      @endforeach

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Call To Action Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-out">

    <div class="row g-5">

      <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
        <h3>How to Use</h3>
        <p> {!!$rule->desc!!}</p>
      
      </div>

      <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
        <div class="img">
          <img src="{{(!empty($rule->logo))?URL::to('storage/'.$rule->logo):URL::to('image/no_image.png')}}" alt="" class="img-fluid">
        </div>
      </div>

    </div>

  </div>
</section><!-- End Call To Action Section -->

<!-- ======= Pricing Section ======= -->
<!-- End Pricing Section -->

<!-- ======= F.A.Q Section ======= 
<section id="faq" class="faq">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content px-xl-5">
          <h3>Frequently Asked <strong>Questions</strong></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
          </p>
        </div>

        <div class="accordion accordion-flush px-xl-5" id="faqlist">

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                <i class="bi bi-question-circle question-icon"></i>
                Non consectetur a erat nam at lectus urna duis?
              </button>
            </h3>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </div>
            </div>
          </div>

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                <i class="bi bi-question-circle question-icon"></i>
                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
              </button>
            </h3>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div> 

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                <i class="bi bi-question-circle question-icon"></i>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
              </button>
            </h3>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </div>
            </div>
          </div>

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                <i class="bi bi-question-circle question-icon"></i>
                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
              </button>
            </h3>
            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                <i class="bi bi-question-circle question-icon"></i>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div>

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                <i class="bi bi-question-circle question-icon"></i>
                Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
              </button>
            </h3>
            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </div>
            </div>
          </div> # Faq item-->

        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
    </div>

  </div>
<!--</section><End F.A.Q Section -->

<!-- ======= Portfolio Section ======= -->
<!-- End Portfolio Section -->

<!-- ======= Team Section ======= -->

<!-- End Team Section -->

<!-- ======= Recent Blog Posts Section ======= -->


<!-- ======= Contact Section ======= -->

<!-- End Contact Section -->

@endsection
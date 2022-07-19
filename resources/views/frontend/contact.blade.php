@extends('frontend.layout.index')
@section('title')
    Skoot LTD - Team Member
@endsection
@section('content')

<section id="contact" class="contact mt-5">
    <div class="container">
  
      <div class="section-header">
        <h2>Contact Us</h2>
      
      </div>
  
    </div>
  
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1178.069953888202!2d89.560396!3d22.809431699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8fc86783dd17%3A0x1950fa525e94faa!2sSkoot%20-%20Kazi%20Vila!5e1!3m2!1sen!2sbd!4v1658213526408!5m2!1sen!2sbd" frameborder="0" allowfullscreen></iframe>
   
    </div><!-- End Google Maps -->
  
    <div class="container">
  
      <div class="row gy-5 gx-lg-5">
  
        <div class="col-lg-4">
  
          <div class="info" style="background: rgba(237, 239, 203, 0.4)">
            <h3>Get in touch</h3>

  
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
               {!!$contact->address!!}
              </div>
            </div><!-- End Info Item -->
  
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>{{$contact->email}}</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>{{$contact->phonep}}</p>,   <p>{{$contact->phones}}</p>
              </div>
            </div><!-- End Info Item -->
  
          </div>
  
        </div>

        <div class="col-lg-8">
          <form action="{{route('cmessage.store')}}" method="post" role="form" class="">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
             
            </div>
            <div class="text-center"><button class="btn btn-outline btn-success" type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->
        @include('admin.sessionMsg')
      </div>
  
    </div>
  </section>
@endsection
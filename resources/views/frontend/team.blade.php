@extends('frontend.layout.index')
@section('title')
    Skoot LTD - Team Member
@endsection
@section('content')

<section id="team" class="team mt-5">
    <div class="container" data-aos="fade-up">
  
      <div class="section-header">
        <h2>Our Team</h2>
     
      </div>
  
      <div class="row gy-5">
        @foreach ($team as $key=>$item)
        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <div class="social">
                <a href="{{$item->twitter}}"><i class="bi bi-twitter"></i></a>
                <a href="{{$item->facebook}}"><i class="bi bi-facebook"></i></a>
                <a href="{{$item->instagram}}"><i class="bi bi-instagram"></i></a>
                <a href="{{$item->linkedin}}"><i class="bi bi-linkedin"></i></a>
              </div>
              <h4>{{$item->name}}</h4>
              <span>{{$item->designation}}</span>
            </div>
          </div>
        </div><!-- End Team Member -->
  @endforeach
       
  
      </div>
  
    </div>
  </section>
@endsection
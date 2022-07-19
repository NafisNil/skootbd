@extends('frontend.layout.index')
@section('title')
    Skoot LTD - Gallery Details
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{(!empty($gallery_det->logo))?URL::to('storage/'.$gallery_det->logo):URL::to('image/no_image.png')}}" alt="">
              </div>



            </div>
     
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" style="background: rgba(237, 239, 203, 0.4)">
            <h3>Details information</h3>
            <ul>
             
              <li><strong> Date</strong>:{{$gallery_det->created_at}}</li>
              <li><strong>URL</strong>: <a href="{{@$gallery_det->url}}">{{@$gallery_det->url}}</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>{{$gallery_det->title}}</h2>
            {!!$gallery_det->desc!!}
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
@endsection
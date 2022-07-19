@extends('frontend.layout.index')
@section('title')
    Skoot LTD - Gallery
@endsection
@section('content')
<section id="portfolio" class="portfolio mt-5" data-aos="fade-up">

    <div class="container">
  
      <div class="section-header">
        <h2>Gallery</h2>
      
      </div>
  
    </div>
  
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
  
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
        
  
        <div class="row g-0 portfolio-container">
  
            @foreach ($gallery as $key=>$item)
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$item->title}}</h4>
              <a href="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" title="{{$item->title}}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="{{route('gallery_details',$item->id)}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->
  
          @endforeach
  
        </div><!-- End Portfolio Container -->
  
      </div>
  
    </div>
  </section>
@endsection
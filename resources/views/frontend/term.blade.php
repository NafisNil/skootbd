@extends('frontend.layout.index')
@section('title')
    Skoot LTD - Terms and Condition
@endsection
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Terms and Condition</h2>
            <ol>
              <li><a href="{{route('index')}}">Home</a></li>
              <li>Terms and Condition</li>
            </ol>
          </div>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= Blog Section ======= -->
      <section class="inner-page">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Terms and Condition</h2>

          </div>
  
          <p>
            {!! $terms->desc !!}
          </p>
  
        </div>
      </section><!-- End Inner Page -->

@endsection
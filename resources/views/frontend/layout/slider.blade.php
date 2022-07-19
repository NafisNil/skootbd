<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="{{(!empty($slider->logo))?URL::to('storage/'.$slider->logo):URL::to('image/no_image.png')}}" class="img-fluid animated">
      <h2>{{@$slider->title}}</h2>
      <p>{{@$slider->subtitle}}</p>
     
    </div>
  </section>
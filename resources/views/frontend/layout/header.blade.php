<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{route('index')}}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="{{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}}" alt=""> 
      <!--  <h1>HeroBiz<span>.</span></h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="nav-link scrollto"><a href="{{route('index')}}"><span>Home</span> </a>
           
          </li>

          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('gallery_all')}}">Gallery</a></li>
          <li><a class="nav-link scrollto" href="{{route('team_member')}}">Team</a></li>
        
     
         
          <li><a class="nav-link scrollto" href="{{route('contact_us')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="" href="index.html#about"></a>


    </div>
  </header>
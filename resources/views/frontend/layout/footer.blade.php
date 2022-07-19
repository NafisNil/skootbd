<footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img src="{{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}}"  style="max-height: 128px;max-width:128px" alt=""> 
              <p>
             {!!$contact->address!!}
                <br>
                <strong>Phone:</strong> <a href="tel:{{@$contact->phonep}}">{{$contact->phonep}}</a> , <a href="tel:{{@$contact->phones}}">{{$contact->phones}}</a> <br>
                <strong>Email:</strong><a href="mailto:{{$contact->email}}">{{$contact->email}}</a><br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('index')}}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('index')}}">About us</a></li>
          
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('terms.condition')}}">Terms of service</a></li>
           
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services1</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services2</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services3</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services4</a></li>
            
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
       
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>SkootLTD.</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Developed by <a href="https://lab-ar.com">Lab AR</a> <br>
         
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="{{@$credential->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="{{@$credential->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="{{@$credential->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="{{@$credential->skype}}" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="{{@$credential->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>
@extends('layouts.header_footer')


@section('content')
<div class="body">
  {{-- formulaire --}}
<div  class="container">
  <h1 class="intro">Contactez-Nous</h1>
   <div class="content">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3>Send us a message</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone #">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Company</label>
                  <input type="text" class="form-control" name="company" id="company"  placeholder="Company  name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
        {{-- les donnees --}}
        <div class="col-md-4">
          <div class="contact-info h-100">
            
            <h3>Nos coordonnées</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, magnam!</p>
            <ul class="list-unstyled">
              <li class="d-flex">
                
                <span class="wrap-icon icon-room mr-3 text-danger"></span>
                
                <span class="text"> <a href="#"><i class="fa-solid fa-location-dot fa-2x mx-2"></i></a>9757 Aspen Lane South Richmond Hill, NY 11419</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>

                <span  class="text"><a href="#"><i class="fa-solid fa-location-dot fa-2x mx-2"></i></a> +212 06 34 34 54 66</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <span class="text"><a href=""><i class="fa-solid fa-location-dot fa-2x mx-2"></i></a>
                  info@mywebsite.com</span>
              </li>
          
            </ul>
          </div>
        </div>
      </div>
      {{-- google map --}}
      <div class="goglemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.311115706018!2d-8.020036685533041!3d31.652706981326006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67b72626e2242e2e!2sPharmacie%20Sup%20De%20Co!5e0!3m2!1sfr!2sma!4v1650718969071!5m2!1sfr!2sma" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
     </iframe>
    </div>
     
      </div>
    </div>
  
  </div>
    
      
@endsection
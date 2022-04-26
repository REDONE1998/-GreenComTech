@extends('layouts.header_footer')

@section('content')

        {{-- debut de Slider section --}}
        <section class="slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/slider/img1.jpg') }}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Votre solution clés en mains</h5>
                      <a class="btn btn-success p-2" href="#"> Devis Gratuit</a>
                      <a class="btn btn-light p-2" href="#"> Notre produits </a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/slider/img2.jpg') }}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nouvelles solutions intégrées</h5>
                      <a class="btn btn-success p-2" href="#"> Devis Gratuit</a>
                      <a class="btn btn-light p-2" href="#"> Notre produits </a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/slider/img3.jpg') }}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Votre partenaire logiciels</h5>
                      <a class="btn btn-success p-2" href="#"> Devis Gratuit</a>
                      <a class="btn btn-light p-2" href="#"> Notre produits </a>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
             {{-- fin de Slider section --}}



            {{-- debut de l'introduction section--}}
            <section class="introduction-partie">
              <div class="container-fluid">
                <div class="row">
                  <div class=" col-lg-6 col-md-12 col-xl-6">
                    <div class="intro-img">
                        <img src="{{asset('images/introduction/intro2.jpg') }}" class="img-fluid mt-5 mb-5 ms-4">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-xl-6 para">
                    <h2 class="text-uppercase text-success">
                         introduction
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi error omnis voluptate
                       praesentium, obcaecati vel eum ducimus illum nostrum
                       rem voluptates. Repellat quasi ex pariatur saepe, quia amet dolorum numquam Lorem ipsum dolor sit,
                       amet consectetur adipisicing elit. Officiis nisi sunt officia accusamus atque saepe porro quis
                       recusandae necessitatibus alias, sed consequatur. Eaque vero atque 
                       quo beatae eligendi, perspiciatis doloribus.
                      </p>          
                      <a class="text-uppercase btn btn-outline-success p-2" href="{{ asset('devis') }}">demender un devis</a>
                  </div>
                </div> 
              </div>
            </section>
            {{-- fin de l'introduction section --}}


            {{-- debut logiciel section --}}
             <section class="logiciel-partie">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-xl-6 para ">
                    <h2 class="text-uppercase text-warning">
                         logiciel
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi error omnis voluptate
                       praesentium, obcaecati vel eum ducimus illum nostrum
                       rem voluptates. Repellat quasi ex pariatur saepe, quia amet dolorum numquam Lorem ipsum dolor sit,
                       amet consectetur adipisicing elit. Officiis nisi sunt officia accusamus atque saepe porro quis
                       recusandae necessitatibus alias, sed consequatur. Eaque vero atque 
                       quo beatae eligendi, perspiciatis doloribus.
                      </p>          
                      <a class="text-uppercase btn btn-outline-warning p-2 text-center" href="{{asset('contact')}}">contact</a>
                  </div>
                   <div class=" col-lg-6 col-md-12 col-xl-6">
                       <div class="logic-img">
                            <img src="{{asset('images/logiciel/logi1.png') }}" class="img-fluid mt-5 mb-5 ms-4">
                       </div>
                  </div> 
                </div> 
              </div>
             </section> 
            {{-- fin logiciel section --}}

            {{-- debut client section --}}
  
               <section class='feedback '>
                    {{-- heading --}}
                        <div class="feedback-heading ">
                          <h1>Ce que disent nos clients</h1> 
                        </div>
                            {{-- feedback-box-container --}}
                        <div class="feedback-box-container ">
                            {{-- box-1 --}}
                            <div class="feedback-box">
                              {{-- top--}}
                              <div class="bax-top">
                                     {{-- profile --}}
                                    <div class="profile">
                                       <div class="profile-img">
                                        <img src="{{ asset('images/clients/user5.jpg') }}" >
                                      </div>
                                      <div class="client-name">
                                        <strong>M. Ali BIMZZAGH / Directeur </strong>
                                        <span>company<span>
                                      </div>
                                    </div>
                                     {{-- review --}}
                                    <div class="reviews">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="far fa-star"></i>{{-- Empty star--}}
                                    </div>  
                              </div>

                              <div class="client-commentaire">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                  Fuga reprehenderit eius facere odit optio, ex nam vitae ratione error. 
                                  Nesciunt saepe quod quae molestias fuga, minus dolores cumque! Veritatis, officia.</p>
                              </div>

                            </div>

                             {{-- box-2 --}}
                             <div class="feedback-box">
                              {{-- top--}}
                              <div class="bax-top ">
                                     {{-- profile --}}
                                    <div class="profile">
                                       <div class="profile-img">
                                        <img src="{{ asset('images/clients/user4.jpg') }}" >
                                      </div>
                                      <div class="client-name">
                                        <strong>M. Ali BIMZZAGH / Directeur </strong>
                                        <span>company<span>
                                      </div>
                                    </div>
                                     {{-- review --}}
                                    <div class="reviews">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="far fa-star"></i>{{-- Empty star--}}
                                    </div>  
                              </div>

                              <div class="client-commentaire">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                  Fuga reprehenderit eius facere odit optio, ex nam vitae ratione error. 
                                  Nesciunt saepe quod quae molestias fuga, minus dolores cumque! Veritatis, officia.</p>
                              </div>

                            </div>
                             {{-- box-3 --}}
                             <div class="feedback-box">
                              {{-- top--}}
                              <div class="bax-top ">
                                     {{-- profile --}}
                                    <div class="profile">
                                       <div class="profile-img">
                                        <img src="{{ asset('images/clients/user6.png') }}" >
                                      </div>
                                      <div class="client-name">
                                        <strong>M. Ali BIMZZAGH / Directeur </strong>
                                        <span>company<span>
                                      </div>
                                    </div>
                                     {{-- review --}}
                                    <div class="reviews">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="far fa-star"></i>{{-- Empty star--}}
                                    </div>  
                              </div>

                              <div class="client-commentaire">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                  Fuga reprehenderit eius facere odit optio, ex nam vitae ratione error. 
                                  Nesciunt saepe quod quae molestias fuga, minus dolores cumque! Veritatis, officia.</p>
                              </div>

                            </div>
                             {{-- box-1 --}}
                             <div class="feedback-box">
                              {{-- top--}}
                              <div class="bax-top ">
                                     {{-- profile --}}
                                    <div class="profile">
                                       <div class="profile-img">
                                        <img src="{{ asset('images/clients/user1.jpg') }}" >
                                      </div>
                                      <div class="client-name">
                                        <strong>M. Ali BIMZZAGH / Directeur </strong>
                                        <span>company<span>
                                      </div>
                                    </div>
                                     {{-- review --}}
                                    <div class="reviews">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="far fa-star"></i>{{-- Empty star--}}
                                    </div>  
                              </div>

                              <div class="client-commentaire">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                  Fuga reprehenderit eius facere odit optio, ex nam vitae ratione error. 
                                  Nesciunt saepe quod quae molestias fuga, minus dolores cumque! Veritatis, officia.</p>
                              </div>

                            </div>
                          
                           
                                 

                        </div>

              </section>
              



            {{-- fin client section --}}

            
       


@endsection
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    {{-- poppins fonts --}} 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ea00891dc.js" crossorigin="anonymous"></script>
    <title>Software</title>
   
    <style>

.menu-bar{
  /* background-image:linear-gradient(-90deg,#fb4d3d,#ca1551); */
    background-color:#fff;
  }
  
  .nav-link {
   font-size:16px;
   margin:4px;
   color:#000!important;
   font-weight: 500;
   }
 .navbar-nav{
  text-align:right;
  margin-right:20px;

}

 

.menu-bar .navbar-toggler{
 padding-right:20px;
 outline:none!important;
 border:none!important;
}

.nav-link:hover{
font-weight:600;
color:rgb(9, 168, 22)!important;
border-bottom: 1px solid rgb(9, 168, 22)!important ;
}
@media only screen and (max-width:1000px){
.nav-link:hover{
 border:none!important;
}
}
    </style>

    
</head>
<body>
      {{-- le debut de header --}}
      
        <header>   
          <div class="header" id='navigation'>
             <div class="menu-bar ">
               <nav class="navbar navbar-expand-lg navbar-light  ">
                 <div class="container-fluid ">
                   <a class="navbar-brand " href="{{ asset('/') }}"><img src="" ><strong>Green Com Tech</strong></a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse " id="navbarNav">
                     <ul class="navbar-nav ms-auto">
                       <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="{{ asset('/') }}">Acceuil</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="propos">A propos</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="{{ asset('fonctionnalite') }}">Fonctionnalités</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="{{ asset('blog') }}">Blog</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="{{ asset('devis') }}" > <strong>Devis Gratuit</strong> </a>
                       </li>
                       <li class="nav-item">
                         <a class=" btn btn-success mt-2" href="contact">Contact</a>
                       </li>
                     </ul>
                   </div>
                 </div>
               </nav>
             </div>
          </div>
   </header>

   
      
     
      {{-- la fin de header --}}

      @yield('content')

      {{-- le debut de footer --}}
    
      <footer  class="bg-dark text-white pt-5 pb-4">

          <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                 <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Nom de l'entreprise</h5>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Possimus tenetur labore iure natus reiciendis. Iste facilis recusandae asperiores dicta omnis.</p>
              </div>
              
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Produits</h5>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;" >Provider</a>
                </p>
                <p>
                    <a href="#" class="text-white" style="text-decoration: none;" >creativite</a>
                </p>
                 <p>
                     <a href="#" class="text-white" style="text-decoration: none;" >fichier source</a>
                </p>
                 <p>
                     <a href="#" class="text-white" style="text-decoration: none;" >software</a>
                </p>
              </div>


              
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">use ful links</h5>
                <p >
                    <a href="#"  class="text-white" style="text-decoration: none;" > lorem</a>
                </p>
                <p>
                    <a href="#"  class="text-white"  style="text-decoration: none;" >lorem</a>
                </p>
                 <p>
                     <a href="#" class="text-white"  style="text-decoration: none;" >lorem</a>
                </p>
                 <p>
                     <a href="#" class="text-white"  style="text-decoration: none;" >lorem</a>
                </p>
              </div>


              <div class="col-md-4 col-lg-3 col-xl-3  mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning ">contact</h5>
                <p>
                    <i class="fa fa-home me-3"></i> 
                    adresse 
                </p>
                <p>
                     <i class="fa-solid fa-envelope me-3"></i>
                     adresse 
                </p>
                 <p>
                      <i class="fa fa-phone me-3"></i>
                      adresse
                </p>
                 <p>
                      <i class="fa fa-print me-3"></i>
                      adresse
                </p>
              </div>
            </div>
                    <hr class="mb-4">

                    <div class="row align-items-center">
                       <div class="col-md-7 col-lg-8">
                            <p>
                                Copyright <i class="fa-solid fa-copyright"></i> 2022 Al rights reserved by:
                                <a href="" style="text-decoration: none;">
                                  <strong class="text-warning ">Green Com Tech</strong>
                                </a>
                            </p>
                       </div>
                    </div>
          </div>  
    </footer> 
       
      

      {{-- la fin de footer --}}
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
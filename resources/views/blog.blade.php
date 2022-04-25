@extends('layouts.header_footer')

@section('content')
<div class="blog">
  <img class="blogimg" src="{{asset('img/blog.jpg') }}" alt="">
</div>
<div class="blogleft">
  <h1 class="titreblog">
  <b>Le blog de la societe</b>
  ,astuces et articles pratiques
</h1>
<div class="parg">
  GREENCOMTECH est une
   <b>agence logiciel</b>
    située à 
    <b>Marrakech et Casablanca</b>,
     spécialisée dans la 
     <b>création et la refonte</b> 
     de sites internet, le 
     <b>référencement naturel</b>
      et le <b>webmarketing</b>.
       Plusieurs fois par mois, découvrez nos articles de blog sur des
        <b>actualités</b> ou problématiques liées à l’univers du digital comme le
         <b>SEO</b>, les <b>réseaux sociaux</b>, 
         <b>WordPress</b> et le
          <b>webmarketing</b>.
        </div>
        <div class="suivi">
          <h3>Suivre
          <span style="font-weight:200; color:antiquewhite;height:10px">GreenComTech</span>
        </h3>
      </div>
        <div class="reseaux">
          <a href="#"><i class="fab fa-facebook fa-2x mx-2 text-success"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x mx-2 text-info"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin fa-2x mx-2 text-dark"></i></a>
          <a href="#"> <i class="fa-brands fa-instagram-square fa-2x mx-2 text-warning"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube fa-2x mx-2 text-danger"></i></a>
        </div>
     
</div>
@endsection
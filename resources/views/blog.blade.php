@extends('layouts.header_footer')
<body>
@section('content')
{{-- premier dev droite --}}
<section class="debut">
<div class="blog">
  <img class="blogimg" src="{{asset('img/blog.jpg') }}" alt="">
</div>
{{-- div gauche --}}
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
      {{-- les reseaux socieaux --}}
        <div class="reseaux">
          <a href="#"><i class="fab fa-facebook fa-2x mx-2 text-success"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x mx-2 text-info"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin fa-2x mx-2 text-dark"></i></a>
          <a href="#"> <i class="fa-brands fa-instagram-square fa-2x mx-2 text-warning"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube fa-2x mx-2 text-danger"></i></a>
        </div>
     
</div>
</section>
{{-- //articles de blog --}}
 <section class="p-5">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-sm-6" class="article">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
				Mis à jour le 28 mars 2022</span>
			</footer>
      <span class="cats1">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
        </div>
         <div class="col-lg-4 col-sm-6" class="article">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
				Mis à jour le 8 mars 2022</span>
			</footer>
      <span class="cats2">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
        </div>
         <div class="col-lg-4 col-sm-6" class="article">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
				Mis à jour le 1 mars 2022</span>
			</footer>
      <span class="cats3">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
      </div>
        
    </div>
   </div>
</section>
{{-- section2 --}}
  <section class="p-6">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-sm-6">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
				Mis à jour le 28 mars 2022</span>
			</footer>
      <span class="cats4">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
        </div>
         <div class="col-lg-4 col-sm-6">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
				Mis à jour le 8 mars 2022</span>
			</footer>
      <span class="cats5">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
        </div>
         <div class="col-lg-4 col-sm-6">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
				Mis à jour le 1 mars 2022</span>
			</footer>
      <span class="cats6">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
      </div>
        
    </div>
   </div>
</section>
  
  {{-- section3 --}}
  
   <section class="p-7">
   <div>
							<span class="sur_titre">Les + Récents</span>
							<h2 class="sec_title">Les derniers articles</h2>
              </div>
      <div class="container-fluid">
        <div class="row">
        
         <div class="col-lg-4 col-sm-6">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
				Publié le 30 mars 2021</span>
			</footer>
      <span class="cats7">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
        </div>
         <div class="col-lg-4 col-sm-6">
         <img src="{{asset('img/blog.jpg') }}" alt="" class="img-thumbnail"> 
          <footer class="entry-footer">
					<span class="time">
			Publié le 30 mars 2021</span>
			</footer>
      <span class="cats8">
			<a href="https://www.anthedesign.fr/category/referencement/" rel="category tag" class=" btn-outline-dark" >Référencement SEO</a></span>
      <header class="entry-header">
		<h3 class="entry-title"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" rel="bookmark">SEO&nbsp;: les 10 points clés</a></h3>	</header>
      	<div class="entry-content">
		<p>Le SEO&#8230; Vaste sujet que nous avons condensé en 10 points clés&nbsp;!</p>
	</div>
  
	<div class="multi-btns"><a href="https://www.anthedesign.fr/referencement/seo-points-cle/" class="btn btn-outline-secondary">Lire la suite</a></div>
      </div>
      {{-- tables --}}
         <div class="col-lg-4 col-sm-6">
      <table class="table">
      <h1 class="table_titre"> Les categories logiciels</h1>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a class="line_table" href="">Marck</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a class="line_table" href="">Marck</a></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a class="line_table" href="">Marck</a></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a class="line_table" href="">Marck</a></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"> <a class="line_table" href="">Marck</a></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"> <a class="line_table" href="">Marck</a></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"><a class="line_table" href="">Marck</a></td>
      
    </tr>
  </tbody>
</table>
<div class="multi-btns"><a href="https://www.anthedesign.fr/contact/" id="contact_us" class="active">Contactez-nous</a></div>
        </div>
    </div>
   </div>
</section>
  



@endsection
</body>
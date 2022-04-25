
@extends('layouts.app')
{{-- @extends('layouts.header_footer') --}}
@section('content')
<div class="devis">
  <img class="titre" src="{{asset('img/DEMANDEZ-UN-DEVIS-GRATUIT.png') }} " alt="########################">
<h2 class="telephone">+212 334 678 908</h2>
</div>
<div class="devisform">
  <form action="#" method="POST">
    <!-- //permet de cree un cadre de formulaire-->
    <fieldset>
        <!--crerer un petit titre-->
        <legend>Demander un Devis</legend>
        <label>Nom:</label><input class="input" type="text" name="nom" placeholder="votre nom ici" /><br/>
        <label>Prenom:</label><input class="input"  type="text" name="prenom" placeholder="votre prenom ici" /><br/>
        <label>phone:</label><input class="input"  type="number" name="phone" placeholder="votre telephone ici" /><br/>
        <label>Email:</label><input class="input"  type="email" name="mail" placeholder="votre email ici" /><br/>
          <label >Message:</label>
          <textarea  name="message" id="message" cols="30" rows="4"  placeholder="ecrire votre message"></textarea>
          <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
    </fieldset>
</form>
</div>

<div class="goglemap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.311115706018!2d-8.020036685533041!3d31.652706981326006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67b72626e2242e2e!2sPharmacie%20Sup%20De%20Co!5e0!3m2!1sfr!2sma!4v1650718969071!5m2!1sfr!2sma" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>
@endsection
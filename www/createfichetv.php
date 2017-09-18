<?php

include('Fichetv.php');

// le contenu posté est à vérifier
$createfichetv = new Fichetv; // création objet

//selection de la méthode



include('view_header.php');
?>



<div class="row" id ='ligne1'>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <h2> Formulaire de création de fiche tv </h2>
    <form action="createfichetv.php" method="POST">
      <p>
        <ul class="list-unstyled">
          <li> Veuillez entrer le nom de la série </li>
        <input id="name" name="name" type="text"></p>
        <li> Veuillez entrer le slug de la série </li>
        <input id="slug" name="slug" type="text"></p>
        <li> Veuillez entrer une url de photo de la série </li>
        <input id="link" name="link" type="text"></p>
        <li> Veuillez entrer la catégorie de la série </li>
        <input id="categorie" name="categorie" type="text"></p>
        <li> Veuillez entrer le statut de diffusion de la série </li>
        <input id="statut" name="statut" type="text"></p>
        <li> Veuillez entrer le nombre de saisons de la série </li>
        <input id="nombre_saisons" name="nombre_saisons" type="int"></p>
        <li> Veuillez entrer le synopsis de la série </li>
        <textarea id="synopsis" name="synopsis"></textarea>

<li> Confirmer la création de la série merci </li>
        <input type="submit">
      </p>
    </form>
  </div>
</div>

<div class="row" id = 'ligne2'>
  <div class="col-md-4" id ='col1'>
  </div>
    <div class="col-md-4" id ='col2'>
<?php

if(isset($_POST['name']) && isset($_POST['slug']) && isset($_POST['link']) && isset($_POST['categorie']) && isset($_POST['statut']) && isset($_POST['nombre_saisons']) && isset($_POST['synopsis']))
  {
    $name = htmlspecialchars($_POST['name']);
    $slug = htmlspecialchars($_POST['slug']);
    $link = htmlspecialchars($_POST['link']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $statut = htmlspecialchars($_POST['statut']);
    $nombre_saisons = htmlspecialchars($_POST['nombre_saisons']);
    $synopsis = htmlspecialchars($_POST['synopsis']);
    $selectfichetv = $createfichetv->create_fichetv($name,$slug,$link,$categorie,$statut,$nombre_saisons,$synopsis);
    echo 'Vous avez créé une nouvelle fiche';
  }

else {
  echo 'Veuillez remplir tous les champs pour créer une nouvelle série';
}
 ?>

  </div>
  </div>


 <div class="row" id = 'ligne3'>
   <div class="col-md-4" id ='col1'>
   </div>
     <div class="col-md-4" id ='col2'>

 </div>



<?php
include('view_footer.php');
?>

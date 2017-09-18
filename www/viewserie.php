<?php

/*
Ensuite en cliquant sur le lien on affichera la page viewserie.php

Pour afficher une page de la fiche tv
Celle ci affichera tout les champs de la base donné pour la fiche tv voulue
On pourra récuperer les champs avec la variable $_POST.
Le lien contiendra un id
On effectura un select avec mysql avec un where id (via la classe FicheTv et une méthode)

*/
include('Fichetv.php');

// vérification que $_GET n'est pas vide sinon il renvoi vers la page home.php
// a mettre home.php quand on mettra en place les fichiers
if(empty($_GET))
{
 header('Location: index.php'); // renvoi à la page de départ
}

else {
  $idfichetv = $_GET['id'];

  /*echo 'bonjour';
  echo '<br>';
  echo $idfichetv;
  */

$fichetv2 = new Fichetv; // création objet pour récuperer tout les champs d'une fiche tv

$selectallfichetv = $fichetv2->get_fichetv_all($idfichetv);
}

// controle
//var_dump($selectallfichetv);

$lien2='index.php';
include('view_header.php');
?>

<div class="row" id = 'ligne1'>

<div class="col-md-4" id ='col1'>
</div>
<ul class="list-unstyled">
  <div class="col-md-4" id ='col2'>
    <h2><?php echo $selectallfichetv[$idfichetv]['name']; ?></h2>
    <p><?php echo '<img alt="' . $selectallfichetv[$idfichetv]['slug'] . '" width="450px" src="'    . $selectallfichetv[$idfichetv]['link'] .  '">'; ?></p>
    <li> Slug </li>
    <p><?php echo $selectallfichetv[$idfichetv]['slug']; ?></p>
      <li> Catégorie de la série </li>
    <p><?php echo $selectallfichetv[$idfichetv]['categorie']; ?></p>
      <li> Statut de diffusion de la série </li>
    <p><?php echo $selectallfichetv[$idfichetv]['statut']; ?></p>
      <li> Nombre de saisons de la série </li>
    <p><?php echo $selectallfichetv[$idfichetv]['nombre_saisons']; ?></p>
      <li> Synopsis</li>
    <p><?php echo $selectallfichetv[$idfichetv]['synopsis']; ?></p>
</div>
</ul>
</div>




<div class="row" id = 'ligne2'>
  <div class="col-md-4" id ='col1'>
  </div>
    <div class="col-md-4" id ='col2'>

</div>
</div>


<?php
include ('view_footer.php');
 ?>

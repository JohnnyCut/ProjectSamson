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


// le contenu posté est à vérifier
$fichetv = new Fichetv; // création objet
$getallfichetv = $fichetv->get_all_fichetv();

include('view_header.php');
?>

<div class="row" id ='ligne1'>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <h2> Formulaire de mise à jour d'une fiche tv </h2>
    <form  method="POST">

<ul class="list-unstyled">
        <?php foreach ($getallfichetv as $id => $data)
        {
          //echo  '<input id="' . $id . '" name="' . $getallfichetv[$id]['name'] . '" value="' . $id . '" type="radio">';
          //echo  '<li> <input " name= "' . $id . '" value="' . $getallfichetv[$id]['name'] . '" type="radio">' . $getallfichetv[$id]['name'] . '</li>';
          echo  '<li> <input " name= "name" value="' . $getallfichetv[$id]['name'] . '" type="radio">' . $getallfichetv[$id]['name'] . '</li>';
          //echo '<li>' . $getallfichetv[$id]['name'] .'</li>';
            }
        ?>
</ul>
<div class="row" id ='ligne1'>
  <div class="col-md-12">
  </div>



          <input type="submit" value="Confirmer">
        </form>
<?php


    //  var_dump($_POST);
    //  $name = $_POST['name'];
    //  echo $name;


 //$fichetv1 = new Fichetv; // création objet
 //$getallfichetvname = $fichetv1->get_fichetv_all_name($name);
 //var_dump($getallfichetvname);
 //echo $getallfichetvname['name'];
?>

<!--
<input type="text" name="name" value="<?php //echo $getallfichetvname['name']; ?>" />
<input type="text" name="slug" value="<?php //echo $getallfichetvname['slug']; ?>" />
<input type="text" name="link" value="<?php //echo $getallfichetvname['link']; ?>" />
<input type="text" name="categorie" value="<?php //echo $getallfichetvname['categorie']; ?>" />
<input type="text" name="statut" value="<?php //echo $getallfichetvname['statut']; ?>" />
<input type="text" name="nombre_saisons" value="<?php //echo $getallfichetvname['nombre_saisons']; ?>" />
<input type="text" name="synopsis" value="<?php //echo $getallfichetvname['synopsis']; ?>" />
-->

      </div>
    </div>
        </div>



<?php
include ('view_footer.php');
 ?>

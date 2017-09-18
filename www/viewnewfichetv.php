<?php

include('Fichetv.php');
include('view_header.php');

// le contenu posté est à vérifier
$fichetv = new Fichetv; // création objet
$view_all_fichetv = $fichetv->view_all_fichetv();
//test
//var_dump($view_all_fichetv);
?>

<div class="row" id ='ligne1'>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
<ul class="list-unstyled">
<?php

foreach ($view_all_fichetv as $id => $data)
{

    echo '<img width="250px" src="'. $view_all_fichetv[$id]['link'] .'">';
    echo '<li>' . $view_all_fichetv[$id]['name'] .'</li>';
    echo '<li>' . $view_all_fichetv[$id]['categorie'] .'</li>';
    echo '<li>' . $view_all_fichetv[$id]['statut'] .'</li>';
    echo '<li>' . $view_all_fichetv[$id]['nombre_saisons'] .'</li>';
    echo '<li>' . $view_all_fichetv[$id]['synopsis'] .'</li>';

      }
?>
</ul></div>
<div class="row" id ='ligne1'>
  <div class="col-md-12">
  </div>
<?php




  ?>

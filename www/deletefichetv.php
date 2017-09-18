<?php

include('Fichetv.php');

// le contenu posté est à vérifier
$deletefichetv = new Fichetv; // création objet
$getallfichetv = $deletefichetv->get_all_fichetv();

//test

//echo ''. $getallfichetv[1]['name'] .'';
//echo ''. $getallfichetv[2]['name'] .'';

//echo 'bonjour';
//selection de la méthode



include('view_header.php');
?>



<div class="row" id ='ligne1'>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <h2> Formulaire de suppression d'une fiche tv </h2>
    <form action="deleteterminated.php" method="POST">

<ul class="list-unstyled">
        <?php foreach ($getallfichetv as $id => $data)
        {
          //echo  '<input id="' . $id . '" name="' . $getallfichetv[$id]['name'] . '" value="' . $id . '" type="radio">';
          echo  '<li> <input " name= "name" value="' . $getallfichetv[$id]['name'] . '" type="radio">' . $getallfichetv[$id]['name'] . '</li>';
          //echo '<li>' . $getallfichetv[$id]['name'] .'</li>';
            }
        ?>
</ul>
<div class="row" id ='ligne1'>
  <div class="col-md-12">
  </div>



          <input type="submit" value="Effacer">

        </form>
      </div>
    </div>







<div class="row" id = 'ligne2'>
  <div class="col-md-4" id ='col1'>
  </div>
    <div class="col-md-4" id ='col2'>


  </div>
  </div>




 <div class="row" id = 'ligne3'>
   <div class="col-md-4" id ='col1'>
   </div>
     <div class="col-md-4" id ='col2'>




<?php
include('view_footer.php');
?>

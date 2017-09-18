<?php
// controller index.php


//appel de la classe Fichetv
include('Fichetv.php');
include('view_header.php');



// le contenu posté est à vérifier
$fichetv = new Fichetv; // création objet

//selection de la méthode
$selectfichetv = $fichetv->get_fichetv_id_slug_link_name();
//controle avec un var_dump et un echo
//var_dump($selectfichetv);
//echo $selectfichetv[1]['slug'];

$lienviewserie='viewserie.php'; //renvoi vers la fiche de série qu'on veut regarder

?>

<div class="container">






  <div class="container">
        <!-- Example row of columns -->
        <div class="row" id = 'ligne4'>

          <div class="col-md-4">
            <h2><?php echo $selectfichetv[1]['name']; ?></h2>
            <p><?php echo '<img width="250px" src="'. $selectfichetv[1]['link'] .'">'; ?></p>
            <p><?php echo '<a href="'. $lienviewserie . '?id=' . 1 .'">' . $selectfichetv[1]['slug'] . '</a>'; ?></p>
          </div>



          <div class="col-md-4">
            <h2><?php echo $selectfichetv[2]['name']; ?></h2>
            <p><?php echo '<img width="250px" src="'. $selectfichetv[2]['link'] .'">'; ?></p>
                    <p><?php echo '<a href="'. $lienviewserie . '?id=' . 2 .'">' . $selectfichetv[2]['slug'] . '</a>'; ?></p>
          </div>

          <div class="col-md-4">
            <h2><?php echo $selectfichetv[3]['name']; ?></h2>
            <p><?php echo '<img width="250px" src="'. $selectfichetv[3]['link'] .'">'; ?></p>
            <p><?php echo '<a href="'. $lienviewserie . '?id=' . 3 .'">' . $selectfichetv[3]['slug'] . '</a>'; ?></p>
          </div>
        </div>

        <div class="row" id = 'ligne5'>

          <div class="col-md-4">
            <h2><?php echo $selectfichetv[4]['name']; ?></h2>
            <p><?php echo '<img width="250px" src="'. $selectfichetv[4]['link'] .'">'; ?></p>
            <p><?php echo '<a href="'. $lienviewserie . '?id=' . 4 .'">' . $selectfichetv[4]['slug'] . '</a>'; ?></p>
          </div>

          <div class="col-md-4">
            <h2><?php echo $selectfichetv[5]['name']; ?></h2>
            <p><?php echo '<img width="250px" src="'. $selectfichetv[5]['link'] .'">'; ?></p>
            <p><?php echo '<a href="'. $lienviewserie . '?id=' . 5 .'">' . $selectfichetv[5]['slug'] . '</a>'; ?></p>
          </div>

          <div class="col-md-4">
            <h2><?php echo $selectfichetv[6]['name']; ?></h2>
            <p><?php echo '<img width="250px" src="'. $selectfichetv[6]['link'] .'">'; ?></p>
            <p><?php echo '<a href="'. $lienviewserie . '?id=' . 6 .'">' . $selectfichetv[6]['slug'] . '</a>'; ?></p>
          </div>
        </div>
                </div>
  </div>

<?php
include ('view_footer.php');
 ?>

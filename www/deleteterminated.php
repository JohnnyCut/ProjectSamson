bonjour suppresion
<?php


include('Fichetv.php');

// le contenu posté est à vérifier
$deletefichetv = new Fichetv; // création objet
//$delete = $deletefichetv->delete_fichetv();




//var_dump($_POST);
//echo($_POST['name']);

if(isset($_POST['name']))
  {
    $name = $_POST['name'];
    $delete = $deletefichetv->delete_fichetv($name);
    echo 'La série' . $name . 'a été supprimé';
    echo 'Veuillez cliquer ici pour revenir à la page principale';

  }
else {
echo 'zero';
}

?>

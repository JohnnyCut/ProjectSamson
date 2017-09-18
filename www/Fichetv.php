<?php

Class Fichetv // déclaration de la classe en fonction du nom de la table de la DB
{
    private $mysqli ; // cet attribut sert à stocker la connexion à la base de données
    /*
    le constructeur ici sert à créer la connexion à la base de données et
    à l'assigner à l'attribut $mysqli grace à la méta-variable "$this" utilisée comme suit : $this->mysqli

    Ainsi la connexion à la base de données est déclarée seulement une fois et est donc
    simplement et rapidement modifiable
    */
    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'seriedb');
        $this->mysqli->query("SET NAMES 'utf8'");
    }

//méthode qui sélection nom, lien de la photo, et le slug à partir de la table fichetv
    public function get_fichetv_id_slug_link_name() // déclaration de la méthode
    {
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
        $result = $this->mysqli->query('SELECT id, name, link, slug  FROM fichetv');
        while($row = $result->fetch_array())
        {
          $data[$row['id']]['name']  = $row['name'];
          $data[$row['id']]['link']  = $row['link'];
          $data[$row['id']]['slug']  = $row['slug'];
        }
        return $data ;
    }


// méthode qui sélectionne tout les champs de la base pour une fiche tv
  public function get_fichetv_all($idfichetvall) // déclaration de la méthode
    {
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
        $result = $this->mysqli->query('SELECT id, name, slug, link, categorie, statut, nombre_saisons, synopsis  FROM fichetv WHERE id = "' . $idfichetvall . '"');

        while($row = $result->fetch_array())
        {
          $data[$row['id']]['name']  = $row['name'];
          $data[$row['id']]['slug']  = $row['slug'];
          $data[$row['id']]['link']  = $row['link'];
          $data[$row['id']]['categorie']  = $row['categorie'];
          $data[$row['id']]['statut']  = $row['statut'];
          $data[$row['id']]['nombre_saisons']  = $row['nombre_saisons'];
          $data[$row['id']]['synopsis']  = $row['synopsis'];

          }
        return $data ;

    }

//méthode permettant de créer une fiche tv
    public function create_fichetv($name,$slug,$link,$categorie,$statut,$nombre_saisons,$synopsis) // déclaration de la méthode pour ajouter une fiche tv
      {
          // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
          // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
          if($result = $this->mysqli->query('INSERT INTO fichetv (name, slug, link, categorie, statut, nombre_saisons, synopsis)  VALUES
          ("'.$name.'", "'.$slug.'", "'.$link.'", "'.$categorie.'", "'.$statut.'", "'.$nombre_saisons.'", "'.$synopsis.'") '))
          {
            return TRUE;
          }
          else{
            return FALSE;
          }

}

//méthode permettant de supprimer une fiche tv
public function delete_fichetv($namedelete) // déclaration de la méthode
  {
      // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
      // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
      if($result = $this->mysqli->query('DELETE FROM fichetv WHERE name = "' . $namedelete . '"'))
      {
        return TRUE;
      }
      else{
        return FALSE;
      }

}

//méthode permettant de sélectionner le nom de toutes les fiches tv existantes
public function get_all_fichetv() // déclaration de la méthode
{
    // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
    // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
    $result = $this->mysqli->query('SELECT id, name FROM fichetv ');

    while($row = $result->fetch_array())
    {
      $data[$row['id']]['name']  = $row['name'];

      }
    return $data ;

}

//méthode permettant de supprimer une fiche tv
public function view_all_fichetv() // déclaration de la méthode
{
    // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
    // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
    $result = $this->mysqli->query('SELECT id, name, link, categorie, statut, nombre_saisons, synopsis  FROM fichetv');
    while($row = $result->fetch_array())
    {
      $data[$row['id']]['name']  = $row['name'];
      $data[$row['id']]['link']  = $row['link'];
      $data[$row['id']]['categorie']  = $row['categorie'];
      $data[$row['id']]['statut']  = $row['statut'];
      $data[$row['id']]['nombre_saisons']  = $row['nombre_saisons'];
      $data[$row['id']]['synopsis']  = $row['synopsis'];
    }
    return $data ;
}




// méthode qui sélectionne tout les champs de la base pour une fiche tv
  public function get_fichetv_all_name($name) // déclaration de la méthode
    {
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
        $result = $this->mysqli->query('SELECT id, name, slug, link, categorie, statut, nombre_saisons, synopsis  FROM fichetv WHERE name = "' . $name . '"');

        while($row = $result->fetch_array())
        {
          $data[$row['id']]['name']  = $row['name'];
          $data[$row['id']]['slug']  = $row['slug'];
          $data[$row['id']]['link']  = $row['link'];
          $data[$row['id']]['categorie']  = $row['categorie'];
          $data[$row['id']]['statut']  = $row['statut'];
          $data[$row['id']]['nombre_saisons']  = $row['nombre_saisons'];
          $data[$row['id']]['synopsis']  = $row['synopsis'];

          }
        return $data ;

    }



















      }


 // fin de la création de la classe

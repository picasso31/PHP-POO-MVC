<?php

class Model
{
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=gestion_librairie_mvc', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//

public function get_action_login()
{

    
}
    

// ----------------------------------PARTIE LIVRE-----------------------------------------------------------------------//
    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres ORDER BY Nbr_pages_livre  ASC ');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

// -------------------------------PARTIE tirier par titre LIVRE 2 --------------------//
    public function get_par_titre()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Titre_livre FROM livres');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }




    // -------------------------------PARTIE tirier par titre LIVRE  --------------------//
    public function get_par_titre_resultat()
    {
        $choixTitre = $_POST['select_titre'];

        
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Titre_livre FROM livres ');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
      }

    // ----------------------------------PARTIE PAR AUTEUR ------------------------------------------------------------------//
    public function get_par_auteur ()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Prenom_auteur FROM livres');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // ----------------------------------PARTIE EDITEUR --------------------------------------------//
    public function get_par_editeur()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT  Editeur FROM livres');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }









// ----------------------------------PARTIE fournisseurs--------------------------------------------//
public function get_all_fournisseurs()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

// ----------------------------------PARTIE localité --------------------------------------------//
public function get_localite()
{
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Localite FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


// ----------------------------------PARTIE pays--------------------------------------------//
public function get_pays()
{
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Pays FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

// ------raison social---------------

public function get_raison_sociale()
{
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Raison_sociale FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}











// ----------------------------------PARTIE commandes --------------------------------------------//
public function get_all_commandes()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM commandes');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


// ----------------------------------PARTIE editeur --------------------------------------------//
public function get_editeur()
{
    try {
        $requete = $this->bd->prepare('SELECT Editeur FROM livres');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


// ----------------------------------PARTIE editeur --------------------------------------------//
public function get_date_achat()
{
    
    try {
        $requete = $this->bd->prepare('SELECT *FROM commandes  ');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}





//----------------------------------connexion------------------------------//



public function get_home_connect()
{
    $choixTitre = $_POST['connexion'];

    
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT livre FROM home ');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
  }

}


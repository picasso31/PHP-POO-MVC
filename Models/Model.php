<?php

class Model
{
    private $bd; // Variable pour stocker la connexion à la base de données
    private static $instance = null; // Variable statique pour implémenter le modèle de conception Singleton

    private function __construct()
    {
        try {
            // Connexion à la base de données MySQL lors de l'instanciation du modèle
            $this->bd = new PDO('mysql:host=localhost:3307;dbname=gestion_librairie_mvc', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // En cas d'échec de la connexion, affiche une erreur
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    // Fonction statique pour obtenir une instance unique du modèle (Singleton)
    public static function get_model()
    {
        // Si l'instance n'existe pas, créez-la ; sinon, renvoyez l'instance existante
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    // -------------------------------PARTIE HOME--------------------------------------------//

    // Fonction pour récupérer des informations liées à la connexion à la page d'accueil
    // public function get_home_connect()
    // {
        // À définir en fonction de vos besoins
        // Cette fonction semble récupérer des informations liées à la connexion à la page d'accueil
        // Assurez-vous d'ajuster la requête SQL en fonction de la structure réelle de votre base de données
        // try {
        //     $requete = $this->bd->prepare('SELECT DISTINCT livre FROM home'); // Ajuster la requête
        //     $requete->execute();
        // } catch (PDOException $e) {
            // En cas d'erreur lors de l'exécution de la requête, affiche une erreur
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }

    // -------------------------------PARTIE LIVRE-----------------------------------------------------------------------//

    // Fonction pour récupérer toutes les informations sur les livres
    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres ORDER BY Nbr_pages_livre ASC ');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // Fonction pour récupérer par titres dans livres
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

    // Fonction ajouter au boutton a l'interieur de livre par titre 
    public function get_par_titre_resultat()
    {
        $choixTitre = $_POST['titre'];

        try {
            $requete = $this->bd->prepare('SELECT DISTINCT * FROM livres WHERE Titre_livre = :t'); // Ajuster la requête
            // $requete->bindParam(':t', $choixTitre, PDO::PARAM_STR);
            $requete->execute(array(':t'=>$choixTitre));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // Fonction pour récupérer les prénoms d'auteurs distincts
    public function get_par_auteur()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Prenom_auteur FROM livres');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // Fonction pour récupérer les prénoms d'auteurs  dans le boutton
    public function get_par_auteur_resultat()
    {
        $choixauteur=$_POST['prenom-auteur'];

        // Fonction pour récupérer les prénoms d'auteurs  dans le boutton auteur 
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Prenom_auteur = :a');
            $requete->execute(array(':a'=>$choixauteur));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // Fonction pour récupérer les éditeurs distincts des livres
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


    //  boutton  pour récupérer les editeur  
    public function get_par_editeur_resultat()
    {
        $choixediteur=$_POST['par-editeur'];

        // Fonction pour récupérer les prénoms d'auteurs  dans le boutton auteur
        try {                               
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Editeur = :e');
            $requete->execute(array(':e'=>$choixediteur));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // -------------------------------PARTIE fournisseurs  --------------------------------------------//

    // Fonction pour récupérer toutes les informations sur les fournisseurs
    public function get_all_fournisseurs()
    {
        try {
            $requete = $this->bd->prepare('SELECT *  FROM fournisseurs');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // Fonction pour récupérer les localités distinctes des fournisseurs
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

// Fonction pour récupérer les localités distinctes des fournisseurs
public function get_par_localite_resultat()
{
    $choixFournisseur=$_POST['par-localite'];
    try {
        $requete = $this->bd->prepare('SELECT *   FROM fournisseurs WHERE Localite  =:f');
        $requete->execute(array(':f'=>$choixFournisseur));
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


    // Fonction pour récupérer les pays distincts des fournisseurs
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




    // Fonction dans boutton pour récupérer les pays distincts des fournisseurs
    public function get_pays_resultat()
    {
        $choixPays=$_POST['par-pays'];
        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Pays = :p ');
            $requete->execute(array(':p'=>$choixPays));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // Fonction pour récupérer les raisons sociales distinctes des fournisseurs
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


 // Fonction pour récupérer les raisons sociales distinctes des fournisseurs
 public function get_raison_sociale_resultat()
 {
    $choixRaisonSociale=$_POST['par-raison-sociale'];
     try {
                                        // SELECT DISTINCT * FROM livres WHERE Titre_livre = :t'
         $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Raison_sociale = :r');
         $requete->execute(array(':r'=>$choixRaisonSociale));
     } catch (PDOException $e) {
         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
     }
     return $requete->fetchAll(PDO::FETCH_OBJ);
 }


    // -------------------------------PARTIE commandes --------------------------------------------//

    // Fonction pour récupérer toutes les informations sur les commandes
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

    // Fonction pour récupérer les éditeurs de commande ------------------------------------------------------------------//
   

    public function get_editeur_commandes()
    {
        try {
            $requete = $this->bd->prepare('SELECT Editeur FROM `commandes` JOIN `livres` ON `livres`.`id_livre` = `commandes`.`id_commande`');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

// SELECT * FROM `commandes` JOIN `livres` ON `livres`.`Editeur` = `commandes`.`id_commande`

    // Fonction pour récupérer les éditeurs de commande RESULTAT ----------------------------------------------------------------------------------------------//
    public function get_editeur_commandes_resultat()
    {
        $ChoixCommandesEditeur=$_POST['commandes-editeur'];
        try {
            $requete = $this->bd->prepare(' SELECT *FROM commandes JOIN livres ON livres.id_livre = commandes.id_commande WHERE Editeur =:i');
            $requete->execute(array(':i'=>$ChoixCommandesEditeur));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    
    // Fonction pour récupérer toutes les dates d'achat---------------------------------------------------------------------------------------------//
    public function get_date_achat()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM commandes JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.Id_fournisseur');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }




    // / Fonction pour récupérer toutes les dates d'achat---------------------------------------------------------------------------------------------//
    public function get_date_achat_resultat()
    {
        $choixDateAchat=['date-achat'];
        try {
            $requete = $this->bd->prepare('SELECT * FROM commandes WHERE Date_achat =:Ac');
            $requete->execute(array(':Ac'=>$choixDateAchat));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
   // / Fonction pour récupérer toutes les fournisseurs commandes ---------------------------------------------------------------------------------------------//
   public function get_fournisseur_commandes()
   {
    // $choixFournisseurCommande=$_POST['commandes-four'];
       try {
           $requete = $this->bd->prepare('SELECT  Code_fournisseur FROM `fournisseurs` JOIN `commandes` ON `fournisseurs`.`Id_fournisseur` = `commandes`.`id_commande`'); //peut etre faire from commandes
           $requete->execute();
       } catch (PDOException $e) {
           die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
       }
       return $requete->fetchAll(PDO::FETCH_OBJ);
   }


//    Fonction pour récupérer toutes les fournisseurs commandes ---------------------------------------------------------------------------------------------//
   public function get_fournisseur_commandes_resultat()
   {
    $choixFournisseurCommande=$_POST['commandes-four'];
       try {
        // echo ("<br> c'est commandes fournisseurs resultat<br>");
           $requete = $this->bd->prepare('SELECT * FROM commandes JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.id_commande WHERE Code_fournisseur  =:c');
           $requete->execute(array(':c'=>$choixFournisseurCommande));
       } catch (PDOException $e) {
           die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
       }
       return $requete->fetchAll(PDO::FETCH_OBJ);
   }
}
    // -------------------------------PARTIE connexion --------------------------------------------//

    // public function get_connexion()
    // {
    // //  $choixFournisseurCommande=$_POST[' '];
    //     try {
    //      // echo ("<br> c'est commandes fournisseurs resultat<br>");
    //         $requete = $this->bd->prepare('SELECT * FROM commandes JOIN fournisseurs ON fournisseurs.Id_fournisseur = commandes.id_commande WHERE Code_fournisseur  =:c');
    //         $requete->execute(array(':c'=>$choixFournisseurCommande));
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }


    
    // Fonction pour récupérer des informations liées à la connexion à la page d'accueil
    // public function get_login($username, $password)
    // {
    //     try {
    //         $requete = $this->bd->prepare('SELECT * FROM utilisateurs WHERE nom_utilisateur = :username AND mot_de_passe = :password');
    //         $requete->bindParam(':username', $username, PDO::PARAM_STR);
    //         $requete->bindParam(':password', $password, PDO::PARAM_STR);
    //         $requete->execute();
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }

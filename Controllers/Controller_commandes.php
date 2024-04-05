<?php

class Controller_commandes extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }
// -------------------------------function all_commandes----------------------------------------//
    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }
// ------------------------------- editeur_commande----------------------------------------//

    public function action_editeur_commandes()
    {
        echo ("<br> je suis dans editeur _commande :<br>");
        $m=Model::get_model();
        $data=['commandes'=>$m->get_editeur_commandes()];
        $this->render("editeur_commandes",$data);

    }
    

    // ----------------- editeur / boutton commandes resultat ----------------------------//
    public function action_editeur_commandes_resultat()
    {
        
        echo ("<br> je suis dans resultat de commandes :<br>");
        $m=Model::get_model();
        $data=['commandes'=>$m->get_editeur_commandes_resultat()];
        $this->render("editeur_commandes_resultat",$data);

    }

    // ----------------------------commandes_fournisseur---------------------------------------//
    public function action_fournisseur_commandes()
    {
        echo ("<br> c'est commandes_founisseur.php :<br>");
        $m=Model::get_model();
        $data=['commandes'=>$m->get_fournisseur_commandes()];
        $this->render("commandes_fournisseurs",$data);

    }
    // ----------------------------commandes_fournisseur resultat---------------------------------------//
    public function action_fournisseur_commandes_resultat()
    {
        echo ("<br> c'est commandes_fournisseurs_resultat.php :<br>");
        $m=Model::get_model();      
        $data=['commandes'=>$m->get_fournisseur_commandes_resultat()];
        $this->render("commandes_fournisseurs_resultat",$data);

    }


    // ----------------------------DATES---------------------------------------//
    public function action_date_achat()
    {
        echo ("<br> c'est tous les fournisseur :<br>");
        $m=Model::get_model();
        $data=['commandes'=>$m->get_date_achat()];
        $this->render("date_achat",$data);

    }
    // ----------------------------DATES-ACHAT-RESULTAT-------------------------------------------------//

    public function action_date_achat_resultat()
    {
        echo ("<br> c'est date resultat :<br>");
        $m=Model::get_model();
        $data=['commandes'=>$m->get_date_achat()];
        $this->render("date_achat_resultat",$data);

    }

// -----------------------------recherche boutton par titre---------------------------------------//
//     public function action_recherche_par_titre()
// {
//     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_title'])) {
//         // Faire quelque chose avec le titre sélectionné ($_POST['selected_title'])
//         // Par exemple, rediriger vers une nouvelle page avec les résultats de la recherche.
//         header('Location: index.php?action=resultats_recherche&titre=' . urlencode($_POST['selected_title']));
//         exit();
//     }
// }

    

// -----------------------------recherche boutton connexion---------------------------------------//
// public function action_home_connect()
// {
//     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_title'])) {
//         // Faire quelque chose avec le titre sélectionné ($_POST['selected_title'])
//         // Par exemple, rediriger vers une nouvelle page avec les résultats de la recherche.
//         header('Location: index.php?action=resultats_recherche&titre=' . urlencode($_POST['selected_title']));
//         exit();
//     }
// }
}
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
// -------------------------------function commandes----------------------------------------//
    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }
// -------------------------------function editeur----------------------------------------//

    public function action_par_editeur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_editeur()];
        $this->render("par_editeur",$data);

    }

    // ----------------------------fournisseur---------------------------------------//
    public function action_all_fournisseur()
    {
        echo ("<br> c'est tous les fournisseur :<br>");
        $m=Model::get_model();
        $data=['fournisseur'=>$m->get_all_fournisseur()];
        $this->render("all_fournisseur",$data);

    }

    // ----------------------------DATES---------------------------------------//
    public function action_date_achat()
    {
        echo ("<br> c'est tous les fournisseur :<br>");
        $m=Model::get_model();
        $data=['commandes'=>$m->get_date_achat()];
        $this->render("date_achat",$data);

    }
// -----------------------------recherche boutton par titre---------------------------------------//
    public function action_recherche_par_titre()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_title'])) {
        // Faire quelque chose avec le titre sélectionné ($_POST['selected_title'])
        // Par exemple, rediriger vers une nouvelle page avec les résultats de la recherche.
        header('Location: index.php?action=resultats_recherche&titre=' . urlencode($_POST['selected_title']));
        exit();
    }
}

    

// -----------------------------recherche boutton connexion---------------------------------------//
public function action_home_connect()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_title'])) {
        // Faire quelque chose avec le titre sélectionné ($_POST['selected_title'])
        // Par exemple, rediriger vers une nouvelle page avec les résultats de la recherche.
        header('Location: index.php?action=resultats_recherche&titre=' . urlencode($_POST['selected_title']));
        exit();
    }
}
}
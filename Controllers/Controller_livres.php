<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }
// -----------------------------------------action livre tous les livre--------------------------------------------------//
    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }


    // -----------------------------------------------------action par titre -----------------------------------------------------//
    public function action_par_titre()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_titre()];
        $this->render("par_titre",$data);

    }
    // -----------------------------------------------------action boutton par titre_resultat -----------------------------------------------------//
    public function action_par_titre_resultat()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_titre_resultat()];
        $this->render("par_titre_resultat",$data);

    }

// -----------------------------------------------------action par auteur -----------------------------------------------------//

    public function action_par_auteur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_auteur()];
        $this->render("par_auteur",$data);

    }

    
// -----------------------------------------------------action boutton par auteur resultat -----------------------------------------------------//
// boutton dans livres/auteur/
    public function action_par_auteur_resultat()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_auteur_resultat()];
        $this->render("par_auteur_resultat",$data);

    }


    // -----------------------------------------------------action boutton par editeur -----------------------------------------------------//

    public function action_par_editeur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_editeur()];
        $this->render("par_editeur",$data);

    }

    // -----------------------------------------------------action boutton par_editeur_resultat -----------------------------------------------------//

    public function action_par_editeur_resultat()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_editeur_resultat()];
        $this->render("par_editeur_resultat",$data);

    }

}
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
    // -----------------------------------------------------action boutton par titre -----------------------------------------------------//
    public function action_par_titre_resultat()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_titre_resultat()];
        $this->render("par_titre_resultat",$data);

    }



    public function action_par_auteur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_auteur()];
        $this->render("par_auteur",$data);

    }

    public function action_par_editeur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_editeur()];
        $this->render("par_editeur",$data);

    }


    

}
<?php

class Controller_fournisseurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }
// --------------------------acceuil----------------------------//
    public function action_home()
    {
        $this->render('home');
    }
// ----------------------------TOUS LES FOURNISSEURS---------------------------------------------------//
    public function action_all_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);

    }
    
    // -----------------raison sociale----------------------------//
    public function action_raison_sociale()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_raison_sociale()];
        $this->render("raison_sociale",$data);

    }

// ----------------- fournisseurs /raison social-boutton resultat----------------------------//
public function action_raison_sociale_resultat()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_raison_sociale_resultat()];
    $this->render("raison_sociale_resultat",$data);

}

      // -----------------localité----------------------------//

    public function action_localite()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_localite()];
        $this->render("localite",$data);

    }
 // ----------------- localite / boutton localité resultat ----------------------------//
    public function action_par_localite_resultat()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_par_localite_resultat()];
        $this->render("par_localite_resultat",$data);

    }

     // -----------------pays----------------------------//

     public function action_pays()
     {
         $m=Model::get_model();
         $data=['fournisseurs'=>$m->get_pays()];
         $this->render("pays",$data);
 
     }
// -----------------pays_resultat----------------------------//

public function action_pays_resultat()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_pays_resultat()];
    $this->render("pays_resultat",$data);

}





}
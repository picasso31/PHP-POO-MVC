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

    // -----------------raison social----------------------------//
    public function action_raison_sociale()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_raison_sociale()];
        $this->render("raison_sociale",$data);

    }
      // -----------------localié----------------------------//

    public function action_localite()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_localite()];
        $this->render("localite",$data);

    }
     // -----------------pays----------------------------//

     public function action_pays()
     {
         $m=Model::get_model();
         $data=['fournisseurs'=>$m->get_pays()];
         $this->render("pays",$data);
 
     }

   

}
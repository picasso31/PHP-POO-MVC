<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    // -------------------------------------connexion---------------------------------------//
    
    





    

    // ----------------------------DATES---------------------------------------//
    public function action_connexion()
    {
        echo ("<br> c'est LA CONEXION  :<br>");
        $m=Model::get_model();
        $data=['utilisateur'=>$m->get_connexion()];
        $this->render("connexion",$data);

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // public function action_connexion()

    // {
    //     $this->render('login');
    // }

    // public function action_login()
    // {
    //     // Utilisation de la fonction post() au lieu de $_POST
    //     $m = Model::get_model();
    //     $data = ['identification' => $m->get_login($this->$_POST('nom'), $this->$_POST('mdp'))];
        
        // Utilisation de $data lors du rendu de la vue
//         $this->render('login', $data);
//     }

//     public function action_password()
//     {
//         // Utilisation de la fonction post() au lieu de $_POST
//         $m = Model::get_model();
//         $data = ['identification' => $m->get_login($this->$_POST('nom'), $this->$_POST('mdp'))];
        
//         // Utilisation de $data lors du rendu de la vue
//         $this->render('password', $data);
//     }
}

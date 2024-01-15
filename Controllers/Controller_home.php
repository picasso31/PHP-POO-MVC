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
    public function action_connexion()
    {
        $this->render('connexion');

    }
    public function action_login()
    {
        $m=model::get_model();
        $data=['identification'=>$m->get_login($POST['nom'],$_POST('mdp'))];
        $this->render('login');
    }    

  
    // public function action_password()
    // {
    //     $m=model::get_model();
    //     $data=['identification'=>$m->get_login($POST['nom'],$_POST('mdp'))];
    //     $this->render('password');
    // }




}
<?php
namespace app\controllers;
use app\classes\Login;
use app\classes\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        $this->view('admin/index',['title' => 'BetQ']);
    }
    public function store()
    {
        $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        $password = filter_var($_POST['password']);
        $logado = Login::logar($email,$password);
        if($logado){
            return Redirect::to('paniel');
        }
        
        return Redirect::back();
        
    }
    public function home()
    {
        $this->view('admin/index',['title' => 'BetQ']);
    }
}
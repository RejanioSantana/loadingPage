<?php
namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\DataController;

class AdminEdit extends Controller
{
    public function index()
    {
        $this->view('admin/paniel/adminEdit',['title' => 'Configurações da Pagina']);
    }
    public function store()
    {
        // var_dump($_POST);
        DataController::datasUpadate();
    }
}
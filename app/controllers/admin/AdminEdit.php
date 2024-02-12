<?php
namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\DataController;

class AdminEdit extends Controller
{
    public function index()
    {
        $datas = DataController::datas();
        $this->view('admin/paniel/adminEdit',
        ['title' => 'Configurações da Pagina','datas' => $datas]);
    }
    public function store()
    {
        DataController::datasUpadate();
    }
}
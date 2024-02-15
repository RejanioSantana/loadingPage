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
    public function secao1()
    {
        $datas = DataController::datas();
        $this->view('admin/paniel/secao1',
        ['title' => 'Configurações da Pagina','datas' => $datas]);
    }
    public function secao2()
    {
        $datas = DataController::datas();
        $this->view('admin/paniel/secao2',
        ['title' => 'Configurações da Pagina','datas' => $datas]);
    }
    public function secaoForm()
    {
        $datas = DataController::datas();
        $this->view('admin/paniel/secaoForm',
        ['title' => 'Configurações da Pagina','datas' => $datas]);
    }
}
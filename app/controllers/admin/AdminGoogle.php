<?php
namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\DataController;
use app\controllers\SectionControls;

class AdminGoogle extends Controller
{
    public function index()
    {
        SectionControls::section();
        $datas = DataController::datas();
        $this->view('admin/paniel/adminGoogle',
        ['title' => 'Configurações Google','datas' => $datas]);
    }
}
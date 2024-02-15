<?php
namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\SectionControls;

class AdminAdmin extends Controller
{
    public function index()
    {
        SectionControls::section();
        $datas = [
            'name' => $_SESSION['dados']['name'],
            'email' => $_SESSION['dados']['email'],
            'foto' => $_SESSION['dados']['foto']
        ];
        $this->view('admin/paniel/adminAdmin',['title'=>'Administrador', 'datas' => $datas]);
    }
}
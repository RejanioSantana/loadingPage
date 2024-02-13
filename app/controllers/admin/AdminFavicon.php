<?php
namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\DataController;
use app\controllers\SectionControls;

class AdminFavicon extends Controller
{
    public function index()
    {
        SectionControls::section();
        $datas = DataController::dataParam('favicon');
        $this->view('admin/paniel/adminFavicon',['title'=>'Favicon', 'datas' => $datas]);   
    }
}
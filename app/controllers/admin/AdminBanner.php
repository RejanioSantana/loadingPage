<?php
namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\DataController;
use app\controllers\SectionControls;

class AdminBanner extends Controller
{
    public function index()
    {
        SectionControls::section();
        $datas = DataController::dataParam('banner');
        $this->view('admin/paniel/adminBanner',['title'=>'Banner', 'datas' => $datas]);
    }
}
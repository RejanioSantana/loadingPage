<?php
namespace app\controllers\admin;

use app\controllers\Controller;
use app\controllers\DataController;
use app\controllers\SectionControls;

class AdminEmail extends Controller
{
    public function index()
    {
        SectionControls::section();
        $datas =  DataController::capturiesList();
        $this->view('admin/paniel/adminEmail',
        ['title'=> 'Email','datas' => $datas[0],'total_page' => $datas[1]]);
    }
    public function store()
    {
        SectionControls::section();
        DataController::delCaptured();
    }
    public function delLeads()
    {
        SectionControls::section();
        DataController::delAllCaptured();
    }
    public function exportDatas()
    {
        SectionControls::section();
        DataController::fileCaptured();
    }
}
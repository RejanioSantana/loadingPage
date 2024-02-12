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
        echo "<pre>";
        var_dump($datas);                                                  
        echo "</pre>";
        // $this->view('admin/paniel/adminEmail',['title'=> 'Email','datas' => $datas]);
    }
}
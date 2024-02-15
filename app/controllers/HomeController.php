<?php
namespace app\controllers;  
class HomeController extends Controller
{
    public function index()
    {
        $datas = DataController::datas();
        $this->view('index',['title' => 'Ampliva','datas'=>$datas]);
    }
}
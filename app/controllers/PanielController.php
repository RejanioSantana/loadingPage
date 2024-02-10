<?php
namespace app\controllers;  
class PanielController extends Controller
{
    public function index()
    {
        SectionControls::section();
        $this->view('admin/paniel',['title' => 'BetQ']);
    }
}
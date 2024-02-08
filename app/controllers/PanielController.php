<?php
namespace app\controllers;  
class PanielController extends Controller
{
    public function index()
    {
        $this->view('admin/home/index',['title' => 'BetQ']);
    }
}
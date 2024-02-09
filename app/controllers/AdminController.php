<?php
namespace app\controllers;  
class AdminController extends Controller
{
    public function index()
    {
        $this->view('admin/index',['title' => 'BetQ']);
    }
    public function store()
    {
        $this->view('admin/index',['title' => 'BetQ']);
    }
}
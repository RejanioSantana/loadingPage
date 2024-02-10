<?php
namespace app\controllers\admin;

use app\controllers\Controller;

class AdminSectionOne extends Controller
{
    public function index()
    {
        $this->view('admin/paniel/section_one',['title' => 'Seção 1']);
    }
}
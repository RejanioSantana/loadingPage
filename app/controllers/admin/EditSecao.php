<?php
namespace app\controllers\admin;

use app\controllers\DataController;
use app\controllers\SectionControls;

class EditSecao
{
    public function secao1()
    {
        SectionControls::section();
        DataController::updateSecao1();
    }
    public function secao2()
    {
        SectionControls::section();
        DataController::updateSecao2();
    }
    public function form()
    {
        SectionControls::section();
        DataController::updateForm();
    }
    public function meta()
    {
        SectionControls::section();
        DataController::updateMeta();
    }
    public function admin()
    {
        SectionControls::section();
        DataController::updateAdmin();
    }
}
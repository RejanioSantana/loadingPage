<?php
namespace app\controllers\admin;

use app\controllers\DataController;
use app\controllers\SectionControls;

class DelIcon
{
    public function index()
    {
        SectionControls::section();
        $id = $_GET['idicone'];
        DataController::delIcon($id);
    }
}
<?php

namespace app\controllers\admin;

use app\controllers\DataController;
use app\controllers\SectionControls;

class AdminFile
{
    public function store()
    {
        SectionControls::section();
        DataController::addFile();
    }
}
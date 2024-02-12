<?php
namespace app\controllers\admin;

use app\controllers\DataController;

class UploadIcon
{
    public function store()
    {
        DataController::uploadIcon();
    }
}
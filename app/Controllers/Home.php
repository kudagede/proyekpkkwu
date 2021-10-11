<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/templates/header.php');
        echo view('/templates/body.php');
        echo view('/templates/footer.php');
    }
}

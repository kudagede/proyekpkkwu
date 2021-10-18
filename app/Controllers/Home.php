<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "home"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/home.php');
        echo view('/templates/footer.php');
    }


    public function gallery()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "gallery"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/gallery.php');
        echo view('/templates/footer.php');
    }


    public function about()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "about"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/about.php');
        echo view('/templates/footer.php');
    }


    public function interior()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "interior"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/interior.php');
        echo view('/templates/footer.php');
    }


    public function contact()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "contact"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/contact.php');
        echo view('/templates/footer.php');
    }


    public function single()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "single"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/single.php');
        echo view('/templates/footer.php');
    }
}

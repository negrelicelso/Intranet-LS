<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function printpre($data)
    {
        echo '<pre>';
        var_dump($data->id);
    }

    public function testeDB()
    {
        $db = db_connect('default');

        $this->printpre($db->query('SELECT * FROM migrations')->getRowObject());
    }

}

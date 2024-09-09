<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function autenticador()
    {
        $usuarioModel = new UserModel();
        $usuarioLogado = $usuarioModel->find(session('user')['id']);
        session()->set('user', $usuarioLogado);
        return redirect()->to('home');
    }
    
    public function index(): string
    {
        return view('home');
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

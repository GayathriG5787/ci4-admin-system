<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\UserModel;

class Users extends Controller
{

public function index()
{
    $model = new UserModel();

    $data['users'] = $model->findAll();

    return view('users_list', $data);
}

    public function create()
    {
        return view('user_create');
    }

    public function store()
    {
        $model = new UserModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $model->insert($data);

        return redirect()->to('/users');
    }
}
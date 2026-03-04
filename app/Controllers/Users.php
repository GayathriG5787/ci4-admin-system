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

    public function edit($id)
    {
        $model = new \App\Models\UserModel();

        $data['user'] = $model->find($id);

        return view('user_edit', $data);
    }

    public function update($id)
    {
        $model = new \App\Models\UserModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('users'));
    }

    public function delete($id)
    {
        $model = new \App\Models\UserModel();

        $model->delete($id);

        return redirect()->to(base_url('users'));
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
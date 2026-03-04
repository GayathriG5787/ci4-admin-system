<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Users extends Controller
{

    public function index()
    {
        $db = \Config\Database::connect();

        $data['users'] = $db->table('users')->get()->getResult();

        return view('users_list',$data);
    }

    public function create()
    {
        return view('user_create');
    }

    public function store()
    {
        $db = \Config\Database::connect();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $db->table('users')->insert($data);

        return redirect()->to('/users');
    }

}
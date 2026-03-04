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
            'password' => $this->request->getPost('password')
        ];

        $db->table('users')->insert($data);

        return redirect()->to('/users');
    }

}
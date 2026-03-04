<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Admin extends Controller
{
    public function login()
    {
        return view('admin_login');
    }

    public function loginAuth()
    {
        $db = \Config\Database::connect();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $admin = $db->table('admins')
        ->where('email',$email)
        ->where('password',$password)
        ->get()
        ->getRow();

        if($admin)
        {
            session()->set('admin_logged_in',true);
            return redirect()->to('/dashboard');
        }
        else
        {
            return redirect()->back()->with('error','Invalid login');
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
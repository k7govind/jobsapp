<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('templates/header').view('user_login').view('templates/footer');
    }

    public function login() 
    {
        
    }

}
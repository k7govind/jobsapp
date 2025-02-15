<?php

/*namespace App\Controllers;

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

} */


namespace App\Controllers;

use CodeIgniter\Shield\Controllers\LoginController as ShieldLogin;
use CodeIgniter\HTTP\RedirectResponse;

class LoginController extends ShieldLogin
{
    public function index()
    {
        return view('templates/header').view('user_login').view('templates/footer');
    }

    public function login() 
    {
        $response = parent::loginAction();
        if ($response instanceof RedirectResponse) {
            return $response;
        }
        return view('templates/header').view('user_login').view('templates/footer');
    }
}
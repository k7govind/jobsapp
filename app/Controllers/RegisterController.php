<?php
namespace App\Controllers;

use App\Models\MyUserModel;
use App\Entities\MyUserEntity;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('templates/header').view('user_register').view('templates/footer');
    }

    public function register()
    {
        $userModel = new MyUserModel();
        $user = new MyUserEntity();

        $user->fullname = $this->request->getPost('fullname');
        $user->email = $this->request->getPost('emailid');
        $user->setPassword($this->request->getPost('password'));
        $user->phonenumber = $this->request->getPost('phoneno');
        $user->experience = $this->request->getPost('experience');        

        if ($userModel->save($user)) {
            return redirect()->to('/login')->with('success', 'Registration successful');
        } else {
            return redirect()->back()->with('errors', $userModel->errors());
        }
    }
}

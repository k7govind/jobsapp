<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('templates/header').view('user_register').view('templates/footer');
    }

    public function register()
    {
        $userModel = new UserModel();

        // Validation Rules
        $rules = [
            'fullname'    => 'required|min_length[5]',
            'emailid'       => 'required|valid_email|is_unique[users.email]',
            'password'    => 'required|min_length[6]',
            'phoneno' => 'required|numeric|min_length[10]',
            'experience' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Hash Password
        $passwordHash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Save User
        $userModel->save([
            'fullname'    => $this->request->getPost('fullname'),
            'email'       => $this->request->getPost('emailid'),
            'password_hash' => $passwordHash,
            'phonenumber' => $this->request->getPost('phoneno'),
            'experience'  => $this->request->getPost('experience'),
        ]);

        return redirect()->to('/register')->with('success', 'Registration successful!');
    }
}

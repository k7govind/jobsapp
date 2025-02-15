<?php
namespace App\Models;

use CodeIgniter\Shield\Models\UserModel;

class MyUserModel extends UserModel
{
    protected $table = 'myusers';
    protected $primaryKey = 'id';
    protected $returnType = 'App\Entities\MyUserEntity';
    protected $useTimestamps = true;
    protected $allowedFields = ['fullname', 'email', 'password_hash', 'phonenumber', 'experience'];

    // Customize the default field mappings
    protected function mapFields()
    {
        return [
            'username'      => 'fullname',  // Not using 'username', map to fullname instead
            'email'         => 'email',
            'password_hash' => 'password_hash',
            'phonenumber'   => 'phonenumber',
            'experience'    => 'experience'
        ];
    }
}

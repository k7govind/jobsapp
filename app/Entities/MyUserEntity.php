<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class MyUserEntity extends Entity
{
    protected $attributes = [
        'id'           => null,
        'fullname'     => null,
        'email'        => null,
        'password_hash' => null,
        'phonenumber'  => null,
        'experience'   => null,
    ];

    protected $datamap = [
        'password' => 'password_hash'
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = [];

    public function setPassword(string $pass)
    {
        $this->attributes['password_hash'] = password_hash($pass, PASSWORD_DEFAULT);
        return $this;
    }
}

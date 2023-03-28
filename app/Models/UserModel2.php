<?php
namespace App\Models;

class UserModel2 extends \CodeIgniter\Model
{
    protected $table = 'users';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'updated_at','Dateofbirth','Contact','Bio'];

    
}
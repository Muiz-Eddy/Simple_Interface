<?php
namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'users';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'updated_at','Dateofbirth','Contact','Bio'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    

    #so this function basically hash the password before inserting into the database for security reason
    protected function beforeInsert(array $data){ 
        if (isset($data))
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
        return $data;
    }

    #so this function basically hash the password before updating into the database for security reason
    protected function beforeUpdate(array $data){

        if (isset($data))
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
        return $data;
    }

    
}
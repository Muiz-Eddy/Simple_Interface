<?php
namespace App\Validation;

class Login_Rules {

    public function validateUser(string $str, string $fields, array $data) : bool{
        $model = new \App\Models\UserModel;
        $user = $model->where('email', $data['email'])->first();
     
        if(!$user){
          return false;
        }
        return password_verify($data['password'], $user['password']);
      }
    }

?>

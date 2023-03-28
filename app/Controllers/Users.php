<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [];
        if ($this -> request -> getMethod() == 'post') {
            
            $rules = [
				'email' => 'required|min_length[6]|valid_email',
				'password' => 'required|min_length[8]|validateUser[email,password]',
			];

            $errors = [
                'password' => [
                    'validateUser'=> 'Email or Password does not match, please check'
                ]
            ];

            if (! $this -> validate($rules, $errors)) {
                $data['validation'] = $this -> validator;
            }

            else{
                $model = new \App\Models\UserModel;
                
                $user = $model ->where('email', $this->request->getVar('email'))->first();

                $this->setUserMethod($user);

                return redirect()->to('profile2');
            }
        }

        return view('login/login.php', $data);
        
    }

    public function logout() {
        session()->destroy();
        return redirect() -> to('/login');
    }

    private function setUserMethod($user) {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email'=> $user['email'],
            'LoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }
    
}

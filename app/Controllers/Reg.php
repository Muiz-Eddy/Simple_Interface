<?php

namespace App\Controllers;
class Reg extends BaseController
{
    public function index()
    {
        $data = [];

        $fn = 'firstname'; $ln = 'lastname'; $em = 'email'; $pw = 'password'; $cpw = 'confirmpassword';

        if ($this -> request -> getMethod() == 'post') {
            
            $rules = [
                $fn => 'required|min_length[3]',
                $ln => 'required|min_length[3]',
                $em => 'required|valid_email|is_unique[users.email]',
                $pw => 'required|min_length[8]',
                $cpw => 'matches[password]'
            ];

            if (!$this -> validate($rules)) {
                $data['validation'] = $this -> validator;
            }

            else{
                $model = new \App\Models\UserModel;
                
                $userdata = [
                $fn => $this->request->getVar('firstname'), 
                $ln => $this->request->getVar('lastname'), 
                $em => $this->request->getVar('email'), 
                $pw => $this->request->getVar('password'),
                $cpw => $this->request->getVar('confirmpassword')];

                $model -> save($userdata);
                $session = session();
                $session ->setFlashdata('success', 'Successful Registration');
                return redirect() ->to('/login');
            }
        }

        return view('registration/register.php', $data);
    }



    
}
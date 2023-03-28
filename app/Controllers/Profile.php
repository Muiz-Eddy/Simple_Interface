<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {

    $data = [];
    if ($this->request->getMethod() == 'post') {

        $rules = [];
        if($this->request->getPost('Dateofbirth') != '' && $this->request->getPost('Contact') != '' && $this->request->getPost('Bio') != ''){
            $rules['Dateofbirth'] = 'required';
            $rules['Contact'] = 'required';
            $rules['Bio'] = 'required';
        }

        if (!$this -> validate($rules)) {
            $data['validation'] = $this -> validator;
        }else {
            $model = new \App\Models\UserModel2;
            $info = [
                'id' => session() -> get('id'),
                #'Dateofbirth' => $this->request->getPost('Dateofbirth'),
                #'Contact' => $this->request->getPost('Contact'),
                #'Bio' => $this->request->getPost('Bio')
            ];
            if($this->request->getPost('Dateofbirth') != '' && $this->request->getPost('Contact') != '' && $this->request->getPost('Bio') != ''){
                $info['Dateofbirth'] = $this->request->getPost('Dateofbirth');
                $info['Contact'] = $this->request->getPost('Contact');
                $info['Bio'] = $this->request->getPost('Bio');
            }
            
             $model -> save($info);
            
            
            
            
            session()->setFlashdata('success', 'Successfuly Updated');
            return redirect()->to('/profile2');}
        
        

    }

    return view('Profile/profile', $data);
    }
}
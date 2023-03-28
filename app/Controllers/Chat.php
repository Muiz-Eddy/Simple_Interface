<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Chat extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $data = [];   
        if(! session() -> get('LoggedIn')){
         return redirect()-> to('/login');
        }

        if ($this ->request->getMethod() == 'post') {
            $rules = [
                'message' => 'required'
            ];

            if (! $this -> validate($rules)) {
                return $this->fail($this->validator->getErrors());
            }
            else {
                $model = new \App\Models\Message;
                $message = [
                    'firstname' => session()->get('firstname'),
                    'message' => $this->request->getVar('message')
                ];

                $model->save($message);
                
            }
        }
        
        return view('Chat/chat');
    }

    public function message(){
        $model = new \App\Models\Message;
        $data = $model->orderBy('id', 'DESC')->findAll();
        return $this -> respond($data);
    }
}
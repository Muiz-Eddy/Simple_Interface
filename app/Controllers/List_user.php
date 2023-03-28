<?php

namespace App\Controllers;
use App\Models\Users;

class List_user extends BaseController
{
    
    public function index()
    {
        if(! session() -> get('LoggedIn')){
            return redirect()-> to('/login');
           }
        
        $model = new Users();
        $data['row'] = $model->get();
        return view('user/user_data', $data);
    }

    
}

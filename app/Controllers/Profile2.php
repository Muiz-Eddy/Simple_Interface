<?php

namespace App\Controllers;

use App\Models\profilemodel;

class Profile2 extends BaseController
{
    public $dmodel;
    public function __construct() {
        $this->dmodel = new profilemodel();
    }
    
    public function index()
    {
  
    $id = session() -> get('id');

    $data['userdata'] = $this -> dmodel -> getLoggedInUserData($id);
    
    return view('Profile/profile2', $data);
    }

    
}

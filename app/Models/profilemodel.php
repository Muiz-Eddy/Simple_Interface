<?php
namespace App\Models;

class profilemodel extends \CodeIgniter\Model
{  
   

    public function getLoggedInUserdata($id) {
        $extract = $this -> db -> table('users');
        $extract-> where('id',$id);
        $result = $extract->get();

        if(count($result ->getResultArray()) == 1) {
            return $result->getRow();
        }

        else {
            return false;
        }
    }

    
}
<?php
namespace App\Models;

class Users extends \CodeIgniter\Model
{  
    public function get($id = null) {
        $extract = $this->db->table('users');
        if($id != null) {
            $extract->where('id', $id);
        }

        $query = $extract->get();
        return $query;
    }

    
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function showAllRoles(){
    	return $this->all();
    }

    public function storeRole($roleName, $roleDesc){
        $this->role_name = $roleName;
        $this->role_description = $roleDesc;
        return $this->save();
    }

    public function updateRole($roleName, $roleDesc){
    	$this->role_name = $roleName;
    	$this->role_description = $roleDesc;
    	return $this->save();
    }
}

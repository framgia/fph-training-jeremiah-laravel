<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function words(){
        return $this->hasMany('App\Word');
    }

    public function storeCategory($name, $content){
        $this->name = $name;
        $this->content = $content;

        return $this->save();
    }

    public function updateCategory($name, $content){
        $this->name = $name;
        $this->content = $content;
        
        return $this->save();
    }
}

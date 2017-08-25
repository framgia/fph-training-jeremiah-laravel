<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function answers(){
    	return $this->hasOne('App\Answer');
    }

    public function category(){
    	return $this->belongsTo('App\Category', 'categories_id');
    }

    public function storeWord($word, $categoryId){
    	$this->content = $word;
        $this->categories_id = $categoryId;

        return $this->save();
    }

    public function updateWordgit ($word, $categoryId){
    	$this->content = $word;
        $this->categories_id = $categoryId;

        return $this->save();
    }
}

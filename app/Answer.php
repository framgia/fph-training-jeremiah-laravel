<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function word(){
    	return $this->belongsTo('App\Word');
    }

    public function storeAnswer($answer, $wordId){
    	$this->word = $answer;
        $this->word_id = $wordId;

        return $this->save();
    }

    public function updateAnswer($answer, $wordId){
    	$this->word = $answer;
        $this->word_id = $wordId;

        return $this->save();
    }
}

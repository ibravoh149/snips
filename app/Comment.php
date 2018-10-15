<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //fillables

    protected $fillable=['comment','snippet_id','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function snippet(){
        return $this->belongsTo('App\Snippet');
    }
}

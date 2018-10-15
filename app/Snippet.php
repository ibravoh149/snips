<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Snippet extends Model
{
    //fillables

    protected $fillable=[
        'title','slug','body', 'language_id', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }

    public function language(){
        return $this->belongsTo('App\Language');
    }


}

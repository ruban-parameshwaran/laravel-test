<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // to change table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
    

    // one to many inverse

    public function get_post_by_user(){
        return $this->belongsTo(User::class);
    }
}

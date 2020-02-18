<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['comment_user', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

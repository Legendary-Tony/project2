<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // protected $fillable = [
    //     'name',
    //     'commentable_id',
    //     'comment_id',
    //     'post_id'
    // ];

	public function commentable()
    {
        return $this->morphTo();
    }

	public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}

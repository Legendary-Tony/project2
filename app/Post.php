<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'post';
	protected $fillable = ['post', 'image'];

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function categories()
	{
		return $this->belongsToMany(Category::class);
	}

	public function comments()
	{
		return $this->morphMany(Comment::class, 'commentable');
	}

	
}

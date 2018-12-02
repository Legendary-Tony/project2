<?php

namespace count\Events;

use Illuminate\Session\Store;
use Post;

class ViewPostHandler
{
	private $session;

    public function handle(Post $post)
    {
        // Increment the view counter by one...
        $post->increment('count_view');

        // Then increment the value on the model so that we can
        // display it. This is because the increment method
        // doesn't increment the value on the model.
        $post->count_view += 1; 
    }


    // public function __construct(Store $session)
    // {
    //     // Let Laravel inject the session Store instance,
    //     // and assign it to our $session variable.
    //     $this->session = $session;
    // }
}
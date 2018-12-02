<?php

function countComments($comments){
	$count = $comments->count();
		// return $comments[1]->replies->count();
	foreach ($comments as $comment) {
		$count+=count($comment->replies);
		foreach ($comment->replies as $comm) {
			$count+=$comm->replies->count();
		}
	}
	return $count;
}
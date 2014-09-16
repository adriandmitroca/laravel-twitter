<?php

class Post extends Eloquent {

	public function user() {
		return $this->belongsTo('User');
	}

	public function getContentAttribute($content) {
		$pattern = array('/#(\w+)/', '/@(\w+)/');
		$replace = array('#<a href="'.URL::route('home').'/tag/$1">$1</a>', 
		             '@<a href="'.URL::route('home').'/$1">$1</a>');
		return preg_replace($pattern, $replace, $content);		
	}
}

?>
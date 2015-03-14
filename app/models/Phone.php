<?php

class Phone extends \Eloquent {
	protected $fillable = [];

	//这个怎么写呢,好像还是不行，NND
	public function belongsToAuthor(){
//		$aut = Author::find($id);
//		echo $aut->id;
//		echo $this->belongsTo('Author');
		return $this->belongsTo('Author');//这样写难道不行么?
//		return $aut;
	}

}
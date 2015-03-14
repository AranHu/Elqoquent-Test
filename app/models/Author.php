<?php

class Author extends \Eloquent {
	protected $fillable = [];


	public function hasManyBook(){
		return $this->hasMany('Book');//这样出的来么
	}
	public function hasOnephone()
	{
		return $this->hasOne('Phone');//这里默认去冠梁phone表中的外键author_id
		//如果phone中定义的外键不是authoe_id，比如是au_id,则要按照下面的写法，id则代表的是au_id这个字段关联到author表中的那个字段（是为了多主键考虑设计的）
//		return $this->hasOne('Phone','au_id','id');
	}

	public function hasManyPhone(){
		return $this->hasMany('Phone');
	}

	public function belongsToManyBooks(){
		return $this->belongsToMany('Book');
	}
}
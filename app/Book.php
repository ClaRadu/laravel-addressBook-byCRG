<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	//
	protected $fillable = ['name', 'email', 'address', 'country', 'phone'];
	
//	public function user() { return $this->belongsTo('User::class'); }
	public function user() { return $this->belongsTo('app/User'); }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

	public $timestamps = [ 'created_at' ];
	const UPDATED_AT = null;

	protected $fillable = [
		'name', 'country_id'
	];

	public function country(){
		return $this->hasOne('\App\Models\Country','id','country_id');
	}
}

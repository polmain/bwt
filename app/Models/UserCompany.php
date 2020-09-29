<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCompany extends Model
{
    use HasFactory;

	public $timestamps = [ 'created_at' ];
	const UPDATED_AT = null;

	protected $fillable = [
		'user_id',
		'company_id',
	];

	public function company(){
		return $this->hasOne('\App\Models\Company','id','company_id');
	}
}

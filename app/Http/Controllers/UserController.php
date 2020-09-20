<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		$country = 'Canada';

		$users =  User::with(['companies.company'])
			->whereHas('companies',function ($companiesQuery) use ($country){
				$companiesQuery->whereHas('company',function ($companyQuery) use ($country){
					$companyQuery->whereHas('country',function ($countryQuery) use ($country){
						$countryQuery->where('name',$country);
					});
				});
			})
			->get();

		return view('user', compact('users'));
	}
}

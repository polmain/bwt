<?php

namespace Database\Seeders;

use App\Models\UserCompany;
use Illuminate\Database\Seeder;

class UserCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		UserCompany::factory()
			->times(15000)
			->create();
    }
}

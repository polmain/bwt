<?php

namespace Database\Seeders;

use Faker\Provider\ar_SA\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call([
			CountrySeeder::class,
			CompanySeeder::class,
			UserSeeder::class,
		]);
    }
}

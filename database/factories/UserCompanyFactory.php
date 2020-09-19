<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use App\Models\UserCompany;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCompany::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'user_id' => $this->faker->numberBetween(1, User::count()),
			'company_id' => $this->faker->numberBetween(1, Company::count()),
            'created_at' => $this->faker->date
        ];
    }
}

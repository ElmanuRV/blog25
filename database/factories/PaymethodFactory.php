<?php

namespace Database\Factories;

use App\Models\Paymethod;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PaymethodFactory extends Factory
{
    protected $model = Paymethod::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'details' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

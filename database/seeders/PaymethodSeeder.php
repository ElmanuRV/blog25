<?php

namespace Database\Seeders;

use App\Models\Paymethod;
use Illuminate\Database\Seeder;

class PaymethodSeeder extends Seeder
{
    public function run(): void
    {
        Paymethod::Factory()->count(5)->create();

    }
}

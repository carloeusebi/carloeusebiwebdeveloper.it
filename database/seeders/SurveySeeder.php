<?php

namespace Database\Seeders;

use App\Models\Dsp\Survey;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Survey::factory()->count(160)->create();
    }
}

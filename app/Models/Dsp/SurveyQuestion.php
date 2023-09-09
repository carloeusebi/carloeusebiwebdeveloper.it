<?php

namespace App\Models\Dsp;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SurveyQuestion extends Pivot
{
  protected $connection = 'mysql2';
  protected $casts = ['answers' => 'array'];
}

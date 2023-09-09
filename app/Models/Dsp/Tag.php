<?php

namespace App\Models\Dsp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $fillable = ['tag', 'color'];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class);
    }
}

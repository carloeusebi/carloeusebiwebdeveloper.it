<?php

namespace App\Models\Dsp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'name', 'type', 'patient_id'];
    protected $connection = 'mysql2';


    public function deleteFromStorage(): File
    {
        Storage::delete($this->path);
        return $this;
    }
}

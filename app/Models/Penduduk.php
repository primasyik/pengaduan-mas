<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aspirasi;
use App\Models\InputAspirasi;

class Penduduk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class);
    }
    public function input_aspirasi()
    {
        return $this->hasMany(InputAspirasi::class);
    }
    
}

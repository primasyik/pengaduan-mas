<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aspirasi;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    // satu kategori bisa dimiliki oleh banyak aspirasi
    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class);
    }
    public function inputaspirasi()
    {
        return $this->hasMany(InputAspirasi::class);
    }
}

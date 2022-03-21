<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Aspirasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    // -> banyak aspirasi hanya bisa dimiliki oleh satu kategori
    // -> satu kategori bisa dimiliki oleh banyak aspirasi
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}

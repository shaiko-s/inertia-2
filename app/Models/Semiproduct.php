<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semiproduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function nutritional()
    {
        return $this->morphOne(Nutritional::class, 'product');
    }
}

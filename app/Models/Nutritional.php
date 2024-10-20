<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutritional extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_type',
        'calories',
        'protein',
        'fat',
        'carbohydrates',
    ];

    public function product()
    {
        return $this->morphTo();
    }
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutritional extends Model
{
    use HasFactory;

    protected $fillable = [
        'calories',
        'protein',
        'fat',
        'carbohydrates',
        'nutritionalable_id',
        'nutritionalable_type',
    ];

    public function nutritionalable()
    {
        return $this->morphTo();
    }
}

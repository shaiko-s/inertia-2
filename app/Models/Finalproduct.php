<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalproduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'weigth'
    ];
}

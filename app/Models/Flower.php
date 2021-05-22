<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    protected $fillable = [
        'flower_name',
        'flower_type',
        'flower_color',
    ];

    public function getFlowerImageAttribute($value)
    {
        if(env('APP_ENV') == 'prod'){
            return env('AWS_BUCKET_URL').'/storage/Documents/'.$value;
        }
        return env('APP_URL').'/storage/Documents/'.$value;
    }
}

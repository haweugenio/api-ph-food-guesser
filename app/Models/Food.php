<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $guarded = [];

    public function province()
    {
        return $this->belongsTo(Province::class);  // Each food belongs to one province
    }
    
}
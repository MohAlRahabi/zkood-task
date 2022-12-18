<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'o_id' ,
        'o_type' ,
        'path',
        'description'
    ];

    public function o()
    {
        return $this->morphTo();
    }
}

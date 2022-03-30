<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'photo', 'user_id'
    ];

    protected $hidden = [];

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}

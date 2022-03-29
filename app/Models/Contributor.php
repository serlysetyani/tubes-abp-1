<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    protected $table = 'contributor';

    protected $fillable = [
        'username', 'password', 'avatar'
    ];

    protected $hidden = [];

    public function getAvatarAttribute($value)
    {
        return url('storage/' . $value);
    }
}

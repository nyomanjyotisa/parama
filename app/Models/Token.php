<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer',
        'token',
        'edit_token',
        'template',
        'title',
        'description',
        'video',
        'drive',
    ];
}

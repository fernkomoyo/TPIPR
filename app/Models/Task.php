<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillabe = [
        'name',
        'body',
        'user_id'
    ];
    use HasFactory;
}

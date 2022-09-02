<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    // Hak akses user
    protected $fillable = ['name', 'email', 'created_at', 'updated_at'];
    protected $table= 'users';
}

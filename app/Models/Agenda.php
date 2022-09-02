<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    // Hak akses user
    protected $table= 'agenda';
    protected $fillable = ['nama', 'tanggal', 'waktu', 'tempat', 'pelaksana'];
}

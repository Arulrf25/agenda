<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    // Hak akses user
    protected $fillable = ['tanggal', 'nama', 'alamat', 'tujuan', 'keperluan', 'telp'];
    protected $table= 'logbook';
}

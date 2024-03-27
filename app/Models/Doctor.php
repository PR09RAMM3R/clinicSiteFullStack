<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'telefon_raqam', 'photo', 'job', 'ish_vaqti', 'ish_kuni', 'xona_raqami', 'malakasi'];
}

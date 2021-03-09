<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;

    protected $table = 'rayons'; //menghubungkan dengan table rayons

    protected $fillable = ['nama_rayon', 'pembimbing']; //table yang bisa di crud melalui aplikasi
}

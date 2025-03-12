<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerjaPelamar extends Model
{
    protected $table = 'pengalaman_kerja_pelamar';
    protected $guarded = ['id'];
    use HasFactory;
}

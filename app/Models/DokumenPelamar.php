<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPelamar extends Model
{
    protected $table = 'dokumen_pelamar';
    protected $guarded = ['id'];
    use HasFactory;
}

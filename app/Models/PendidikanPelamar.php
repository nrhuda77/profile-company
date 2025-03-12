<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanPelamar extends Model
{
    protected $table = 'pendidikan_pelamar';
    protected $guarded = ['id'];
    use HasFactory;
}

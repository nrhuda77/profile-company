<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPribadiPelamar extends Model
{
    protected $table = 'data_pribadi_pelamar';
    protected $guarded = ['id'];
    use HasFactory;
}

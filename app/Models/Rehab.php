<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehab extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rehab_date',
        'height',
        'weight',
        'sudut',
        'tekanan_depan',
        'tekanan_belakang',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RehabResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'rehab_id',
        'sudut',
        'tekanan_depan',
        'tekanan_belakang',
    ];
}

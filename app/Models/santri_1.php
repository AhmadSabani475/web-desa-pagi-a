<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santri_1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'alamat'
    ];

    protected $table = 'santri_1s';
}

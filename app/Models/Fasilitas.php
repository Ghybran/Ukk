<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table ='fasilitas';
    protected $fillable = [
        'id',
        'bg_umum',
        'bg_vip',
        'bg_reguler',
        'bg_standart',
    ];
}

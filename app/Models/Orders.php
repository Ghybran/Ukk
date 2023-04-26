<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table ='boking';

    protected $fillable = [
        'id',
        'nama_pemesan',
        'chek_in',
        'chek_out',
        'jumlah',
        'email',
        'no_hp',
        'nama_tamu',
        'tipe'
    ];
}

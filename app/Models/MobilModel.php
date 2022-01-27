<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilModel extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $collection = "tb_mobil";
    protected $fillable   = [

        "kendaraan_id",
        "mesin",
        "kapasitas_penumpang",
        "tipe",
        
    ];
}

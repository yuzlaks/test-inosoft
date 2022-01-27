<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorModel extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $collection = "tb_motor";
    protected $fillable   = [

        "kendaraan_id",
        "mesin",
        "tipe_suspensi",
        "tipe_transmisi",
        
    ];
}

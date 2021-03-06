<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class KendaraanModel extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $collection = "tb_kendaraan";

    protected $fillable = [
        "tahun_kendaraan",
        "warna",
        "harga",
        "stock",
    ];
}

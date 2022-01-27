<?php

namespace App\Repositories;

use App\Models\KendaraanModel;
use Illuminate\Http\Request;

class KendaraanRepository
{

    private $kendaraan;

    public function __construct(KendaraanModel $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    public function store(Request $request)
    {
        return $request;
    }
}

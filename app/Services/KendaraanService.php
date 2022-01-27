<?php

namespace App\Services;

use App\Repositories\KendaraanRepository;
use Exception;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class KendaraanService
{

    private $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function store($request)
    {
        return response()->json($request);
    }
    
}
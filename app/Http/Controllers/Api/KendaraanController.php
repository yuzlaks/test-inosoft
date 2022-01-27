<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\KendaraanService;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{

    private $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->middleware('auth:api');
        $this->kendaraanService = $kendaraanService;
    }

    public function index()
    {
        
        $data = $this->kendaraanService->getAll();        
        return $data;

    }

    public function store(Request $request)
    {
        return $this->kendaraanService->store($request);
    }

}

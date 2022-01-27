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
        $data = $request->only([

            "tahun_kendaraan",
            "warna",
            "harga",
            "stock",
            
        ]);

        $result = ['status' => 201];

        try {
            
            $result['data'] = $this->kendaraanService->store($data);

        } catch (\Exception $th) {
            
            $result = [
                'status' => 500,
                'error'  => $th->getMessage()
            ];

        }

        return response()->json($result, $result['status']);
    }

    public function destroy($id)
    {
        $result = ['status' => 200];

        try {

            $result['data'] = $this->kendaraanService->destroy($id);
            
        } catch (\Exception $e) {
            
            $result = [
                "status" => 500,
                "msg" => $e->getMessage()
            ];

        }

        return response()->json($result, $result['status']);

    }

    public function update(Request $request, $id)
    {
        return $request;
    }

}

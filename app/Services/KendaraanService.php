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

    public function getAll()
    {
        return $this->kendaraanRepository->getAll();
    }

    public function store($data)
    {
        $validator = Validator::make($data, [

            "tahun_kendaraan" => 'required|numeric',
            "warna"           => 'required|string',
            "harga"           => 'required|numeric',
            "stock"           => 'required|numeric',

        ]);

        if ($validator->fails()) {

            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->kendaraanRepository->save($data);

        return $result;
    }

    public function destroy($id) : Object
    {
        
        try {
            
            $result = $this->kendaraanRepository->destroy($id);

        } catch (\Exception $th) {
            
            throw new InvalidArgumentException("Data id : $id, Not Found");

        }

        return $result;

    }
}

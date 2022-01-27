<?php

namespace App\Repositories;

use App\Http\Resources\KendaraanResource;
use App\Models\KendaraanModel;

class KendaraanRepository
{

    private $kendaraan;

    public function __construct(KendaraanModel $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    public function getAll() : Object
    {
        $data = $this->kendaraan->all();
        return KendaraanResource::collection($data);
    }

    public function save($request)
    {

        $data = new $this->kendaraan;

        $data->tahun_kendaraan = $request['tahun_kendaraan'];
        $data->warna           = $request['warna'];
        $data->harga           = $request['harga'];
        $data->stock           = $request['stock'];

        $data->save();
        
        return $data->fresh();

    }

    public function update($request, $id) : Object
    {
        
        $data = $this->kendaraan::where('_id', $id)->first();

        $data->tahun_kendaraan = $request['tahun_kendaraan'];
        $data->warna           = $request['warna'];
        $data->harga           = $request['harga'];
        $data->stock           = $request['stock'];

        $data->update();

        return $data;

    }

    public function destroy($id) : Object
    {

        $data = $this->kendaraan::findOrFail($id);

        $data->delete();

        return $data;
        
    }

}

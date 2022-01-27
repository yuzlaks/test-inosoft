<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KendaraanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[

            "id"              => $this->_id,
            "tahun_kendaraan" => $this->tahun_kendaraan,
            "warna"           => $this->warna,
            "harga"           => $this->harga,
            "stock"           => $this->stock,
            "created_at"      => $this->created_at,
            "updated_at"      => $this->updated_at

        ];
    }
}

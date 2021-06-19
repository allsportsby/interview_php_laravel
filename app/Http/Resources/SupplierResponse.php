<?php


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResponse extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'info' => $this->info,
            'rules' => $this->rules,
            'district' => $this->district,
            'url' => $this->url,
            'opening_hours_text' => \json_decode($this->opening_hours_text),
        ];
    }
}

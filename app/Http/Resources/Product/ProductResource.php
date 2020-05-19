<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->detial,
            'price' => $this->price,
            'stock' => $this->stock == 0 ? 'out of stucks' : $this->stock,
            'discount' => $this->discount,
            'totlePrice' => round((1 - $this->discount/100) * $this->price,2),
            'reting' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'not reting yet',
            'href' => [
                'reviews' => route('index' , $this->id)
            ]
        ];
    }
}

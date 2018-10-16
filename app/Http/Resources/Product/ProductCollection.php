<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name' => $this->name,
            'discount' => $this->discount."%",
            'actual_price' => round((1-($this->discount/100)) * $this->price),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('rating')/$this->reviews->count()) : 'Not yet Rated!',
            'href' => [
                'details' => route('products.show', $this->id) 
            ]
        ];
    }
}

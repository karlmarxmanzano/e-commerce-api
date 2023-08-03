<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'sku' => $this->sku,
            'description' => $this->description,
            'qty' => $this->qty,
            'featured' => $this->featured,
            'is_visible' => $this->is_visible,
            'price' => $this->price,
            'published_at' => $this->published_at,
            'sub_category' => $this->whenLoaded('subCategory', fn () => SubCategoryResource::make($this->subCategory)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

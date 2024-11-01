<?php
namespace Domain\Products\Collections;
use Domain\Products\Entities\Product;
use Illuminate\Database\Eloquent\Collection;
class ProductCollection extends Collection
{
    public function isActive(): self
    {
        return $this->filter(function (Product $product) {
            return $product->isActive();
        });
    }

    //return Product::query()->isActive()->get()->toArray();
}


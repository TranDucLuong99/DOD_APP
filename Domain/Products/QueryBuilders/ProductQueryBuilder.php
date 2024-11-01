<?php
namespace Domain\Products\QueryBuilders;
use Illuminate\Database\Eloquent\Builder;
class ProductQueryBuilder extends Builder
{
    public function whereActivated(): self
    {
        return $this->where('is_active', true);
    }

    //return Product::query()->whereActivated();
}

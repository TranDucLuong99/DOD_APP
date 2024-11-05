<?php

namespace App\Scope;

use Illuminate\Database\Eloquent\Builder;

class IsActice
{
    public function __invoke(Builder $builder) : void {
        $builder->where('status', 'active');
    }

}

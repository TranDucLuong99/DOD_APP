<?php

namespace App\Scope;

use Illuminate\Database\Eloquent\Builder;

class HasVerifiedEmail
{
    public function __invoke(Builder $builder) : void {
        $builder->whereNotNull('email_verified_at');
    }
}

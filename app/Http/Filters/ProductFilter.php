<?php

namespace App\Http\Filters;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const PRICE = 'price';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::PRICE => [$this, 'price'],
            self::CATEGORY_ID => [$this, 'category_id'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', '%'. $value .'%');
    }

    public function price(Builder $builder, $value)
    {
        $builder->where('price', $value);
    }

    public function category_id(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
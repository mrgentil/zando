<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Builder;
use App\Category;

class CategoryRepository
{

    public function getBooksCategories()
    {
        return Category::query()->where('order', 3)->get();
    }

    public function getSearchBooksCategories()
    {
        return Category::query()
            ->withCount(['phones as books_count' => function (Builder $q) {
                $q->where('status', 'published');
            }])
            ->where('order', 3)->get();
    }

}

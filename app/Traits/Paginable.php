<?php


namespace App\Traits;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

trait Paginable
{
    /**
     * @param array|Collection $items
     * @param int $perPage
     * @param null $page
     * @param null $baseUrl
     * @param array $options
     * @return LengthAwarePaginator
     */
    private function paginate($items, $perPage = 10, $page = null, $baseUrl = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $lap = new  LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

        if ($baseUrl) {
            $lap->setPath($baseUrl);
        }
        return $lap;
    }
}

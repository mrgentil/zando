<?php


namespace App\Repository;


use App\Phone;
use Illuminate\Http\Request;

class SearchRepository
{

    /**
     * @var string
     */
    public $query = '';

    /**
     * @var array
     */
    public $categories = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var null|integer
     */
    public $min;

    /**
     * @var boolean
     */
    public $free = false;

    /**
     * @param Request $request
     * @return Phone[]
     */
    public function findSearch(Request $request)
    {
        $books  = $this->getSearchQuery($request);
        return ($books->paginate(20))->withPath(request()->fullUrl());
    }

    /**
     * @param Request $request
     * @return integer[]
     */
    public function finMinMax(Request $request)
    {
        $results = $this->getSearchQuery($request, true)
            ->selectRaw('MIN(price) as min')
            ->selectRaw('MAX(price) as max')
            ->get();
        return [$results[0]->min, $results[0]->max];
    }

    private function getSearchQuery(Request $request, $ignorePrice = false)
    {
        $query = $request->query('query');
        $phones = (new Phone())->newQuery();

        if (!empty($request->query) && $ignorePrice === false) {
            $phones = Phone::query()->search($query, null, true, true);
        }

        if (!empty($request->min) && $ignorePrice === false) {
            if ((!empty($request->max) && $request->min < $request->max) || empty($request->max)) {
                $phones = $phones->whereRaw('price >= ' . $request->min);
            }
        }

        if (!empty($request->max)) {
            $phones = $phones->whereRaw('price <= ' . $request->max);
        }

        if (!empty($request->categories)) {
            $phones = $phones->whereIn('category_id', $request->categories);
        }

        if (!empty($request->status)) {
            $phones = $phones->where('status', 'published');
        }
        return $phones;
    }
}

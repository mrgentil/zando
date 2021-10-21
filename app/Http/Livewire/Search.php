<?php

namespace App\Http\Livewire;

use App\Category;
use App\Color;
use App\Phone;
use App\Price;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $query;
    public $brand;
    public $price;
    public $sort;
    public $color;

    protected $updatesQueryString = ['query' => ['except' => ''],
        'brand' => ['except' => ''], 'price' => ['except' => ''], 'sort' => ['except' => ''], 'color' => ['except' => '']];

    public function mount()
    {
        $this->query = request()->query('query');
        $this->brand = request()->query('brand');
        $this->price = request()->query('price');
        $this->sort = request()->query('sort');
        $this->color = request()->query('color');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function search()
    {
        $this->findSearch($this->query);
    }

    /**
     * @param $query
     * @return Builder
     */
    private function findSearch($query)
    {
        $statement = Phone::search($query, null, true, true)
            ->with(['category', 'type']);

        if (!empty($this->sort)) {
            if ($this->sort === 'title-ascending') {
                $statement = $statement->orderBy('name');
            } elseif ($this->sort === 'title-descending') {
                $statement = $statement->orderByDesc('name');
            } elseif ($this->sort === 'price-ascending') {
                $statement = $statement->orderBy('price');
            } elseif ($this->sort === 'price-descending') {
                $statement = $statement->orderByDesc('price');
            } elseif ($this->sort === 'created-descending') {
                $statement = $statement->orderByDesc('created_at');
            } elseif ($this->sort === 'created-ascending') {
                $statement = $statement->orderByDesc('created_at');
            } else {
                $statement = $statement->orderBy('name');
            }
        } else {
            $statement = $statement->orderBy('name');
        }

        return $statement;
    }

    public function render()
    {
        $statement = $this->findSearch($this->query);

        if (!empty($this->price)) {
            $price = explode('-', $this->price);
            if($price[0] === 'under'){
                $statement = $statement->where('price', '<', $price[1]);
            }elseif ($price[0] === 'over'){
                $statement = $statement->where('price', '>', $price[1]);
            }else{
                $statement = $statement->where('price', '>=', $price[0])->where('price', '<=', $price[1]);
            }
        }

        if(!empty($this->color)){
            $statement = $statement->whereHas('colors', function (Builder $builder) {
                $builder->where('code', '#' . $this->color);
            });
        }

        if (!empty($this->brand)) {
            $statement = $statement->whereHas('category', function (Builder $builder) {
                $builder->where('slug', $this->brand);
            });
        }

        return view('livewire.search', [
            'colors' => Color::query()->get(),
            'prices' => Price::query()->get(),
            'categories' => Category::query()->get(),
            'phones' => $statement->paginate(20)
        ]);
    }
    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Phone;
use App\Repository\BlogRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    /**
     * Create a new controller instance.
     *
     * @param BlogRepository $blogRepository
     */
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::query()
            ->inRandomOrder()
            ->with(['phones.type'])
            ->get();
        $categories2 = Category::query()
            ->where('slug', 'samsung')
            ->Orwhere('slug', 'tecno')
            ->Orwhere('slug', 'iphone')
            ->inRandomOrder()
            ->with(['phones.type'])
            ->get();
        $phones = Phone::query()
            ->where('status', true)
            ->with('type')
            ->inRandomOrder()->get()->take(12);
        $posts = $this->blogRepository->getLatest(4);
        return view('welcome', compact('categories', 'phones', 'posts', 'categories2'));
    }
}

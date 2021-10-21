<?php

namespace App\Http\Controllers;

use App\Repository\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    /**
     * BlogController constructor.
     * @param BlogRepository $blogRepository
     */
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $posts = $this->blogRepository->getLatest(12);

        return view('posts.index', compact('posts'));
    }

    public function show($id, $slug)
    {
        $post = $this->blogRepository->getPost($slug, $id);
        return view('posts.show', compact('post'));
    }
}

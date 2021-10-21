<?php

namespace App\Repository;
use App\Category;
use App\Post;

class BlogRepository
{

    public function getLatest(?int $limit = 10)
    {
        return Post::query()
            ->with(['category', 'comments'])
            ->where('status', 'published')
            ->paginate($limit);
    }

    public function getPost(string $slug, int $id)
    {
        return Post::query()
            ->with(['category', 'user'])
            ->where('status', 'published')
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getPreviousRecord(string $slug)
    {
        $id = $this->getPostIdFromSlug($slug);
        return Post::query()
            ->where('status', 'PUBLISHED')
            ->where('id', '<', $id)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function getNextRecord(string $slug)
    {
        $id = $this->getPostIdFromSlug($slug);
        return Post::query()
            ->where('status', 'PUBLISHED')
            ->where('id', '>', $id)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function getRelatedPosts(string $slug, string $category_id, ?int $limit = 4)
    {
        $id = $this->getPostIdFromSlug($slug);

        return Post::query()
            ->where('status', 'PUBLISHED')
            ->where('category_id', $category_id)
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getPostIdFromSlug(string $slug)
    {
        return $id = explode('-', $slug)[0];
    }


    public function getPopularPosts(int $limit = 5, string $direction = 'desc')
    {
        return Post::orderByViews($direction)->limit($limit)->get();
    }

    public function getBlogCategories()
    {
        return Category::query()->where('order', 1)->orderBy('name')->get();
    }
}

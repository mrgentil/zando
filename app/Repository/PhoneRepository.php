<?php


namespace App\Repository;


use App\Phone;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class PhoneRepository
{


    public function getPhones(?int $limit = 9)
    {
        return Phone::query()->with(['user', 'category'])
            /*->where('active', 'active')*/
            ->orderBy('id', 'desc')
            ->paginate($limit);
    }

    public function getPhoneByCategory(string $category, ?int $limit = 9)
    {
        return Phone::query()
            ->whereHas('category', function (Builder $builder) use ($category) {
                $builder->where('slug', $category);
            })
            ->orderBy('id', 'desc')
            /*->where('active', 'active')*/
            ->paginate($limit);

    }

    public function getPhone(string $slug)
    {
        return Phone::query()
            ->with(['category', 'type', 'colors'])
            ->where('status', true)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getRelatedPhones(int $id, string $category_id, ?int $limit = 4)
    {

        return Phone::query()
            ->with('type')
            ->where('category_id', $category_id)
            ->where('status', true)
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getPhoneIdFromSlug(string $slug)
    {
        return $id = explode('-', $slug)[0];
    }

    public function getPreviousRecord(int $id)
    {
        return Phone::query()
            ->where('status', true)
            ->where('id', '<', $id)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function getNextRecord(int $id)
    {
        return Phone::query()
            ->where('status', true)
            ->where('id', '>', $id)
            ->orderBy('id', 'desc')
            ->first();
    }


    public function getNameByCategory(string $category)
    {
        return (Category::query()->select('name')->where('slug', $category)->first())->name;
    }

    public function getUsersPhones()
    {
        return Phone::query()->with(['category'])
            /* ->where('active', 'active')*/
            ->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    /*    public function store(Request $request)
        {
            if ($request->hasFile('file')) {
                $image = $this->handleImage($request->file('file'), 'books');
            }else{
                $image = $request->get('status') === 'PAYANT' ? 'books' . DIRECTORY_SEPARATOR . 'paying.jpg' : 'books' . DIRECTORY_SEPARATOR . 'free.jpg';
            }
            $file = $this->handleFile($request, 'books');

            Book::query()->create([
                'title' => $request->get('title'),
                'slug' => str_slug($request->get('title')),
                'description' => $request->get('description'),
                'file' => $image,
                'cost' => $request->get('status') === 'PAYANT' ? $request->get('cost') : null,
                'status' => $request->get('status'),
                'category_id' => $request->get('category_id'),
                'pdf' => $file,
                'user_id' => auth()->user()->id
            ]);
        }*/

    /*public function update(int $id, Request $request)
    {
        $query = Book::query()->where('id', $id);

        $query->update([
            'title' => $request->get('title'),
            'slug' => str_slug($request->get('title')),
            'description' => $request->get('description'),
            'cost' => $request->get('status') === 'PAYANT' ? $request->get('cost') : null,
            'status' => $request->get('status'),
            'category_id' => $request->get('category_id'),
        ]);

        if ($request->hasFile('file')) {
            $image = $this->handleFile($request, 'books');
            $query->update([
                'file' => $image,
            ]);
            $this->deleteFileIfExists($image);
        }
        if ($request->hasFile('pdf')) {
            $file = $this->handleFile($request, 'books');

            $file = json_decode($this->$file);
            foreach ($file as $f) {
                $this->deleteFileIfExists($f->download_link);
            }
            $query->update([
                'pdf' => $file,
            ]);
        }
    }*/
}

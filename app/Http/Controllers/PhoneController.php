<?php

namespace App\Http\Controllers;

use App\Phone;
use App\Repository\PhoneRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * @var PhoneRepository
     */
    private $phoneRepository;

    /**
     * PhoneController constructor.
     * @param PhoneRepository $phoneRepository
     */
    public function __construct(PhoneRepository $phoneRepository)
    {
        $this->phoneRepository = $phoneRepository;
    }

    public function index($category)
    {
        $phones = Phone::query()->with('type')
            ->whereHas('category', function (Builder $builder) use ($category) {
            $builder->where('slug', $category);
        })->orderBy('id', 'desc')->paginate(20);

        return view('phone.index', compact('phones', 'category'));
    }

    public function show(string $slug)
    {
        $phone = Phone::query()
            ->with(['category', 'type', 'colors', 'user'])
            ->where('status', true)
            ->where('slug', $slug)
            ->firstOrFail();
        $related_phones = $this->phoneRepository->getRelatedPhones($phone->id, $phone->category_id, 8);
        $next = $this->phoneRepository->getNextRecord($phone->id);
        $previous = $this->phoneRepository->getPreviousRecord($phone->id);

        return view('phone.show', compact('phone', 'related_phones', 'next', 'previous'));
    }
}

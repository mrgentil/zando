<?php

namespace App\Http\Controllers\Dashboard;

use App\Color;
use App\Http\Controllers\Controller;
use App\Phone;
use App\Type;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Validator;
use App\Traits\Imageable;
use App\Traits\Objectable;
use App\Traits\Removable;
use Illuminate\Support\Facades\Gate;

class PhoneController extends Controller
{
    use Objectable, Removable, Imageable;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $status = \request()->query('status');
        $feedback_text = "Vous n'avez aucun téléphone pour l'instant";

        $phones = Phone::query()
            ->where('user_id', auth()->user()->id)
            ->orderByDesc('id');

        if (isset($status) && !empty($status)) {
            if ($status === 'active') {
                $phones = $phones->where('status', true);
                $feedback_text = "Vous n'avez aucun téléphone validé pour l'instant";
            } else {
                $feedback_text = "Vous n'avez aucun téléphone en attente de validation pour l'instant";
                $phones = $phones->where('status', false);
            }
        }
        $phones = $phones->get();
        return view('dashboard.phone.index', compact('phones', 'feedback_text'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::query()->get();
        $colors = Color::query()->get();
        $types = Type::query()->get();
        return view('dashboard.phone.create', compact('categories', 'types', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->image;
        $rules = [
            'name' => 'required|string|min:3',
            'price' => 'required|numeric',
            'description' => 'required|string|min:3',
            'caracteristiques' => 'required|string|min:3',
            'stock' => 'required|numeric|min:1',
            'colors.*' => 'nullable|numeric|exists:colors,id',
            'category_id' => 'required|numeric|exists:categories,id',
            'type_id' => 'required|numeric|exists:types,id',
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!isset($files)) {
            $validator->addFailure('image', 'required');
        } elseif (isset($files) && sizeof($files) > 5) {
            $validator->addFailure('image', 'max_image');
        }

        $images = [];
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        if (is_object($files)) {
            foreach ($files as $file) {
                if (is_file($file) && in_array(mime_content_type($file->getPathName()), $allowedMimeTypes)) {
                    $options = ["resize" => ["width" => "800", "height" => "568"], "quality" => "60%", "upsize" => true, "thumbnails" => [["name" => "cropped", "crop" => ["width" => "265", "height" => "300"]]]];
                    $name = $this->handleImage($file, 'phones', $this->arrayToObject($options));
                    $images[] = $name;
                } else {
                    $validator->addFailure('image', 'image');
                    break;
                }

            }
        }
        $validator->validate();

        $phone = Phone::query()->create([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'price' => $request->price,
            'description' => $request->description,
            'caracteristiques' => $request->caracteristiques,
            'stock' => $request->stock,
            'status' => false,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'user_id' => auth()->user()->id,
            'image' => json_encode($images)
        ]);
        $phone->colors()->sync($request->input('colors'));
        flash('Téléphone ajouté avec succès')->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Phone $phone)
    {
        dd($phone);
        Gate::authorize('can-view-phone', $phone->user_id);
        return view('dashboard.phone.show', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $phone = Phone::query()->with(['colors', 'type', 'category'])->findOrFail($id);
        Gate::authorize('can-edit-phone', $phone->user_id);

        $categories = Category::query()->get();
        $colors = Color::query()->get();
        $types = Type::query()->get();
        $color_ids = [];

        foreach ($phone->colors as $color) {
            array_push($color_ids, $color->id);
        }
        return view('dashboard.phone.edit',
            compact("categories", "colors", 'types', 'phone', 'color_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        Gate::authorize('can-update-phone', $phone->user_id);

        $files = $request->image;
        $rules = [
            'name' => 'required|string|min:3',
            'price' => 'required|numeric',
            'description' => 'required|string|min:3',
            'caracteristiques' => 'required|string|min:3',
            'stock' => 'required|numeric|min:1',
            'colors.*' => 'nullable|numeric|exists:colors,id',
            'category_id' => 'required|numeric|exists:categories,id',
            'type_id' => 'required|numeric|exists:types,id',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($files) {
            if (!isset($files)) {
                $validator->addFailure('image', 'required');
            } elseif (isset($files) && sizeof($files) > 5) {
                $validator->addFailure('image', 'max_image');
            }

            $images = [];
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            if (is_object($files)) {
                foreach ($files as $file) {
                    if (is_file($file) && in_array(mime_content_type($file->getPathName()), $allowedMimeTypes)) {
                        $options = ["resize" => ["width" => "800", "height" => "568"], "quality" => "60%", "upsize" => true, "thumbnails" => [["name" => "cropped", "crop" => ["width" => "265", "height" => "300"]]]];
                        $name = $this->handleImage($file, 'phones', $this->arrayToObject($options));
                        $images[] = $name;
                    } else {
                        $validator->addFailure('image', 'image');
                        break;
                    }

                }
            }
        }

        $validator->validate();

        $phone->update([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'price' => $request->price,
            'description' => $request->description,
            'caracteristiques' => $request->caracteristiques,
            'stock' => $request->stock,
            'status' => false,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'user_id' => auth()->user()->id,
        ]);

        $phone->colors()->sync($request->input('colors'));
        flash('Téléphone mis à jour avec succès')->success();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Phone $phone
     * @return void
     */
    public function destroy(Phone $phone)
    {
        Gate::authorize('can-destroy-phone', $phone->user_id);
        //
    }
}

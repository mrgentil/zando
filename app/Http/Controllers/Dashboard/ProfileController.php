<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Traits\Imageable;
use App\Traits\Objectable;
use App\Traits\Removable;
use Illuminate\Http\Request;
use App\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use Objectable, Removable, Imageable;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accounts = Account::query()->get();
        return view('dashboard.profile.edit', compact('accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $rules = [
            'name' => 'required|string|min:3',
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required|email|min:3',
            'password' => 'nullable|min:8',
            'whatsapp' => 'required|string|min:10',
            'account_id' => 'required|string',
            'avatar' => 'image|mimes:jpeg,png,jpg|nullable',
        ];
        $validator = Validator::make($request->all(), $rules);
        $validator->validate();

        auth()->user()->update([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'account_id' => $request->account_id,
        ]);

        if ($request->get('password')) {
            auth()->user()->update([
                'password' => Hash::make($request->password)
            ]);
        }

        if ($request->hasFile('avatar')) {
            $options = [
                'thumbnails' => [
                    [
                        'name' => 'cropped',
                        'crop' => [
                            'width' => 250,
                            'height' => 250,
                        ]
                    ]
                ]
            ];
            $this->deleteFileIfExists(auth()->user()->avatar);
            $avatar = $this->handleImage($request->file('avatar'), 'users', $this->arrayToObject($options));
            auth()->user()->update([
                'avatar' => $avatar
            ]);
        }

        flash('Profil mis à jour avec succès')->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

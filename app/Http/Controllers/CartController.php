<?php

namespace App\Http\Controllers;

use App\Phone;
use App\Repository\CartRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @var CartRepository
     */
    private $cartRepository;

    /**
     * CartController constructor.
     * @param CartRepository $cartRepository
     */
    public function __construct(CartRepository $cartRepository)
    {
        $this->middleware('auth');
        $this->cartRepository = $cartRepository;
    }

    public function index()
    {
        return view('cart.index');
    }

    public function add_to_cart(Request $request, Phone $phone)
    {
       $this->cartRepository->add($request,$phone);

        flash('Téléphone ajouté au panier avec succès. <a class="alert-link" href="' . route('cart.index') . '"> Voir le contenu du panier</a>')->success();
        return redirect()->back();
    }

    public function remove_to_cart(string $id)
    {
        \Cart::session(auth()->user()->id)->remove($id);
        flash('Téléphone retiré du panier avec succès')->success();
        return redirect()->back();
    }
}

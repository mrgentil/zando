<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckOutRequest;
use App\Repository\OrderRepository;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    /**
     * CheckoutController constructor.
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->middleware('auth');
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        if (\Cart::session(auth()->user()->id)->isEmpty()) {
            flash('Votre panier est vide.');
            return redirect()->route('phone.index');
        }

        return view('checkout.index');
    }

    public function store(CheckOutRequest $request)
    {
        if (\Cart::session(auth()->user()->id)->isEmpty()) {
            flash('Votre panier est vide.');
            return redirect()->back();
        }

        $items = \Cart::session(auth()->user()->id)->getContent();
        $this->orderRepository->store(
            $items, $request->first_name, $request->last_name,
            $request->email, $request->phone, $request->address,
            $request->city, $request->company_name, $request->comment);

        flash('Achat effectué avec succès');
        return redirect()->route('account.index');
    }
}

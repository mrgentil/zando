<?php

namespace App\Http\Controllers;

use App\Phone;
use App\Http\Requests\PhoneRequest;
use App\Http\Requests\ProfileRequest;
use App\Order;
use App\Repository\PhoneRepository;
use App\Repository\OrderRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use TCG\Voyager\Models\Category;

class AccountController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;
    /**
     * @var PhoneRepository
     */
    private $phoneRepository;

    /**
     * AccountController constructor.
     * @param OrderRepository $orderRepository
     * @param PhoneRepository $phoneRepository
     */
    public function __construct(OrderRepository $orderRepository, PhoneRepository $phoneRepository)
    {
        $this->middleware('auth');
        $this->orderRepository = $orderRepository;
        $this->phoneRepository = $phoneRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->getUserOrders();
        $phones = $this->phoneRepository->getUsersPhones();
        //$favorites = \auth()->user()->favorite(Phone::class);
        return view('account.index', compact('orders', 'phones'/*, 'favorites'*/));
    }
    /*public function library()
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);

        return view('account.library', compact('orders', 'books', 'favorites'));
    }*/

    /*public function read(Book $book)
    {
        Order::query()->where('book_id', $book->id)
            ->where('user_id', \auth()->user()->id)->firstOrFail();
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.read', compact('book', 'orders', 'books', 'favorites'));
    }*/

    public function my_phones()
    {
        $orders = $this->orderRepository->getUserOrders();
        $phones = $this->phoneRepository->getUsersPhones();
        //$favorites = \auth()->user()->favorite(Book::class);
        return view('account.phone', compact( 'orders', 'phones'/*, 'favorites'*/));
    }

    public function add_phone()
    {
        $orders = $this->orderRepository->getUserOrders();
        $phones = $this->phoneRepository->getUsersPhones();
        $categories = Category::query()->orderBy('name')
            ->where('order', 3)->get();
        //$favorites = \auth()->user()->favorite(Book::class);
        return view('account.create', compact( 'orders', 'phones', 'categories'/*, 'favorites'*/));
    }
   /* public function favorites()
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.favorite', compact( 'orders', 'books', 'favorites'));
    }*/

    public function store(PhoneRequest $request)
    {
        $this->phoneRepository->store($request);

        flash('le téléphone est ajouté avec succès. Mais il doit être validé par l\'administration avant sa publication');
        return redirect()->back();
    }

    public function edit(Phone $phone)
    {
        $orders = $this->orderRepository->getUserOrders();
        $phones = $this->phoneRepository->getUsersPhones();
        $categories = Category::query()->orderBy('name')
            ->where('order', 3)->get();
        //$favorites = \auth()->user()->favorite(Book::class);
        return view('account.edit-phone', compact('phones', 'orders', 'phone', 'categories'/*, 'favorites'*/));
    }

    public function update(PhoneRequest $request, Phone $phone)
    {
        $this->phoneRepository->update($phone->id, $request);
        flash('Le téléphone a été mis à jour avec succès.');
        return redirect()->back();
    }

    public function update_profile(ProfileRequest $request)
    {
        $query = User::query()->where('id', auth()->user()->id);
        $query->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        if($request->password){
            $query->update([
                'password' => Hash::make( $request->password)
            ]);
            Auth::guard()->logout();
            flash('Profil mis à jour avec succès. Veuillez vous reconnecter');
            return redirect()->route('login');
        }

        flash('Profil mis à jour avec succès');
        return redirect()->back();

    }
}

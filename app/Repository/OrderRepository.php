<?php


namespace App\Repository;

use App\Order;

class OrderRepository
{
    public function store($items, string $first_name, string $last_name, string $email,
                          string $phone, string $address, string $city,
                          ?string $company_name = null, ?string $comment = null)
    {
        $userId = auth()->user()->id;

        foreach ($items as $item) {
            Order::query()->create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'city' => $city,
                'company_name' => $company_name,
                'comment' => $comment,
                'user_id' => $userId,
                'book_id' => $item['attributes']['id'],
                'active' => true
            ]);
        }
        \Cart::session($userId)->clear();
    }

    public function getUserOrders()
    {
        return  Order::query()
            ->with(['book'])
            ->orderBy('id', 'desc')
            ->where('user_id', auth()->user()->id)
            ->paginate(50);
    }
}

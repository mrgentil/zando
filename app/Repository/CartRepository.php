<?php


namespace App\Repository;


use App\Phone;
use Illuminate\Http\Request;

class CartRepository
{

    public function add(Request $request, Phone $phone)
    {

        \Cart::session(auth()->user()->id)->add(array(
            'id' => uniqid(),
            'name' => $phone->name,
            'slug' => $phone->slug,
            'price' => empty($phone->price) && $phone->status === 'published' ? 'published' : $phone->price,
            'quantity' =>$request->quantity,
            'attributes' => array(
                'id' => $phone->id,
                'slug_link' => $phone->slug_link,
            ),
            'associatedModel' => $phone
        ));
    }
}

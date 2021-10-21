@extends('layouts.main')

@section('title') @parent | Mon Panier @endsection

@section('keywords') @parent, Mon Panier @endsection

@section('description') Mon Panier @endsection
@push('css')
    <link rel="stylesheet" href="{{asset('cart_style/css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/font-awesome.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/themify-icons.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/superfish.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/megafish.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/jquery.navgoco.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/jquery.mCustomScrollbar.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/owl.carousel.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/owl.theme.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/animate.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/jquery-ui.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/woocommerce.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('cart_style/css/prettyPhoto.css')}}" media="all" />
@endpush
@section('content')
    <div class="container">

        <article class="type-page">
            <header class="entry-header">
                <h1 class="entry-title">Mon Panier</h1>
            </header>
            <!-- .entry-header -->

            <div class="entry-content">
                <div class="woocommerce">
                    <form action="#" method="post">
                        <table class="shop_table shop_table_responsive cart">
                            <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Téléphones</th>
                                <th class="product-price">Prix</th>
                                <th class="product-quantity">Quantité</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(\Cart::session(auth()->user()->id)->getContent() as $phone)
                                <tr class="cart_item">

                                    <td class="product-remove">
                                        <a href="{{route('phone.remove-to.cart',$phone->id)}}" class="remove"
                                           title="">×</a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="{{ Voyager::image($phone->firstImage) }}" class="" alt="{{$phone->name}}">
                                        </a>
                                    </td>
                                    <td class="product-name"  data-title="Téléphones">
                                        <a style="color: #1570B7" href="{{route('phone.remove-to.cart',$phone->id)}}">{{$phone->name}}</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="amount">{{$phone->price}}$</span>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="number" step="1" min="0" value="{{$phone->quantity}}" class="input-text qty text"
                                                   size="4">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span
                                            class="amount">{{ \Cart::session(auth()->user()->id)->getSubTotal() }}$</span>
                                    </td>
                                </tr>
                            @empty
                                <li class="col-md-12 col-sm-12 col-xs-12">
                                    Votre panier est vide
                                </li>
                            @endforelse
                            <tr>
                                <td colspan="6" class="actions">
                                    <div class="coupon">
                                        <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code"
                                                                                        class="input-text"
                                                                                        id="coupon_code" value=""
                                                                                        placeholder="Coupon code">
                                        <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">
                                    </div>
                                    <input type="submit" class="button" name="update_cart" value="Mettre à jour panier">
                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="82cdf479ab"><input
                                        type="hidden" name="_wp_http_referer" value="/0/cart/">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="cart-collaterals">
                        <div class="cart_totals ">
                            <h2>Totals Panier</h2>
                            <table class="shop_table shop_table_responsive">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="amount">{{ \Cart::session(auth()->user()->id)->getSubTotal() }}$</span>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="amount">{{ \Cart::session(auth()->user()->id)->getTotal() }}$</span></strong>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div>
                                <a href="{{route('checkout.index')}}" class="button">
                                    Vérifier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .entry-content -->
        </article>

    </div>
    <!-- container -->
@stop

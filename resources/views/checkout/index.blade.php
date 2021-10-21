@extends('layouts.main')

@section('title') @parent | Checkout @endsection

@section('keywords') @parent, Checkout @endsection

@section('description') Checkout @endsection

@section('content')
    <div id="main-content">
        <section class="kopa-area kopa-area-20">

            <div class="container">
                <article class="type-page">
                    <header class="entry-header">
                        <h1 class="entry-title">Checkout</h1>
                    </header>
                    <!-- entry-header -->
                    <div class="entry-content">
                        <div class="woocommerce">
                            {{-- <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>--}}
                            <form name="checkout" method="post" class="checkout woocommerce-checkout"
                                  action="{{ route('checkout.store') }}">
                                @csrf
                                <div class="col2-set" id="customer_details">

                                    <div class="col-1">
                                        <div class="form-group">
                                            <h3>Details Factures</h3>
                                            @include('flash::message')
                                            <p class="form-row @error('first_name') is-invalid @enderror form-row-first">
                                                <label for="first_name">Prénom</label>
                                                <input type="text" class="input-text" id="first_name" name="first_name"
                                                       value="{{ old('first_name') }}" autofocus>
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>
                                            <p class="form-row form-row-last">
                                                <label for="last_name">Nom</label>
                                                <input type="text" id="last_name" name="last_name"
                                                       class="input-text" value="{{ old('last_name') }}">
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>
                                            <div class="clear"></div>

                                            <p class="form-row form-row-wide">
                                                <label for="company_name">Entreprise (optionel)</label>
                                                <input type="text" id="company_name" class="input-text"
                                                       name="company_name" value="{{ old('company_name') }}">
                                                @error('company_name')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>

                                            <p class="form-row form-row-first">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" name="email" class="input-text"
                                                       value="{{ old('email') }}">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>
                                            <p class="form-row form-row-last">
                                                <label for="phone">Téléphone</label>
                                                <input type="tel" id="phone" name="phone" class="input-text"
                                                       value="{{ old('phone') }}">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>
                                            <div class="clear"></div>

                                            <p class="form-row form-row-wide">
                                                <label for="address">Adresse</label>
                                                <input type="text" id="address" name="address" class="input-text"
                                                       value="{{ old('address') }}">
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>

                                            <p class="form-row form-row-wide">
                                                <label for="city">Ville</label>
                                                <input type="text" id="city" name="city" class="input-text"
                                                       value="{{ old('city') }}">
                                                @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>

                                            <div class="clear"></div>

                                        </div>

                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                            <h3>Commentaire</h3>
                                            <p class="form-row form-row notes">
                                                <label for="comment">Un petit commentaire (optionel) </label>
                                                <textarea class="input-text" name="comment" id="comment"
                                                          placeholder="Notes about your order, e.g. special notes for delivery."
                                                          rows="2" cols="5">{{ old('comment') }}</textarea>
                                                @error('comment')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </p>
                                        </div>
                                    </div>

                                </div>

                                <h3>Votre Commande</h3>
                                <div class="woocommerce-checkout-review-order">
                                    <table class="shop_table">
                                        <thead>
                                        <tr>
                                            <th class="product-name">Téléphones</th>
                                            <th class="product-total">Prix</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach (\Cart::session(auth()->user()->id)->getContent() as $phone)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $phone->name }}
                                                    <strong class="product-quantity">× {{$phone->quantity}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">{{ \Cart::session(auth()->user()->id)->getTotal() }} $</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>

                                        <tfoot>

                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount">{{ \Cart::session(auth()->user()->id)->getTotal() }} $</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>

                                    </table>
                                    <div id="payment">
                                        {{--<ul class="payment_methods">
                                            <li>Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</li>
                                        </ul>--}}
                                        <div class="form-row place-order">
                                            <input type="submit" class="button alt" id="place_order" value="Commander">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- entry-content -->

                </article>

            </div>
            <!-- container -->

        </section>
        <!-- kopa-area-18 -->

    </div>
    <!-- main-content -->
    <!-- main-content -->
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.navgoco.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sliderPro.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/jquery.wow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" charset="utf-8"></script>
@endpush

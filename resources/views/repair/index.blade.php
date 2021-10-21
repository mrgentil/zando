@extends('layouts.main')

@section('title') @parent | Réparation @endsection

@section('keywords') @parent, Réparation @endsection

@section('description') Réparation @endsection
@push('css')

    <style>

        /*---------------------------------------------------------------
        12. FORM ELEMENTS
        ---------------------------------------------------------------*/

        label {
            font-weight: 500;
            margin-bottom: 10px;
        }

        .panel-default,
        .panel-default > .panel-heading {
            border-color: #e7ecf1;
            color: inherit;
        }

        .panel-default > .panel-heading + .panel-collapse > .panel-body {
            border-top-color: #e7ecf1;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            height: 50px;
            padding: 15px 20px;
            font-size: 14px;
            border-radius: 4px;
            color: #000;
        }

        .input-group .select-group,
        .input-group .form-control {
            margin-right: 10px;
        }

        .form-control:focus {
            border-color: #e1e1e1;
            outline: 0;
        }

        .form-control:focus,
        .has-error .form-control:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .form-control.kv-fileinput-caption {
            height: 39px;
        }

        .form-group.form-inline .radio,
        .form-group.form-inline .checkbox {
            margin-right: 15px;
        }

        /*input group*/

        .input-group {
            width: 100%;
        }

        .input-group .form-control,
        .input-group-addon,
        .input-group-btn {
            display: table-cell;
        }

        .input-group-addon {
            background: #fff;
            border-color: #e1e1e1;
            padding: 6px 14px;
            font-size: 16px;
        }

        .input-group-addon.font-size-20 {
            font-size: 20px;
        }

        .input-group-addon.fixed-w {
            text-align: center;
            padding: 6px 0;
            width: 40px;
        }

        .input-group-addon.v-align-t {
            line-height: 30px;
        }

        /*select box*/

        .dropdown-menu {
            font-size: 13px;
        }

        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 100%;
        }

        .bootstrap-select .dropdown-toggle {
            border: 1px solid #e7ecf1;
            background-color: #fff;
            height: 40px;
            font-size: 13px;
            color: #999;
        }

        .bootstrap-select .dropdown-toggle:after {
            display: none;
        }

        .bootstrap-select .dropdown-toggle:active,
        .bootstrap-select .dropdown-toggle:focus,
        .bootstrap-select .dropdown-toggle:hover {
            background-color: #fff;
            border: 1px solid #e9e9e9;
            box-shadow: none;
            outline: 0px !important;
        }

        .bootstrap-select:active,
        .bootstrap-select:focus {
            border: 0px;
            box-shadow: none;
            outline: 0px;
        }

        .bootstrap-select.show {
            box-shadow: none;
            outline: 0px;
        }

        .bootstrap-select.show .dropdown-toggle {
            box-shadow: none;
            outline: 0px !important;
        }

        .bootstrap-select.show.btn-group .dropdown-menu.inner {
            display: block;
        }

        .bootstrap-select div.dropdown-menu {
            border: 1px solid #e9e9e9;
            border-radius: 0;
            box-shadow: none;
            margin-top: -1px;
            padding: 0;
            font-size: 13px;
        }

        .bootstrap-select div.dropdown-menu ul li {
            padding: 0;
        }

        .bootstrap-select div.dropdown-menu ul li a {
            padding: 5px 15px;
        }

        .bootstrap-select div.dropdown-menu ul li a img {
            border-radius: 100%;
            -webkit-border-radius: 100%;
            margin-right: 5px;
        }

        .bootstrap-select .bs-searchbox .form-control {
            padding: 5px 10px;
            height: 30px;
        }

        .bootstrap-select .dropdown-menu > li > a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }

        .bootstrap-select .dropdown-menu > li > a:hover {
            background-color: #f2f2f4;

        }

        .form-inline .checkbox input[type="checkbox"],
        .form-inline .radio input[type="radio"] {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        /*touchspin input type number*/

        .bootstrap-touchspin .input-group-btn-vertical {
            position: relative;
            white-space: nowrap;
            width: 1%;
            vertical-align: middle;
            display: table-cell;
        }

        .bootstrap-touchspin .input-group-btn-vertical > .btn {
            display: block;
            float: none;
            width: 100%;
            max-width: 100%;
            padding: 10px 10px 9px;
            margin-left: -1px;
            position: relative;
            border-width: 1px;
            border-style: solid;
            border-color: #e1e1e1;
            background: #FFF;
        }

        .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-up {
            border-radius: 0;
            border-top-right-radius: 0;
        }

        .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-down {
            margin-top: -2px;
            border-radius: 0;
            border-bottom-right-radius: 0;
        }

        .bootstrap-touchspin .input-group-btn-vertical i {
            position: absolute;
            top: 4px;
            left: 5px;
            font-size: 9px;
            font-weight: normal;
            color: #9fa0a1;
        }

        /*rating star*/
        .input-rating input[type=radio] {
            display: none;
        }

        .input-rating input[type=radio] + label {
            display: inline-block;
            margin-left: -4px;
            padding-left: 0px !important;
            padding-right: 0px;
            width: 24px;
        }

        .input-rating input[type=radio] + label:first-of-type {
            margin-left: 0px;
        }

        .input-rating input[type=radio] + label:before {
            background-color: transparent;
            border: none;
            color: #ffd925;
            content: "\f006";
            display: inline-block;
            font-family: FontAwesome;
            font-size: 20px;
            -webkit-font-smoothing: antialiased;
            height: 14px;
            line-height: 1;
            margin-left: 0px;
            position: static;
            text-align: center;
            top: 2px;
            transition: none;
            width: 14px;
        }

        .input-rating input[type=radio]:checked + label:before,
        .input-rating input[type=radio] + label.marked:before,
        .input-rating input[type=radio] + label.filled:before,
        .input-rating input[type=radio] + label.hovered.filled:before {
            content: "\f005";
        }

        .input-rating input[type=radio] + label.hovered:before {
            content: "\f006";
        }

        /*simple rating list*/

        .rating-bx {
            color: #ffc300;
            font-size: 14px;
        }

        .rating-bx i {
            margin: 0 2px;
        }

        .rating-container .rating-stars::before {
            text-shadow: none;
        }

        .rating-container {
            color: #c8c8c8;
        }

        .rating-container .rating-stars {
            color: #3396d1;
        }

        /*validation symbol*/

        .has-feedback label ~ .form-control-feedback {
            top: 31px;
        }

        .dlab-banner-outer {
            margin-bottom: 0;
        }

        .dlab-success-top,
        .dlab-error-top {
            margin-bottom: 0;
        }

        .alert-bx.alert-info {
            padding: 15px;
            border: 1px solid #bce8f1;
        }

        .invalid-feedback {
            display: initial;
            margin-bottom: 10px !important;
        }

        .contact-form input {
            margin-bottom: 0 !important;
        }
    </style>
@endpush
@section('content')
    <main class="main-content">
        <div id="html-section-product-template" class="html-section">
            <div class="wrapper">
                <div class="grid">
                    <div class="grid__item contact-wrapper">

                        <div class="grid__item large--one-half" style="padding-left: 0;">
                            <h3>Réparez votre téléphone</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugit ipsa tempora
                                voluptatibus. Earum hic inventore magnam, neque nostrum placeat possimus quam quod
                                tempore vero. Aspernatur omnis quos similique sunt.
                            </p>
                            <p>
                                <a href="#" class="btn">Plus d'info</a>
                            </p>
                        </div>
                        @livewire('repair-form')
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
@push('scripts')
    <script src="{{ asset('dashboard/js/drop-files-element.js') }}" type="module"></script>
@endpush

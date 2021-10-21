@extends('layouts.main')

@section('title') @parent | Achat/Vendre @endsection

@section('keywords') @parent, Achat/Vendre @endsection

@section('description') Achat/Vendre @endsection
@push('css')
    <style>
        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .badge {
                transition: none
            }
        }

        a.badge:focus, a.badge:hover {
            text-decoration: none
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff
        }

        a.badge-primary:focus, a.badge-primary:hover {
            color: #fff;
            background-color: #0062cc
        }

        a.badge-primary.focus, a.badge-primary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .badge-secondary {
            color: #fff;
            background-color: #6c757d
        }

        a.badge-secondary:focus, a.badge-secondary:hover {
            color: #fff;
            background-color: #545b62
        }

        a.badge-secondary.focus, a.badge-secondary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }

        .badge-success {
            color: #fff;
            background-color: #28a745
        }

        a.badge-success:focus, a.badge-success:hover {
            color: #fff;
            background-color: #1e7e34
        }

        a.badge-success.focus, a.badge-success:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }

        a.badge-info:focus, a.badge-info:hover {
            color: #fff;
            background-color: #117a8b
        }

        a.badge-info.focus, a.badge-info:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .badge-warning {
            color: #212529;
            background-color: #ffc107
        }

        a.badge-warning:focus, a.badge-warning:hover {
            color: #212529;
            background-color: #d39e00
        }

        a.badge-warning.focus, a.badge-warning:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }

        a.badge-danger:focus, a.badge-danger:hover {
            color: #fff;
            background-color: #bd2130
        }

        a.badge-danger.focus, a.badge-danger:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .badge-light {
            color: #212529;
            background-color: #f8f9fa
        }

        a.badge-light:focus, a.badge-light:hover {
            color: #212529;
            background-color: #dae0e5
        }

        a.badge-light.focus, a.badge-light:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40
        }

        a.badge-dark:focus, a.badge-dark:hover {
            color: #fff;
            background-color: #1d2124
        }

        a.badge-dark.focus, a.badge-dark:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .fab {
            background: #1570B7;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            text-align: center;
            color: #fff;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.5), 3px 3px 3px rgba(0, 0, 0, 0.25);
            position: fixed;
            bottom: 48px;
            right: 48px;
            font-size: 15px;
            display: inline-block;
            cursor: default;
            z-index: 9999;
        }

        .fab span, .fab a {
            vertical-align: middle;
            color: #FFF;
            font-weight: bolder
        }

        .fab.child {
            right: 58.66666667px;
            width: 42.66666667px;
            height: 42.66666667px;
            display: none;
            opacity: 0;
            font-size: 2em;
        }
        .pagination a {
            border: none !important;
            float: initial !important;
        }
        .pagination .active a, .pagination a:hover {
            background-color: transparent !important;
            color: #1570B7 !important;
        }
    </style>
@endpush
@section('content')
    <div class="fab" id="masterfab">
        <div style="margin-top: 28%;">
            <a href="{{ route('dashboard.phone.create') }}">
                <span>
                    Vendre
                </span>
            </a>
        </div>
    </div>
    @livewire('sell')
@stop

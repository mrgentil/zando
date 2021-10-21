@extends('layouts.dashboard')
@section('title') @parent | Tableau de bord utilisateur @endsection

@section('keywords') @parent, Tableau de bord utilisateur @endsection

@section('description') Tableau de bord utilisateur @endsection
@section('content')
    <ul class="plan-tools-list">
        <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">
            <a href="{{ route('dashboard.phone.index') }}" class="list-box home-list active">
                <h6 class="title"><i class="la la-phone-square"></i>Mes téléphones</h6>
                <p>{{ $all }}</p>
            </a>
        </li>
        <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
            <a href="{{ route('dashboard.phone.index') }}?status=active" class="list-box guest-list">
                <h6 class="title"><i class="la la-check"></i>Actifs</h6>
                <p>{{ $active }}</p>
            </a>
        </li>
        <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <a href="{{ route('dashboard.phone.index') }}?status=pending" class="list-box budget-list">
                <h6 class="title"><i class="la la-warning"></i>En Attente</h6>
                <p>{{ $pending }}</p>
            </a>
        </li>
    </ul>
@stop

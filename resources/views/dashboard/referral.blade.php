@extends('layouts.main')
@section('content')
    <ul class="list-group mt-3">
        <p class="font-weight-bold text-light">SHARE THIS REFERRAL LINK AND EARN POINTS</p>
        <li class="list-group-item mb-3">Referral link: {{ Auth::user()->referral_link }}</li>
        <li class="list-group-item">Total Referral: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
    </ul>
@endsection

@extends('layouts.page-layout')
@section('title', 'Профиль')

@section('content')

    fff

    @if(Auth::check())
        <a href="{{ route('logout') }}">выйти</a>
    @endif

@endsection




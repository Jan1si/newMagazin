@extends('layouts.page-layout')
@section('title', 'Профиль')

@section('content')

    <div class="buttons-control">
        <a class="to_home" href="{{route('index')}}">На главную</a>
        @if(Auth::check())
            @if(Auth::user()->role_id === 2)
                <a href="{{  route('tables') }}">Панель администратора</a>
            @endif
        @endif
    </div>



@endsection




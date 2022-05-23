@extends('layouts.page-layout')
@section('title', 'Панель администратора')

@section('content')
    <div class="content__block">
        <div class="container">
            <a class="to_home" href="{{route('index')}}">На главную</a>
            <h2 class="title__block">Все таблицы</h2>
            <div class="cards__list">
                <a data-color="1" href="{{ route('table-users.index') }}" class="card_table">
                    <span>Пользователи</span>
                    <span class="count-record">Колличество записей: {{ $users }}</span>
                </a>
                <a data-color="2" href="{{ route('table-roles.index') }}" class="card_table">
                    <span>Роли</span>
                    <span class="count-record">Колличество записей: {{ $roles }}</span>
                </a>
                <a data-color="3" href="{{ route('table-categories.index') }}" class="card_table">
                    <span>Категории товаров</span>
                    <span class="count-record">Колличество записей: {{ $categories}}</span>
                </a>
                <a data-color="4" href="{{ route('table-products.index') }}" class="card_table">
                    <span>Товары</span>
                    <span class="count-record">Колличество записей: {{ $products }}</span>
                </a>

            </div>
        </div>
    </div>

@endsection


{{--  --}}

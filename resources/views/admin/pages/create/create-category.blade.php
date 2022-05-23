@extends('layouts.page-layout')
@section('title', 'Создание категории')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Создание категории</h2>
            <form class="form__auth" action="{{ route('table-categories.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="input__group">
                    <label for="name">Название категории</label>
                    <input type="text" name="name">
                </div>
                <div class="input__group">
                    <input class="auth_btn" type="submit" value="Создать">
                </div>
            </form>
        </div>
    </div>

@endsection


{{--  --}}

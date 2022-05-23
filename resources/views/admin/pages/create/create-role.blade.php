@extends('layouts.page-layout')
@section('title', 'Создание роли')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Создание роли</h2>
            <form class="form__auth" action="{{ route('table-roles.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="input__group">
                    <label for="name-role">Название роли</label>
                    <input type="text" name="name-role">
                </div>
                <div class="input__group">
                    <input class="auth_btn" type="submit" value="Создать">
                </div>
            </form>
        </div>
    </div>

@endsection


{{--  --}}

@extends('layouts.page-layout')
@section('title', 'Создание пользователя')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Создание пользователя</h2>
            <form class="form__auth" action="{{route('table-users.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="input__group">
                    <label for="login">Имя</label>
                    <input type="text" name="name">
                </div>
                <div class="input__group">
                    <label for="login">Логин</label>
                    <input type="text" name="login">
                </div>
                <div class="input__group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password">
                </div>
                <div class="input__group">
                    <label for="role">Роль</label>
                    <select name="role">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name_role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input__group">
                    <input class="auth_btn" type="submit" value="Создать">
                </div>
            </form>
        </div>
    </div>

@endsection


{{--  --}}

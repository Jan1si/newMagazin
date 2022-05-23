@extends('layouts.page-layout')
@section('title', 'Редактирование пользователя')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Редактирование пользователя</h2>

            @foreach($user as $item)
            <form class="form__auth" action="{{route('table-users.update', $item->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="input__group">
                    <label for="login">Имя</label>
                    <input type="text" name="name" value="{{$item->name}}">
                </div>
                <div class="input__group">
                    <label for="login">Логин</label>
                    <input type="text" name="login" value="{{$item->login}}">
                </div>
                <div class="input__group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" value="{{$item->password}}">
                </div>
                <div class="input__group">
                    <label for="role">Роль</label>
                    <select name="role">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" @if($role->id == $item->role_id) selected @endif>{{$role->name_role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input__group">
                    <input class="auth_btn" type="submit" value="Создать">
                </div>
            </form>
            @endforeach
        </div>
    </div>

@endsection


{{--  --}}

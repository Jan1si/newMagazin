@extends('layouts.page-layout')
@section('title', 'Редактирование роли')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Редактирование роли</h2>
            @foreach($role as $item)
            <form class="form__auth" action="{{ route('table-roles.update', $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="input__group">
                    <label for="name-role">Название роли</label>
                    <input type="text" name="name-role" value="{{$item['name-role']}}">
                </div>
                <div class="input__group">
                    <input class="auth_btn" type="submit" value="Редактировать">
                </div>
            </form>
            @endforeach
        </div>
    </div>

@endsection


{{--  --}}

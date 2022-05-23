@extends('layouts.page-layout')
@section('title', 'Панель администратора')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Таблица продуктов</h2>
            <a href="{{ route('table-users.create') }}" class="create">Добавить</a>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Имя</th>
                    <th>Логин</th>
                    <th>Роль</th>
                    <th colspan="2">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->login}}</td>
                        <td>{{$item->role_id}}</td>
                        <td><a href="{{ route('table-users.edit', $item->id) }}" class="edit">Редактировать</a></td>
                        <td>
                            <form action="{{ route('table-users.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="destroy">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


{{--  --}}

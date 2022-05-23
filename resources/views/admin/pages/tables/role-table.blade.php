@extends('layouts.page-layout')
@section('title', 'Таблица ролей')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Таблица роли</h2>
            <a href="{{ route('table-roles.create') }}" class="create">Добавить</a>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название роли</th>
                    <th colspan="2">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{$item['name-role']}}</td>
                        <td><a href="{{ route('table-roles.edit', $item->id) }}" class="edit">Редактировать</a></td>
                        <td>
                            <form action="{{ route('table-roles.destroy', $item->id) }}" method="post">
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

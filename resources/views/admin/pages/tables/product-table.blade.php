@extends('layouts.page-layout')
@section('title', 'Панель администратора')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Таблица продуктов</h2>
            <a href="{{ route('table-products.create') }}" class="create">Добавить</a>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Заголовок</th>
                    <th>Фотография</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th colspan="2">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{$item->title}}</td>
                        <td ><img class="img_table" src="{{ asset('storage/'.$item->image) }}" alt="{{$item->image}}"></td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->category->name}}</td>
                        <td><a href="{{ route('table-products.edit', $item->id) }}" class="edit">Редактировать</a></td>
                        <td>
                            <form action="{{ route('table-products.destroy', $item->id) }}" method="post">
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

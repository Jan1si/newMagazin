@extends('layouts.page-layout')
@section('title', 'Редактирование категории')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Редактирование категории</h2>
            @foreach($category as $item)
                <form class="form__auth" action="{{ route('table-categories.update', $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input__group">
                        <label for="name">Название категории</label>
                        <input type="text" name="name" value="{{$item->name}}">
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

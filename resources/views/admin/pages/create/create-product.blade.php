@extends('layouts.page-layout')
@section('title', 'Создание продукта')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Создание продукта</h2>
            <form class="form__auth" action="{{ route('table-products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="input__group">
                    <label for="title">Название категории</label>
                    <input type="text" name="title">
                </div>

                <div class="input__group">
                    <label for="image">Фотография</label>
                    <input type="file" name="image" required>
                </div>
                <div class="input__group">
                    <label for="price">Цена</label>
                    <input type="text" name="price">
                </div>
                <div class="input__group">
                    <label for="category">Категория</label>
                    <select name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
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

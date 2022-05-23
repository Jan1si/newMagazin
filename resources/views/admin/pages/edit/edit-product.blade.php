@extends('layouts.page-layout')
@section('title', 'Редактирование продукта')

@section('content')
    <div class="content__block">
        <div class="container">
            <a href="{{ route('tables') }}" class="to_panel">Панель администратора</a>
            <h2 class="title__block">Редактирование продукта</h2>
            @foreach($product as $item)
            <form class="form__auth" action="{{ route('table-products.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input__group">
                    <label for="title">Название категории</label>
                    <input type="text" name="title" value="{{$item->title}}">
                </div>

                <div class="input__group">
                    <label for="image">Фотография</label>
                    <input type="file" name="image" required>
                </div>
                <div class="input__group">
                    <label for="price">Цена</label>
                    <input type="text" name="price" value="{{$item->price}}">
                </div>
                <div class="input__group">
                    <label for="category">Категория</label>
                    <select name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($category->id == $item->category_id) selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
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

@extends('layouts.page-layout')
@section('title', 'Главная')

@section('content')
     <div class="offer">
       <div class="container">
         <div class="wrapp__slider">
           @for($i = 1; $i < 4; $i++)
           <div class="slide">
             <div class="slide__text">
               <a href="#" class="category__btn">Категория {{$i}}</a>
               <h1 class="title__slide">Заголовок</h1>
               <div class="circle__mobile">
                <img src="{{ asset('img/image1.png') }}" alt="">
              </div>
               <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Corporis explicabo necessitatibus commodi, ducimus possimus quibusdam ipsam maiores velit?
                Voluptates sapiente neque corrupti tenetur ab qui sit, nostrum expedita. Excepturi, itaque?
               </p>
               <div class="price">
                 <p>Стоимость:</p>
                 <p>50 000₽</p>
               </div>
               <a href="#" class="add__basket">Добавить в корзину</a>

             </div>
             <div class="slide__image">
               <div class="circle">
                 <img src="{{ asset('img/image1.png') }}" alt="">
               </div>
             </div>
           </div>
           @endfor
         </div>
       </div>
     </div>
     <div class="content__block">
       <div class="container">
          <h2 class="title__block">Популярные категории</h2>
          <div class="cards__list">

            <div class="card__category" style="background: linear-gradient(45deg, rgb(152, 207, 195), rgb(86, 181, 184));">
              <img class="card__image" src="{{ asset('img/card1.png') }}" alt="">
              <div class="card__content">
                <h3>Куртки</h3>
                <div class="btn__category">
                  <a href="#"><p>Мужчинам</p></a>
                  <a href="#"><p>Женщинам</p></a>
                  <a href="#"><p>Мальчикам</p></a>
                  <a href="#"><p>Девочкам</p></a>
                </div>
              </div>
            </div>

            <div class="card__category" style="background: linear-gradient(45deg, #a8edea, #fed6e3); ">
              <img class="card__image" src="{{ asset('img/card6.png') }}" alt="">
              <div class="card__content">
                <h3>Кеды</h3>
                <div class="btn__category">
                  <a href="#">Мужчинам</a>
                  <a href="#">Женщинам</a>
                  <a href="#">Мальчикам</a>
                  <a href="#">Девочкам</a>
                </div>
              </div>
            </div>

            <div class="card__category" style="background: linear-gradient(45deg, #fddb92, #d1fdff); ">
              <img class="card__image" src="{{ asset('img/card3.png') }}" alt="">
              <div class="card__content">
                <h3>Кроссовки</h3>
                <div class="btn__category">
                  <a href="#">Мужчинам</a>
                  <a href="#">Женщинам</a>
                  <a href="#">Мальчикам</a>
                  <a href="#">Девочкам</a>
                </div>
              </div>
            </div>

            <div class="card__category" style="background: linear-gradient(45deg, #9890e3, #b1f4cf); ">
              <img class="card__image" src="{{ asset('img/card2.png') }}" alt="">
              <div class="card__content">
                <h3>Футболки</h3>
                <div class="btn__category">
                  <a href="#">Мужчинам</a>
                  <a href="#">Женщинам</a>
                  <a href="#">Мальчикам</a>
                  <a href="#">Девочкам</a>
                </div>
              </div>
            </div>

            <div class="card__category" style="background: linear-gradient(45deg, #fff1eb, #ace0f9); ">
              <img class="card__image" src="{{ asset('img/card4.png') }}" alt="">
              <div class="card__content">
                <h3>Штаны</h3>
                <div class="btn__category">
                  <a href="#">Мужчинам</a>
                  <a href="#">Женщинам</a>
                  <a href="#">Мальчикам</a>
                  <a href="#">Девочкам</a>
                </div>
              </div>
            </div>

            <div class="card__category" style="background: linear-gradient(45deg, #a1ffce, #f9ffd1); ">
              <img class="card__image" src="{{ asset('img/card5.png') }}" alt="">
              <div class="card__content">
                <h3>Толстовки</h3>
                <div class="btn__category">
                  <a href="#">Мужчинам</a>
                  <a href="#">Женщинам</a>
                  <a href="#">Мальчикам</a>
                  <a href="#">Девочкам</a>
                </div>
              </div>
            </div>

         </div>
       </div>
     </div>
     @if($products && $products->count())
     <div class="content__block">
       <div class="container">
        <h2 class="title__block">Акции</h2>
          <div class="list__product">
            @foreach($products as $item)
            <div class="card__product">
              <div class="title__card">
                <h3>{{ $item->title }}</h3>
              </div>
              <img src="{{ asset('storage/'.$item->image) }}" alt="">
              <div class="price__product">
                <p>Цена: {{ $item->price }} ₽</p>
              </div>
              <a href="#" class="add-btn">
                <img src="{{ asset('img/svg1.svg') }}" alt="">
              </a>
            </div>
            @endforeach

          </div>

          <div class="pagination">
            {{$products->links()}}
          </div>

       </div>
     </div>
    @endif
@endsection


{{--  --}}

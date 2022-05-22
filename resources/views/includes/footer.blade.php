<div class="container">
  <div class="list__content__footer">
    @for($i = 0; $i<3; $i++)
    <div class="block__footer">
      <h3>Заголовок {{ $i+1 }}</h3>
      <div class="list__link__footer">
        <a href="#">Тестовый текст 1</a>
        <a href="#">Тестовый текст 2</a>
        <a href="#">Тестовый текст 3</a>
        <a href="#">Тестовый текст 4</a>
      </div>
    </div>
    @endfor
    
    <div class="block__footer">
      <h3>Контакты</h3>
      <div class="list__link__footer">
        <p href="#">8 800 777-43-12</p>
        <div class="social__list">
          <a href="#" class="social__item">
            <img src="{{ asset('img/icon1.svg') }}" alt="">
          </a>
          <a href="#" class="social__item">
            <img src="{{ asset('img/icon2.svg') }}" alt="">
          </a>
          <a href="#" class="social__item">
            <img src="{{ asset('img/icon3.svg') }}" alt="">
          </a>
          <a href="#" class="social__item">
            <img src="{{ asset('img/icon4.svg') }}" alt="">
          </a>              
        </div>
        <form class="push__email" action="{{route('email')}}" method="POST">
          @csrf
          @method('POST')
          <label for="email">Подписаться на рассылку</label>
          <div class="email__form">
            <input type="email" name="email" placeholder="Введите свой E-mail">
            <input type="submit" value="✉️">
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
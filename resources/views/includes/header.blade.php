<div class="auth__popup">
  <div class="auth__content">
    <div class="block__login">
      <div class="close">
        <div class="line__close"></div>
      </div>
      <form class="form__auth" action="{{ route('login') }}" method="post">
          @csrf
        <div class="input__group">
          <label for="login">Логин</label>
          <input type="text" name="login">
        </div>
        <div class="input__group">
          <label for="password">Пароль</label>
          <input type="password" name="password">
        </div>
        <div class="link__form__group">
          <span id="register">Регистрация</span>
        </div>
        <div class="input__group">
          <input class="auth_btn" type="submit" value="Войти">
        </div>
      </form>
    </div>
    <div class="block__register">
      <div class="close">
        <div class="line__close"></div>
      </div>
      <form class="form__auth" action="{{route('register')}}" method="post">
          @csrf
        <div class="input__group">
          <label for="login">Имя</label>
          <input type="text" name="name">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="input__group">
          <label for="login">Логин</label>
          <input type="text" name="login">
            @error('login')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="input__group">
          <label for="password">Пароль</label>
          <input type="password" name="password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="link__form__group">
          <span id="login">Авторизация</span>
        </div>
        <div class="input__group">
          <input class="auth_btn" type="submit" value="Зарегистрироваться">
        </div>
      </form>
    </div>
  </div>
</div>

  <div class="nav__menu">

    <div class="container">
      <div class="main__menu">

        <div class="burger__btn">
          <span class="line__menu"></span>
        </div>

        <div class="burger__menu">
          <div class="burger__menu__list">
              <nav>
                <a href="#" class="nav__link">Новинки</a>
                <a href="#" class="nav__link">Скидки</a>
                <a href="#" class="nav__link">Акции</a>
                <a href="#" class="nav__link">Доставка</a>
                <a href="#" class="nav__link">О нас</a>
                <a href="#" class="nav__link">Пункты выдачи</a>
              </nav>
            </div>
        </div>

        <div class="logotip">
          <img src="{{ asset('img/logotip.svg') }}" alt="">
        </div>

        <form class="search__form">
          <input class="search__input" type="text" placeholder="Искать...">
          <button class="searc__btn" type="submit">
            <svg class="icon">
              <use xlink:href="{{ asset('img/search.svg')}}#search"></use>
            </svg>
          </button>
        </form>

        <a href="#" class="btn__auth">Войти</a>

      </div>
    </div>
    <div class="sub__menu">
      <div class="container">
        <nav>
          <a href="#" class="nav__link">Новинки</a>
          <a href="#" class="nav__link">Скидки</a>
          <a href="#" class="nav__link">Акции</a>
          <a href="#" class="nav__link">Доставка</a>
          <a href="#" class="nav__link">О нас</a>
          <a href="#" class="nav__link">Пункты выдачи</a>
        </nav>
      </div>
    </div>

  </div>

<header class="header">
  <div class="wrap">
    <div class="header__inner flex">
      @auth
      <a href="{{ route('post.index') }}" class="contents">
        <h1 class="header__logo">
          <img src="{{ asset('img/logo_site.webp') }}" alt="paiBlog" srcset="">
        </h1>
      </a>
      @else
      <h1 class="header__logo">
        <img src="{{ asset('img/logo_site.webp') }}" alt="paiBlog" srcset="">
      </h1>
      @endauth
      @auth
      <div href="" class="header__user-name" id="userName">
        {{ Auth::user()->name }}さん
      </div>
      @endauth
    </div>
  </div>
  @auth

  <ul class="header-menu" id="headerMenu">
    <li class="header-menu__item">
      <a href="" class="header-menu__link">新規記事作成</a>
    </li>
    <li class="header-menu__item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
        this.closest('form').submit();">
          {{ __('ログアウト') }}
        </x-dropdown-link>
      </form>
    </li>
  </ul>
  @endauth
</header>

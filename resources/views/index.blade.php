<x-app-layout>
  <div class="wrap">
    <div class="btns-wrap">
      @if (Route::has('login'))
      <div class="btns flex">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btns__btn">ログイン</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btns__btn">新規登録</a>
        @endif
        @endauth
      </div>
      @endif
    </div>
  </div>
</x-app-layout>

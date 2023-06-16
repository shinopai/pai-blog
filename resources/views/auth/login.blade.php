<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}" class="auth-form" novalidate>
    @csrf

    <!-- Email Address -->
    <div class="auth-form__item">
      <x-input-label for="email" :value="__('メールアドレス')" class="auth-form__label" />
      <x-text-input id="email" class="auth-form__text" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="err-msg" />
    </div>

    <!-- Password -->
    <div class="auth-form__item">
      <x-input-label for="password" :value="__('パスワード')" class="auth-form__label" />

      <x-text-input id="password" class="auth-form__text" type="password" name="password" required autocomplete="current-password" />

      <x-input-error :messages="$errors->get('password')" class="err-msg" />
    </div>

    <!-- Remember Me -->
    <div class="auth-form__item">
      <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ml-2 text-sm text-gray-600">{{ __('ログイン状態を保存する') }}</span>
      </label>
    </div>

    <div id="login_flex" class="flex auth-form__item">
      @if (Route::has('password.request'))
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
        {{ __('パスワードをお忘れですか?') }}
      </a>
      @endif

      <x-primary-button class="ml-3">
        {{ __('ログイン') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>

<x-guest-layout>
  <form method="POST" action="{{ route('register') }}" class="auth-form" novalidate>
    @csrf

    <!-- Name -->
    <div class="auth-form__item">
      <x-input-label for="name" :value="__('名前')" class="auth-form__label" />
      <x-text-input id="name" class="auth-form__text" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="err-msg" />
    </div>

    <!-- Email Address -->
    <div class="auth-form__item">
      <x-input-label for="email" :value="__('メールアドレス')" class="auth-form__label" />
      <x-text-input id="email" class="auth-form__text" type="email" name="email" :value="old('email')" required autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="err-msg" />
    </div>

    <!-- Password -->
    <div class="auth-form__item">
      <x-input-label for="password" :value="__('パスワード')" class="auth-form__label" />

      <x-text-input id="password" class="auth-form__text" type="password" name="password" required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="err-msg" />
    </div>

    <!-- Confirm Password -->
    <div class="auth-form__item">
      <x-input-label for="password_confirmation" :value="__('パスワード(確認)')" class="auth-form__label" />

      <x-text-input id="password_confirmation" class="auth-form__text" type="password" name="password_confirmation" required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
      <a class="auth-form__link" href="{{ route('login') }}">
        {{ __('既に登録済ですか?') }}
      </a>

      <x-primary-button class="ml-4">
        {{ __('登録') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>

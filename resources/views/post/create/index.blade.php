<x-app-layout>
  <div class="post">
    <div class="wrap">
      <h2 class="post__heading">新規作成</h2>
      <form action="{{ route('post.create.submit') }}" method="post" class="post-form" novalidate>
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <div class="post-form__item">
          <input type="text" name="title" placeholder="記事タイトル" class="post-form__text" value="{{ old('title') }}">
          <x-input-error :messages="$errors->get('title')" class="err-msg" />
        </div>
        <div class="post-form__item">
          <textarea name="content" rows="5" placeholder="内容" class="post-form__textarea">{{ old('content') }}</textarea>
          <x-input-error :messages="$errors->get('content')" class="err-msg" />
        </div>
        <div class="post-form__item flex">
          <input type="submit" value="投稿" class="post-form__btn">
          <a href="{{ route('post.index') }}" class="post-form__btn">戻る</a>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>

<x-app-layout>
  <div class="post">
    <div class="wrap">
      <h2 class="post__heading">記事編集</h2>
      <form action="{{ route('post.edit.submit', ['post' => $post->id]) }}" method="post" class="post-form" novalidate>
        @csrf
        @method('patch')
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <div class="post-form__item">
          <input type="text" name="title" placeholder="記事タイトル" class="post-form__text" value="{{ old('title', $post->title) }}">
          <x-input-error :messages="$errors->get('title')" class="err-msg" />
        </div>
        <div class="post-form__item">
          <textarea name="content" rows="5" placeholder="内容" class="post-form__textarea">{{ old('content', $post->content) }}</textarea>
          <x-input-error :messages="$errors->get('content')" class="err-msg" />
        </div>
        <div class="post-form__item flex">
          <input type="submit" value="更新" class="post-form__btn">
          <a href="{{ route('post.show', $post->id) }}" class="post-form__btn">戻る</a>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>

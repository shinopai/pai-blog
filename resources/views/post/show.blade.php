<x-app-layout>
  <!-- フラッシュメッセージ -->
  @if (session('flash'))
  <p class="flash-msg">{{ session("flash") }}</p>
  @endif
  <div class="post">
    <div class="wrap">
      <h2 class="post__heading">記事詳細</h2>
      <div class="post-detail">
        <h3 class="post-detail__heading">
          {{ $post->title }}
        </h3>
        <p class="post-detail__txt">{{ $post->content }}</p>
        <span class="post-detail__datetime"
          >投稿日時:{{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d H:i:m') }}</span
        >
        <span class="post-detail__datetime"
          >編集日時:{{ Carbon\Carbon::parse($post->updated_at)->format('Y-m-d H:i:m') }}</span
        >
        <div class="post-detail__footer flex">
          <a href="" class="post-detail__btn">編集</a>
          <a href="" class="post-detail__btn">削除</a>
          <a href="{{ route('post.index') }}" class="post-detail__btn">戻る</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

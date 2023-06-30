<x-app-layout>
  <!-- フラッシュメッセージ -->
  @if (session('flash'))
  <p class="flash-msg">{{ session('flash') }}</p>
  @endif
  <div class="post">
    <div class="wrap">
      <h2 class="post__heading">記事一覧</h2>
      <ul class="post-list">
        @forelse ($posts as $post)
        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="contents">
          <li class="post-list__item">
            <span class="post-list__datetime">投稿日時:{{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d H:i:m') }}</span>
            <span class="post-list__datetime">編集日時:{{ Carbon\Carbon::parse($post->updated_at)->format('Y-m-d H:i:m') }}</span>
            <h3 class="post-list__title">{{ $post->title }}</h3>
            <p class="post-list__content">
              {{ $post->content }}
            </p>
          </li>
        </a>
        @empty
        <li>記事はありません</li>
        @endforelse
      </ul>
      {{ $posts->links() }}
    </div>
  </div>
</x-app-layout>

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
        <a href="" class="contents">
          <li class="post-list__item">
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

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
        <span class="post-detail__datetime">投稿日時:{{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d H:i:m') }}</span>
        <span class="post-detail__datetime">編集日時:{{ Carbon\Carbon::parse($post->updated_at)->format('Y-m-d H:i:m') }}</span>
        <div class="post-detail__footer flex">
          @if(\MyFunc::isCurrentUser(Auth::id(), $post->user->id))
          <a href="{{ Route('post.edit.index', $post->id) }}" class="post-detail__btn">編集</a>
          <form action="{{ route('post.delete.submit', $post) }}" name="deleteForm" method="POST">
            @csrf
            @method('delete')
            <button type="button" class="post-detail__btn" onclick="submitForm()">削除</button>
          </form>
          @endif
          <a href="{{ route('post.index') }}" class="post-detail__btn">戻る</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function submitForm(){
      if(confirm('本当に記事を削除して宜しいですか？この作業は元に戻せません。')){
        document.deleteForm.submit();
      }
    }
  </script>
</x-app-layout>

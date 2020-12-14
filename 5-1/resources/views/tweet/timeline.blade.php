@extends('layouts.layout')

@section('content')
    <div class=post-area>
        <h2>ホーム</h2>
        <hr>
        <div class="form-area">
            <form action="{{ action('Admin\TweetController@create') }}" method="post">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            {{ csrf_field() }}
                <input class="post-tweet" type="text" name="body" value="{{ old('body') }}" placeholder="いまどうしてる？">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <br>
                <input class="post-button" type="submit" value="つぶやく">
            </form>
        </div>
    </div>

    <div class="timeline-area">
        @foreach($posts as $post)
        <div class="timeline-parts">
            <div class="timeline-top">
                <span>{{ $post->user->name }}</span>
                <span>{{ $post->created_at }}</span>
            </div>
            <div class="timeline-bottom">
                <span>{{ $post->body }}</span>
                @if($post->user_id == auth()->id())
                <span><a href="{{ action('Admin\TweetController@delete', ['id' => $post->id]) }}">削除</a></span>
                @else
                <span></span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
@endsection
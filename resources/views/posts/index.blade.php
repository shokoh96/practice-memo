@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg">
                        新規投稿
                    </a>
                </div>
                <div class="card text-center">
                    <div class="card-header" style="font-size: 18px;">
                        投稿一覧
                    </div>
                    @foreach ($posts as $post)
                        <div class="card-body">
                            <h5 class="card-title">タイトル ： {{ $post->title }}</h5>
                            <p class="card-text" style="font-size: 17px; margin-top: 20px;">
                                内容 : {{ $post->body }}
                            </p>
                            <p class="card-text">投稿者： さん</p>
                            {{-- {{ $post->user->name }} --}}
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細へ</a>
                        </div>
                        <div class="card-footer text-muted">
                            投稿日時 ： {{ $post->created_at }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

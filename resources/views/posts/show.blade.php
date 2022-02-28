@extends('layouts.app')

@section('title', '個別詳細')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5 style="font-size: 22px;" class="mb-0"> {{ $post->title }}</h5>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <p class="card-text" style="font-size: 20px;">{{ $post->body }}</p>
                        <p style="font-size: 16px;">投稿日時：{{ $post->created_at }}</p>
                        <div class="d-flex">
                            <form action="" method="POST" class="d-inline-block w-50">
                                @csrf
                                @method('delete')
                                <input type="submit" value="削除" class="btn btn-danger d-block"
                                    onclick="return confirm('本当に削除しますか？');">
                            </form>
                            <div class="text-right w-50">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"
                                    style="width: 150px;">編集する</a>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div><!-- /.card mt-3 -->
            </div>
        </div><!-- /.row -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <button type="button" class="btn btn-primary">コメントする</button>
            </div>
        </div><!-- /.row -->
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                コメント一覧
                <div class="card mt-3">
                    <h5 class="card-header">投稿者：健吾</h5>
                    <div class="card-body">
                        <h5 class="card-title">内容：俺は世界一のダンサーになる！</h5>
                        <p class="card-text">投稿日時：0001-12-20</p>
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection

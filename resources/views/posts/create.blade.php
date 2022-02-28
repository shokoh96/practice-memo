@extends('layouts.app')

@section('title', '新規投稿')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>タイトル</label>
                        <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label>内容</label>
                        <textarea name="body" class="form-control" placeholder="内容" rows="5"></textarea>
                    </div><!-- /.form-group -->
                    <button type="submit" class="btn btn-primary">作成</button>
                </form>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection

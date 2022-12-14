{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Home')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <h1>Checktest 6</h1>
    <form action="{{ action('TweetController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="body" value="{{ old('body') }}" placeholder="いまどうしてる？">
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary done" value="つぶやく">
                </form>
                <div class="card mb-2 bcard">
                @foreach($posts as $tweet)
                    <div class="flex card mb-2 justify-between">
                        @foreach($users as $user)
                            <!-- @if($tweet->user_id == $user->id) -->
                            <div class="flex flex-row justify-between w-full py-3">
                                <div class="flex flex-col border-box mx-4 border-b border-gray-200 user-name">{{ $user->name }}</div>
                                <div class="text-right">{{ $tweet->created_at }}</div>
                            </div>
                            <div class="flex flex-col border-box mx-4 border-b border-gray-200">{{ $tweet->body }}</div>
                            @if($tweet->user_id == Auth::id())
                                <div class="text-right">
                                    <a href="{{ action('TweetController@delete', ['id' => $tweet->id]) }}">削除</a>
                                </div>
                            @endif
                            <!-- @endif -->
                        @endforeach
                    </div>
                @endforeach
                </div>
@endsection
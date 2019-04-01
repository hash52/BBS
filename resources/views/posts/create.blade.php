@extends('layouts.app')

@section('content')
    <h2>投稿ページ</h2>
    <form action="{{ action('PostContller@store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>タイトル</div>
        <div><input type="text" name="title" value="{{ old('title') }}" /></div>
        <div>投稿</div>
        <div><textarea name="body" value="{{ old('body') }}" rows="20"/></textarea></div>
        <div><input type="file" name="image"/></div>
        <input type="submit" value="投稿"/>
    </form>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">投稿ページ</div>
            <div class="card-body">
                <form action="{{ action('PostContller@store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        タイトル
                    </div>
                    <div class='col-md-8 form-group'>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
                    </div>
                    <div>
                        本文
                    </div>
                    <div class='col-md-8 form-group'>
                        <textarea name="body" class="form-control" value="{{ old('body') }}" rows="20"></textarea>
                    </div>
                    
                    <label>
                        <span class="btn btn-dark">
                            画像を添付
                            <input type="file" name="image" style="display:none">
                        </span>
                    </label>
                    
                    <button type="submit" class="btn btn-danger"/>投稿</button>
    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
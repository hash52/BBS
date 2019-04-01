@extends('layouts.app')

@section('content')
    <table>
        @foreach($posts as $post)
            <tr>
                <th>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td><img src="{{ asset('storage/image/' . $post->image_path) }}" width='200px'></td>
            </tr>
        @endforeach
    </table>
@endsection
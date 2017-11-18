@extends('layouts.admin')

@section('content')

    <h1>All  Posts</h1>


    <div class="container">

        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>User Id</th>
                <th>Category</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>

            </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach($posts as $post)

                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user_id}}</td>
                        <td>{{$post->category_id}}</td>
                        <td><img src="/images/{{$post->photo_id}}" alt="" height="50" width="50"></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>

        </table>
    </div>


@stop



@extends('layouts.admin')


@section('content')
<h1>Media</h1>

    <div class="container">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @if($photos)
                @foreach($photos as $photo)

                    <tr>
                        <td>{{$photo->id}}</td>
                        <td><img height="50" width="50" src="/images/{{$photo->name}}"> </td>
                        <td>{{$photo->created_at->diffForHumans()}}</td>
                        <td>{{$photo->updated_at->diffForHumans()}}</td>
                        <td>


                            {!! Form::open(['method'=>'DELETE','action'=>['AdminMediasController@destroy',$photo->id]]) !!}

                            <input type="submit" name ="submitdel" value="Delete Post">


                            {!! Form::close() !!}



                        </td>

                    </tr>
                @endforeach
            @endif

            </tbody>

        </table>






@stop

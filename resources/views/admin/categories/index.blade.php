@extends('layouts.admin')


@section('content')

<h1>Create Categories</h1>

{!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token() }}" />
<div class="form-group">
    <input type="text" name ="name" placeholder ="title">category Name<br>

    <input type="submit" name ="submit" value="Create Category">

</div>
{!! Form::close() !!}


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
        @if($categories)
            @foreach($categories as $cat)

                <tr>
                    <td>{{$cat->id}}</td>
                    <td><a href="{{route('categories.edit',$cat->id)}}">{{$cat->name}}</td>
                    <td>{{$cat->created_at}}</td>
                    <td>{{$cat->updated_at}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>

    </table>




    @stop
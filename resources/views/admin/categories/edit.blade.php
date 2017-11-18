@extends('layouts.admin')


@section('content')

    <h1>Edit Categories</h1>

    {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}
    <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token() }}" />
    <div class="form-group">
        <input type="text" name ="name" placeholder ="title">category Name<br>

        <input type="submit" name ="submit" value="update Category">

    </div>
    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
    <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token() }}" />
    <div class="form-group">

        <input type="submit" name ="submit" value="Delete Category">

    </div>
    {!! Form::close() !!}




@stop
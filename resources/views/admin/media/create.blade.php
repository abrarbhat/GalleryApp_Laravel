@extends('layouts.admin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css"

@section('content')
    <h1>Upload Media</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminMediasController@store']) !!}

    <input type="file" name ="file" >

    <input type="submit" name ="upload" value="upload">

    {!! Form::close() !!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>

@stop

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create user</title>
</head>
<body>
<h1>Edit post</h1>

{!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>'true']) !!}
<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token() }}" />
<div class="form-group">
    <input type="text" name ="title" placeholder ="title">Title<br>
    <input type="text" name ="user_id" placeholder ="title">User Id<br>

    <select name="category_id" >
        <option value="0">languages</option>
        <option value="1">Php</option>
        <option value="2">Laravel</option>
        <option value="3">Javascript</option>
        <option value="4">bootstrap</option>
    </select>Category<br>
    <input type="file" name="photo_id">Image<br>
    <textarea name="body" cols="30" rows="10"></textarea><br>
    <input type="submit" name ="submit" value="Update Posts">

</div>
{!! Form::close() !!}

{!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}

<input type="submit" name ="submitdel" value="Delete Post">


{!! Form::close() !!}



@include('includes.form_error')
</body>
</html>
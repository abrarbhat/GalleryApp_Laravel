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
<h1>create post</h1>

{!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store']) !!}
<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token() }}" />
<div class="form-group">
    <input type="text" name ="title" placeholder ="title">Title<br>
    <input type="text" name ="user_id" placeholder ="title">User Id<br>

    <select name="category_id" >
        <option value="0">Select One</option>
        <option value="1">Admin</option>
        <option value="2">Author</option>
        <option value="3">Subscriber</option>
    </select>Category<br>
    <input type="file" name="photo_id">Image<br>
    <textarea name="body" cols="30" rows="10"></textarea>
    <input type="submit" name ="submit" value="create Posts">

</div>
{!! Form::close() !!}

@include('includes.form_error')
</body>
</html>
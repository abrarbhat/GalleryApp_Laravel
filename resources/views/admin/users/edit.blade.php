<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
<div class="col-sm-3">

    <img src="{{$user->photo}}" class="image-responsive img-rounded">

</div>

<h1>edit user</h1>

<div class="col sm 9">

{!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>'true']) !!}
<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token() }}" />
<div class="form-group">
    <input type="text" name ="name" placeholder ="text">Name<br>
    <input type="text" name ="email" placeholder ="email">Email<br>
    <input type="password" name ="password" placeholder ="password">Password<br>
    <select name="role_id" >
        <option value="1">Admin</option>
        <option value="2">Author</option>
        <option value="3">Subscriber</option>
    </select>Role<br>
    <select name="is_active">
        <option value="1">Active</option>
        <option value="0">InActive</option>
    </select>Status<br>
    <input type="file" name="photo_id"><br>

    <input type="submit" name ="submit" value="create User">

</div>
{!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}

    <input type="submit" name ="submitdel" value="Delete User">


    {!! Form::close() !!}

</div>

@include('includes.form_error')
</body>
</html>
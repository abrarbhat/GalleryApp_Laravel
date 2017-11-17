@extends('layouts.admin')




@section('content')

    <h1>Users</h1>


    <div class="container">
        <h2>Condensed Table</h2>
        <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>

            </tr>
            </thead>
            <tbody>
            @if($user)
                 @foreach($user as $us)

            <tr>
                <td>{{$us->id}}</td>
                <td><img height="50" width="50" src="/images/{{$us->photo_id}}"></td>
                <td><a href="{{route('users.edit',$us->id)}}">{{$us->name}}</a></td>
                <td>{{$us->email}}</td>
                <td>{{$us->role->name}}</td>
                <td>{{$us->is_active== 1?'active':'not active'}}</td>
                <td>{{$us->created_at->diffForHumans()}}</td>
                <td>{{$us->updated_at->diffForHumans()}}</td>
            </tr>
                @endforeach
            @endif

            </tbody>

        </table>
    </div>

    @stop
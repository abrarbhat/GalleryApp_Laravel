@extends('layouts.admin')




@section('content')

    @if(Session::has('deleted_user'))

        <p>{{session('deleted_user')}}</p>

        @endif

    <h1>Users</h1>


    <div class="container">
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
                <td>{{$us->role_id}}</td>
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
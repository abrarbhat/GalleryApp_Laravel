<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Photo;
use Illuminate\Http\Request;
use App\User;
class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();

        return view('admin.users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

//        return $request->all();
        $user = new User();
        $user->name=$request->name;
        $user->email =$request->email;
        $user->password=$request->password;
        $user->role_id=$request->role_id;
        $user->is_active=$request->is_active;
        $user->photo_id=$request->photo_id;
        $user->save();

    //    echo $user."<br>";

        $photo = new Photo();
        $photo->file = $request->photo_id;
        $photo->save();


       return redirect(route('users.index'));
  //      echo $photo."<br>";

//        $photo->move('images','$photo->file');


        //
//        $file=$request->file('photo_id');
//       // $name = time().$file->getClientOriginalName();
//        $name=$request->name;
//        $file->move('images',$name);
//        $photo =Photo::create(['file'=>$name]);

//
//            $input = $request->all();
//
//        if($file=$request->file('photo_id'))
//        {
//            $name = time().$file->getClientOriginalName();
//            $file->move('images',$name);
//            $photo =Photo::create(['file'=>$name]);
//        }
//
//        $input['password'] = bcrypt($request->password);
//        User::create($input);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
   return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    return view('admin.users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

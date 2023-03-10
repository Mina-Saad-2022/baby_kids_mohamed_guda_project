<?php

namespace App\Http\Controllers\Action_user;

use App\Http\Controllers\Controller;
use App\Http\Requests\User_Request;
use App\Http\Traits\trait_image;
use App\User;
use Illuminate\Http\Request;


class action_user extends Controller
{
    use trait_image;

    // to insert tne new users create in database

    public function create_new_user(User_Request $request)
    {
//        $file_name =time().'.png';
//        $photo_user = $this->upload_image($request->photo,$file_name,'assets/images/avatar_user/');

//        return redirect('/Admin/User/All');


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->photo = $request->photo;
        $user->save();


    }

    public function edit_page($id)
    {

        $users = User::find($id);
        return view('pages.edit_users', compact('users'));
    }

    // to show all data in table

    public function all_create()
    {
        $users = User::all();
        return view('pages.table_users', compact('users'));
    }


    public function done_edit(User_Request $request)
    {


        $update = User::find($request->id);
        $update->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);
//
//        $update->name=$request->name;
//        $update->email=$request->email;
//        $update->password=$request->password;
//        $update->phone=$request->phone;
//        $update->gender=$request->gender;
//        $update->save();


        return redirect(route('table_users'));
    }

    // to delete row form table

    public function delete_user(Request $request)
    {


        $user_id_delete = User::where('id', $request->user_id)->first();
        $user_id_delete->delete();
        return redirect('Admin/User/All');
    }

//
//    public function photo_user(upload_photo_user $request)
//    {
//        $file = $request->photo->getClientOriginalName();
//        $file_name = time() . $file;
//        $path = public_path('assets/images/avatar_user/');
//        $request->photo->move($path, $file_name);
//        dd($file_name);
//    }

//    public function photo_user(upload_photo_user $request){
//        $file_name = time().'_photo.png' ;
//        $request->photo->storeAs('public/assets/images/avatar_user',$file_name->getClientOriginalName());
//        dd($file_name);
//}
}

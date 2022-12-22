<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{

    public function user()
    {
        $data=user::all();
        return view('main-login', compact("data"));
    }

    // public function redirectMain(Request $req)
    // {
    //     $data=user::find($req->id);

    //     return redirect('/user');
    // }
    
    // public function specificUser()
    // {
    //     $data=user::find($id);

    //     return view('main-login', ['redirectMain'=>$value]);
    // }
}

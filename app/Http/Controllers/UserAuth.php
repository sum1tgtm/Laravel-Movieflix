<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    public function userLogin(Request $req){
       $data = $req->input();
       $req->session()->put('user',$data['user']);
       return redirect('movies');
    }
}

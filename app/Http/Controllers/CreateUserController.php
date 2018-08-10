<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUserController extends Controller
{
//    public function create()
//    {
//        return view('create_users.create_users');
//    }

    public function index()
    {
//        $allU = User::paginate(8);
        $allU = DB::table('users')
            ->orderBy('ID', 'DESC')
            ->paginate(10);

        return view('/create_users.show_users')->with(['allU' => $allU ]);
    }

    public function destroy($id)
    {
        $user =  User::find($id);
        $user->delete();
        return redirect('/Users')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}

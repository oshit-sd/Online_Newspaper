<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function getAdminPanel()
    {
        $news = DB::table('news')->get()->count();
        $mm = DB::table('mainmenus')->get()->count();
        $hl = DB::table('headings')->get()->count();
        return view('admin.dashboard')->with(['news' => $news,'mm' => $mm,'hl' => $hl]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}

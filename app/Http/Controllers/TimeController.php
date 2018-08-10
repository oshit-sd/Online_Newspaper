<?php

namespace App\Http\Controllers;

use App\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeController extends Controller
{
    public function create()
    {
        return view('/update_time.add_time');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Time::create($data);
        return redirect('/Time/create')->with('message', 'Data Insert successfully');
    }

    public function index()
    {
//        $allMM = Mainmenu::all();
//        $allUT = Time::paginate(3);

        $allUT = DB::table('times')
            ->orderBy('ID', 'DESC')
            ->paginate(10);
        return view('/update_time.list_time')->with(['allData' => $allUT ]);
    }


    public function edit($id)
    {
        $ut = Time::find($id);
        return view('update_time.edit_time')->with(['ut' => $ut ]);
    }

    public function update(Request $request, $id)
    {
        $mm =  Time::find($id);
        $data = $request->all();
        $mm->update($data);
        return redirect('/Time')->with('message', 'Data Update successfully');
    }

    public function destroy($id)
    {
        $mm =  Time::find($id);
        $mm->delete();
        return redirect('/Time')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}

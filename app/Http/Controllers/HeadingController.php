<?php

namespace App\Http\Controllers;

use App\Heading;
use App\Mainmenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeadingController extends Controller
{
    public function create()
    {
        $allMM = Mainmenu::all();
        return view('/heading.add_heading')->with(['allMm' => $allMM]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Heading::create($data);
        return redirect('/Heading/create')->with('message', 'Data Insert successfully');
    }

    public function index()
    {
//        $allHD = Heading::paginate(8);
        $allHD = DB::table('headings')
            ->orderBy('ID', 'DESC')
            ->paginate(10);
        return view('/heading.list_heading')->with(['allData' => $allHD ]);
    }


    public function edit($id)
    {
        $allMM = Mainmenu::all();
        $hd = Heading::find($id);
        return view('Heading.edit_Heading')->with(['HD' => $hd,'allMm' => $allMM]);
    }

    public function update(Request $request, $id)
    {
        $mm =  Heading::find($id);
        $data = $request->all();
        $mm->update($data);
        return redirect('/Heading')->with('message', 'Data Update successfully');
    }

    public function destroy($id)
    {
        $dept =  Heading::find($id);
        $dept->delete();
        return redirect('/Heading')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}

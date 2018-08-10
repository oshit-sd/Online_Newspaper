<?php

namespace App\Http\Controllers;

use App\Mainmenu;
use App\Submenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function create()
    {
        $allMM = Mainmenu::all();
        return view('/sub_menu.add_subMenu')->with(['allMm' => $allMM]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Submenu::create($data);
        return redirect('/SubMenu/create')->with('message', 'Data Insert successfully');
    }

    public function index()
    {
        $allSM = Submenu::paginate(3);
        return view('/sub_menu.list_subMenu')->with(['allData' => $allSM]);
    }


    public function edit($id)
    {
        $allMM = Mainmenu::all();
        $sm = Submenu::find($id);
        return view('sub_menu.edit_subMenu')->with(['smenu' => $sm, 'allMm' => $allMM ]);
    }

    public function update(Request $request, $id)
    {
        $sm =  Submenu::find($id);
        $data = $request->all();
        $sm->update($data);
        return redirect('/SubMenu')->with('message', 'Data Update successfully');
    }

    public function destroy($id)
    {
        $dept =  Submenu::find($id);
        $dept->delete();
        return redirect('/SubMenu')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}

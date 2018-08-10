<?php

namespace App\Http\Controllers;

use App\Mainmenu;
use Illuminate\Http\Request;

class MainMenuController extends Controller
{
    public function create()
    {
        return view('/main_menu.add_mainMenu');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Mainmenu::create($data);
        return redirect('/MainMenu/create')->with('message', 'Data Insert successfully');
    }

    public function index()
    {
//        $allMM = Mainmenu::all();
        $allMM = Mainmenu::paginate(9);
        return view('/main_menu.list_mainMenu')->with(['allData' => $allMM ]);
    }


    public function edit($id)
    {
        $mm = Mainmenu::find($id);
        return view('main_menu.edit_mainMenu')->with(['mmenu' => $mm ]);
    }

    public function update(Request $request, $id)
    {
        $mm =  Mainmenu::find($id);
        $data = $request->all();
        $mm->update($data);
        return redirect('/MainMenu')->with('message', 'Data Update successfully');
    }

    public function destroy($id)
    {
        $mm =  Mainmenu::find($id);
        $mm->delete();
        return redirect('/MainMenu')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}

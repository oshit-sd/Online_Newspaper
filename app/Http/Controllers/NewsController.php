<?php

namespace App\Http\Controllers;

use App\Mainmenu;
use App\News;
use App\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller

{
    public function create()
    {
        $allMM = Mainmenu::all();
        $allSM = Submenu::all();
        return view('/publish_news.create_news')->with(['allMm' => $allMM,'allSM' => $allSM]);
    }

    public function SearchNews()
    {
        $datas =  DB::table('mainmenus')->get();

        $Heading =  DB::table('headings')
            ->orderBy('ID', 'DESC')
            ->limit(4)
            ->get();

        $q = Input::get('q');
        $data = DB::table('news')
            ->where('heading', 'LIKE', '%'.$q.'%')
            ->orwhere('mmenu', 'LIKE', '%'.$q.'%')
            ->get();

        if(count($data)>0) {
            return view('publish_news.search')->withDetails($data)->withQuery($q)->with([ 'menu' =>$datas, 'Heading' => $Heading]);
        }
        else {
            return view('publish_news.search')->withMessage('No results found. Try to search again !')->with(['menu' =>$datas,'Heading' => $Heading]);
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
//        News::create($data);

        $image = Input::file('img');
        if(!isset($image)){
            $data = $request->all();
            News::create($data);
            return redirect('/News/create')->with('message', 'Data Insert successfully');
        }
        else {
            $img = News::create($data);

            if ($request->hasFile('img')) {
                $p_image = Input::file('img');
                $basename = time() . '.' . $p_image->getClientOriginalExtension();
                $path = public_path() . "/publish_pic/" . $basename;
                $data2 = Image::make($p_image->getRealPath())->save($path);
            }
            $pimg = News::find($img->id);

            $pimg->update(['img' => "/publish_pic/" . $basename]);

            return redirect('/News/create')->with('message', 'Data Insert successfully');
        }
    }




    public function index()
    {
//        $allPN = News::paginate(5);

        $allPN = DB::table('news')
            ->join('mainmenus','news.mmenu','=','mainmenus.id' )
            ->orderBy('news.id' , 'DESC')
            ->select('news.*','mainmenus.mmenu')
            ->paginate(10);

        return view('/publish_news.show_news')->with(['allData' => $allPN ]);
    }

    public function next()
    {
//        $allPN = News::paginate(8);

        $allPN = DB::table('news')
            ->join('mainmenus','news.mmenu','=','mainmenus.id' )
            ->orderBy('news.id' , 'DESC')
            ->select('news.*','mainmenus.mmenu')
            ->paginate(15);

        return view('/publish_news.next_news')->with(['allData' => $allPN ]);
    }


    public function edit($id)
    {
        $allMM = Mainmenu::all();
        $allSM = Submenu::all();

//        $pn = News::find($id);

        $pn = DB::table('news')
            ->join('mainmenus','news.mmenu','=','mainmenus.id' )
            ->orderBy('news.id' , 'DESC')
            ->select('news.*','mainmenus.mmenu')
            ->where('news.id', '=', $id)
            ->get();


        return view('publish_news.edit_news')->with(['pnews' => $pn,'allMm' => $allMM,'allSM' => $allSM ]);
    }

    public function update(Request $request, $id)
    {
        $pn =  News::find($id);

        $image = Input::file('img');
        if(!isset($image)){
            $data = $request->all();
            $pn->update($data);
            return redirect('/News')->with('message', 'Data Update successfully');
        }
        else {
            if ($request->hasFile('img')) {
                $p_image = Input::file('img');
                $basename = time() . '.' . $p_image->getClientOriginalExtension();
                $path = public_path() . "/publish_pic/" . $basename;
                $data2 = Image::make($p_image->getRealPath())->save($path);
            }
            $data = $request->all();
            $pn->update($data);

            $pn->update(['img' => "/publish_pic/" . $basename]);

            return redirect('/News')->with('message', 'Data Update successfully');
        }
    }

    public function destroy($id)
    {
        $pn =  News::find($id);
        $pn->delete();
        return redirect('/News')->with('msg', 'Data Delete successfully');
    }



    public function DeleteHome(Request $request, $id)
    {
        DB::table('news')
            ->where('id', $id)
            ->update(['home' => '']);
        return back();
    }

    public function DeleteSlide(Request $request, $id)
    {
        DB::table('news')
            ->where('id', $id)
            ->update(['slide' => '']);
        return back();
    }

    public function DeletePopu(Request $request, $id)
    {
        DB::table('news')
            ->where('id', $id)
            ->update(['popular' => '']);
        return back();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}

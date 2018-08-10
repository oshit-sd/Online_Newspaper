<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index()
    {
        $data =  DB::table('mainmenus')->get();

        $Heading =  DB::table('headings')
            ->orderBy('ID', 'DESC')
            ->limit(1)
            ->get();

        return view('search.search')->with([
                                            'menu' =>$data,

                                            'Heading' => $Heading
                                        ]);
    }


    public function Search()
    {
        $datas =  DB::table('mainmenus')->get();

        $Heading =  DB::table('headings')
            ->orderBy('ID', 'DESC')
            ->limit(4)
            ->get();

        $q = Input::get('q');
        $data = DB::table('news')
            ->where('heading', 'LIKE', '%'.$q.'%')
            ->orwhere('details', 'LIKE', '%'.$q.'%')
            ->orwhere('mmenu', 'LIKE', '%'.$q.'%')
            ->get();

        if(count($data)>0) {
            return view('search.search')->withDetails($data)->withQuery($q)->with([ 'menu' =>$datas, 'Heading' => $Heading]);
        }
        else {
            return view('search.search')->withMessage('No results found. Try to search again !')->with(['menu' =>$datas,'Heading' => $Heading]);
        }
    }

}

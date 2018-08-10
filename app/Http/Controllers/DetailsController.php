<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller
{

    public function index()
    {
        $data =  DB::table('mainmenus')->get();
        return view('details.details')->with(['menu' =>$data]);
    }

    public function show($id, $mmenu, $link)
    {
        $data =  DB::table('mainmenus')->get();

        $details = DB::table('news')
            ->where('news.id', $id)
            ->leftJoin('mainmenus','mainmenus.id','=','news.mmenu' )
//            ->join('mainmenus','news.mmenu','=','mainmenus.id' )
//            ->select('news.*','mainmenus.mmenu')
            ->get();

        $moreNews =  DB::table('news')
            ->where('mmenu', $mmenu)
            ->orderBy('ID', 'DESC')
            ->limit(10)
            ->get();

        $relNews =  DB::table('news')
            ->where('news.mmenu', $mmenu)
            ->orderBy('news.id', 'DESC')
            ->limit(10)
            ->get();

        $LastNews =  DB::table('news')
            ->orderBy('ID', 'DESC')
            ->limit(10)
            ->get();

        $Heading =  DB::table('headings')
            ->leftJoin('mainmenus','mainmenus.id','=','headings.mmenu')

//            ->join('mainmenus','headings.mmenu','=','mainmenus.id' )
//            ->select('headings.*','mainmenus.id, mainmenus.mmenu')

            ->orderBy('headings.id', 'DESC')
            ->limit(4)
            ->get();
        return view('details.details')->with([
                                            'menu' =>$data,
                                            'details' => $details,
                                            'relNews' => $relNews,
                                            'moreNews' => $moreNews,
                                            'LastNews' => $LastNews,
                                            'Heading' => $Heading
                                        ]);

    }



    public function menuShow($id, $mmenu)
    {
        $data =  DB::table('mainmenus')->get();

        $details = DB::table('news')
            ->where('news.mmenu', $id)
            ->leftJoin('mainmenus','mainmenus.id','=','news.mmenu' )

//            ->join('mainmenus','news.mmenu','=','mainmenus.id' )
//            ->select('news.*','mainmenus.mmenu')

            ->orderBy('news.id', 'DESC')
            ->limit(1)

            ->get();

        $moreNews =  DB::table('news')
            ->where('mmenu', $id)
            ->orderBy('ID', 'DESC')
            ->limit(10)
            ->get();

        $relNews =  DB::table('news')
            ->where('mmenu', $id)
            ->orderBy('ID', 'DESC')
            ->limit(10)
            ->get();

        $LastNews =  DB::table('news')
            ->orderBy('ID', 'DESC')
            ->limit(10)
            ->get();

        $Heading =  DB::table('headings')
            ->leftJoin('mainmenus','mainmenus.id','=','headings.mmenu')
            ->orderBy('headings.id', 'DESC')
            ->limit(4)
            ->get();
        return view('details.details')->with([
                                            'menu' =>$data,
                                            'details' => $details,
                                            'relNews' => $relNews,
                                            'moreNews' => $moreNews,
                                            'LastNews' => $LastNews,
                                            'Heading' => $Heading
                                        ]);

    }

    /*Error Menu*/
    public function errorid($id)
    {
        return view('errors.503');
    }
    public function errormenu()
    {
        return view('errors.503');
    }

    /*Error Details*/
     public function errorDetail($id, $mmenu)
    {
        return view('errors.503');
    }
    public function errorDetails($id)
    {
        return view('errors.503');
    }
    public function errorDet()
    {
        return view('errors.503');
    }

    }

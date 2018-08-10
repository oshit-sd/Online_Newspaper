<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicHomeController extends Controller
{

    public function index()
    {
       $data =  DB::table('mainmenus')->get();

       $slider=  DB::table('news')
//           ->join('mainmenus','news.mmenu','=','mainmenus.id' )
//            ->select('news.*','mainmenus.mmenu')
           ->where('Slide', 'Slide')
           ->orderBy('news.id', 'DESC')

           ->limit(10)
           ->get();


       $popolar =  DB::table('news')
           ->where('Popular', 'Popular')
           ->orderBy('ID', 'DESC')
           ->limit(4)
           ->get();

       $national =  DB::table('news')
           ->where('mmenu', 2)
           ->where('Home', 'Home')
           ->orderBy('ID', 'DESC')
           ->limit(3)
           ->get();
       $natMore =  DB::table('news')
           ->where('mmenu', 2)
           ->orderBy('ID', 'DESC')
           ->limit(6)
           ->get();


       $international =  DB::table('news')
           ->where('mmenu', 3)
           ->where('Home', 'Home')
           ->orderBy('ID', 'DESC')
           ->limit(3)
           ->get();
       $intMore =  DB::table('news')
           ->where('mmenu', 3)
           ->orderBy('ID', 'DESC')
           ->limit(6)
           ->get();


        $rajniti =  DB::table('news')
           ->where('mmenu', 4)
            ->where('Home', 'Home')
           ->orderBy('ID', 'DESC')
           ->limit(3)
           ->get();
        $rnMore =  DB::table('news')
           ->where('mmenu', 4)
           ->orderBy('ID', 'DESC')
           ->limit(6)
           ->get();


       $sports =  DB::table('news')
           ->where('mmenu', 9)
           ->where('Home', 'Home')
           ->orderBy('ID', 'DESC')
           ->limit(2)
           ->get();
       $sptMore =  DB::table('news')
           ->where('mmenu', 9)
           ->orderBy('ID', 'DESC')
           ->limit(5)
           ->get();


        $enter =  DB::table('news')
           ->where('mmenu', 10)
            ->where('Home', 'Home')
           ->orderBy('ID', 'DESC')
           ->limit(2)
           ->get();
        $entMore =  DB::table('news')
           ->where('mmenu', 10)
           ->orderBy('ID', 'DESC')
           ->limit(5)
           ->get();


        $BizMore =  DB::table('news')
            ->where('mmenu', 5)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $BusMore =  DB::table('news')
            ->where('mmenu', 7)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $infoMore =  DB::table('news')
            ->where('mmenu', 6)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $allMore =  DB::table('news')
            ->where('mmenu', 8)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $lypMore =  DB::table('news')
            ->where('mmenu', 12)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $letMore =  DB::table('news')
            ->where('mmenu', 11)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $techMore =  DB::table('news')
            ->where('mmenu', 13)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $helMore =  DB::table('news')
            ->where('mmenu', 14)
            ->orderBy('ID', 'DESC')
            ->limit(6)
            ->get();

        $LastNews =  DB::table('news')
            ->orderBy('ID', 'DESC')
            ->limit(5)
            ->get();

        $Heading =  DB::table('headings')
            ->leftJoin('mainmenus','mainmenus.id','=','headings.mmenu')
            ->orderBy('headings.id', 'DESC')
            ->limit(4)
            ->get();

        return view('home.home')->with([
                                        'menu' =>$data,

                                        'slider' =>$slider,

                                        'popular' =>$popolar,

                                        'national' =>$national,
                                        'natMore' =>$natMore,

                                        'international' =>$international,
                                        'intMore' =>$intMore,

                                        'rajniti' =>$rajniti,
                                        'rnMore' =>$rnMore,

                                        'sports' =>$sports,
                                        'sptMore' =>$sptMore,

                                        'enter' =>$enter,
                                        'entMore' =>$entMore,

                                        'BizMore' =>$BizMore,

                                        'BusMore' =>$BusMore,

                                        'infoMore' =>$infoMore,

                                        'allMore' =>$allMore,

                                        'lypMore' =>$lypMore,

                                        'letMore' =>$letMore,

                                        'techMore' =>$techMore,

                                        'helMore' =>$helMore,

                                        'LastNews' => $LastNews,

                                        'Heading' => $Heading

                                    ]);
    }


}

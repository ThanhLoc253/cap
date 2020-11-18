<?php

namespace App\ Http\ Controllers;
use DB;
use File;
use Illuminate\ Http\ Request;
use App\ User;
use App\ Model\ UserLevel;
use App\ Model\ System;
use App\ Model\ Page;

use App\ Model\ Patient;
use App\ Model\ Boxmap;
use App\ Http\ Requests\ FormMapRequest;

use Image;
use App\Model\NewsCategory;
use App\Model\News;

class FrontController extends Controller {
    
    public function __construct() {
        @session_start();

        //favicon
        $favicon = System::select('Description')->where('Code','favicon')->first();
        view()->share('favicon',$favicon);

        //page
        $Page = Page::where('Status',1)->selectRaw('Name, Font, Alias')->orderBy('Sort','ASC')->get();
        view()->share('Page',$Page);
    }

    
    public function home() {
        return view('front.home.home');
    }
    

    public function slug($slug){
        // $newsCat = DB::table('news as a')
        // ->join('news_cat as b', 'a.RowIDCat', '=', 'b.RowID')
        // ->selectRaw('a.*, b.Name as CategoryName')
        // ->where('a.RowIDCat',1)
        // ->orderBy('a.RowID', 'DESC')
        // ->limit()->get();

        $newsCat = Page::where('Status',1)->where('Alias',$slug)->first();

        return view('front.news.cat',compact('newsCat'));
    }






    public function news(){

        $news = Page::where('Status',1)->where('Alias','tin-tuc')->first();

        return view('front.news.news',compact('news'));
    }
}

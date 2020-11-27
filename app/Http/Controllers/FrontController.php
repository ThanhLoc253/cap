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
    

    public function slug($slug, Request $request){
        // $newsCat = DB::table('news as a')
        // ->join('news_cat as b', 'a.RowIDCat', '=', 'b.RowID')
        // ->selectRaw('a.*, b.Name as CategoryName')
        // ->where('a.RowIDCat',1)
        // ->orderBy('a.RowID', 'DESC')
        // ->limit()->get();

        $newsCat = Page::where('Status',1)->where('Alias',$slug)->first();

        if(isset($newsCat)&&$newsCat != null){
            $listNews = DB::table('news as a')
            ->join('news_cat as b','a.RowIDCat','=','b.RowID')
            ->where('a.Status',1)
            ->where('b.Alias',$slug)
            ->selectRaw('a.Alias, a.Name, a.Images, a.SmallDescription, a.created_at')
            // ->where('a.RowIDCat',2)
            ->paginate(4);

            return view('front.news.cat',compact('newsCat','listNews'));
        }

        
    }

    public function slugHtml($slug, Request $request){
        $newsitem = DB::table('news as a')
        ->join('news_cat as b','a.RowIDCat','=','b.RowID')
        ->where('a.Status',1)
        ->where('a.Alias',$slug)
        ->selectRaw('a.Alias, a.Name, a.Images, a.created_at, a.Description, b.Name as NewsCatName, b.Alias as NewsCatAlias')
        // ->where('a.RowIDCat',2)
        ->first();


        $AddNews = DB::table('news as a')
        ->join('news_cat as b','a.RowIDCat','=','b.RowID')
        ->where('a.Status',1)
        ->selectRaw('a.Alias, a.Name, a.Images')
        ->where('a.RowIDCat',2)
        ->limit(4)->get();
        return view('front.news.newsitem',compact('newsitem','AddNews'));
    }



    public function news(){

        $news = Page::where('Status',1)->where('Alias','tin-tuc')->first();

        $HomeNews = DB::table('news as a')
        ->join('news_cat as b','a.RowIDCat','=','b.RowID')
        ->where('a.Status',1)
        ->selectRaw('a.Alias, a.Name, a.Images, a.SmallDescription')
        ->where('a.RowIDCat',2)
        ->limit(4)->get();

        $HomeNews1 = DB::table('news as a')
        ->join('news_cat as b','a.RowIDCat','=','b.RowID')
        ->where('a.Status',1)
        ->selectRaw('a.Alias, a.Name, a.Images, a.SmallDescription')
        ->where('a.RowIDCat',2)
        ->limit(1)->get();

        $HomeNews2 = DB::table('news as a')
        ->join('news_cat as b','a.RowIDCat','=','b.RowID')
        ->where('a.Status',1)
        ->selectRaw('a.Alias, a.Name, a.Images, a.SmallDescription')
        ->where('a.RowIDCat',2)
        ->paginate(2);

        $Timeline = DB::table('news as a')
        ->join('news_cat as b','a.RowIDCat','=','b.RowID')
        ->where('a.Status',1)
        ->selectRaw('a.Alias, a.Name, a.Images, a.Description, a.created_at')
        ->where('a.RowIDCat',1)
        ->paginate(2);

        return view('front.news.news',compact('news','HomeNews','HomeNews1','HomeNews2','Timeline'));
    


        // return view('front.news.news',compact('news'));
    }

    public function getmaps(Request $request){

        $getmaps = Page::where('Status',1)->where('Alias','ban-do-dich')->first();
        $input = $request->all();
        $boxmap = Boxmap::get();
        $Patient = Patient::get();

        if(isset($input['patient_id'])){
            $dataMap = Boxmap::where('patient_id',$input['patient_id'])->get();
            $patientCount = $this->getPatientCount($input['patient_id']);
        }
        else{
            $dataMap = Boxmap::all();    
            $patientCount = $this->getPatientCount();
        }
        return view('front.maps.maps',compact('dataMap','Patient','patientCount','getmaps'));
    }
    
    public function getPatientCount($Patient_id='')
    {
        $dataMap = DB::table('patient')
            ->select('patient.RowID','patient.fullname',DB::raw("count(boxmaps.id) as jml"))
            ->join('boxmaps','boxmaps.patient_id','=','patient.RowID')
            ->groupBy('patient.RowID','patient.fullname');

        if($Patient_id){
            $dataMap = $dataMap->where('boxmaps.patient_id',$Patient_id);
        }
            return $dataMap->get();
    }
}

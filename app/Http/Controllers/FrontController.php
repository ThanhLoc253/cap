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

    public function getmaps(Request $request){

        $maps = Page::where('Status',1)->where('Alias','ban-do-dich')->first();
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
        return view('front.maps.maps',compact('dataMap','Patient','patientCount','$maps'));
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

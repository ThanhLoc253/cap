<?php

namespace App\Http\Controllers;
use DB;
use File;

use Illuminate\ Http\ Request;
use App\ Http\ Requests\ FormMapRequest;
use App\ User;
use App\ Model\ UserLevel;
use App\ Model\ System;
use App\ Model\ Page;
use App\ Model\ Patient;
use App\ Model\ Boxmap;


class PageController extends Controller
{
    public function __construct(){
        @session_start();
    }

    public function getmaps(Request $request){
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
        return view('maps',compact('dataMap','Patient','patientCount'));
    }

    public function getPatientCount($Patient_id='')
    {
        $dataMap = DB::table('patient')
            ->select('patient.RowID','patient.fullname','patient.quequan','patient.ghichu',DB::raw("count(boxmaps.id) as jml"))
            ->join('boxmaps','boxmaps.patient_id','=','patient.RowID')
            ->groupBy('patient.RowID','patient.fullname','patient.quequan','patient.ghichu');

        if($Patient_id){
            $dataMap = $dataMap->where('boxmaps.patient_id',$Patient_id);
        }
            return $dataMap->get();
    }
}

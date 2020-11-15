<?php

namespace App\ Http\ Controllers;
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

class BackController extends Controller {
    
    public function __construct() {
        @session_start();
    }

    
    public function home() {
        return view('back.home.home');
    }
    // staff-------------------------------------------------//
    
    public function staff_profile() {
        return view('back.staff.profile');
    }
    
    public function staff_profile_post(Request $request) {
        if ($request -> fullname == '' || $request -> email == '' || $request -> phone == '') {
            return redirect('admin/staff/profile') -> with(['flash_level' => 'danger', 'flash_message' => 'Vui lòng
                        điền vào chỗ trống ']);
        }

            $User = User::find($request -> id); 
            $User -> fullname = $request -> fullname; 
            $User -> address = $request -> address; 
            $User -> email = $request -> email; 
            $User -> phone = $request -> phone;
            if (isset($request -> password) && $request -> password != '') {
                        $User -> password = bcrypt($request -> password);
            }
            $Flag = $User -> save();
                if ($Flag == true) {
                    return redirect('admin/staff/profile') -> with(['flash_level' => 'success', 'flash_message' => 'Cập nhật 
                                    thông tin tài khoản thành công ']);
                }
                else {
                    return redirect('admin/staff/profile') -> with(['flash_level' => 'danger', 'flash_message' => 'Cập nhật 
                                            thông tin tài khoản thất bại ']);
                }
    }
                                    
    public function staff_list() {
            $User = DB::table('users as a') 
            -> join('users_level as b', 'a.level', '=', 'b.idLevel') 
            -> selectRaw('a.id,  a.fullname, a.address, a.email, a.phone, b.name') -> get();                                         

            return view('back.staff.list', compact('User'));
    }
                 
    public function staff_add() {
            $UserLevel = UserLevel::where('status', 1) -> get();

            return view('back.staff.add', compact('UserLevel'));
    }
 
     public function staff_add_post(Request $request) {
        if ($request -> fullname == '' || $request -> email == '' || $request -> phone == '' ||
            $request -> username == '' || $request -> password == '') {
                return redirect('admin/staff/add') -> with(['flash_level' => 'danger', 'flash_message' => 'Vui lòng điền vào chỗ trống ']);
        }
            $User = new User; 
            $User -> status = 1; 
            $User -> level = $request -> level; 
            $User -> username = $request -> username; 
            $User -> password = bcrypt($request -> password); 
            $User -> fullname = $request -> fullname; 
            $User -> address = $request -> address; 
            $User -> email = $request -> email; 
            $User -> phone = $request -> phone;

            $Flag = $User -> save();

                if ($Flag == true) {
                    return redirect('admin/staff/list') -> with(['flash_level' => 'success', 'flash_message' => 'Thêm tài khoản thành công']);
                } else {
                     return redirect('admin/staff/add') -> with(['flash_level' => 'danger', 'flash_message' => 'Thêm tài khoản thất bại']);
                }

    }
                                        
    public function staff_edit(Request $request, $id) {

        $User = User::find($id);

        $UserLevel = UserLevel::where('status', 1) -> get();
            return view('back.staff.edit', compact('User', 'UserLevel'));
    }
                                      
    public function staff_edit_post(Request $request, $id) {
        if ($request -> fullname == '' || $request -> email == '' || $request -> phone == '') {
            return redirect('admin/staff/profile') -> with(['flash_level' => 'danger', 'flash_message' => 'Vui lòng điền vào chỗ trống ']);
        }
            $User = User::find($id); 
            $User -> status = $request -> status; 
            $User -> level = $request -> level; 
            $User -> fullname = $request -> fullname; 
            $User -> address = $request -> address; 
            $User -> email = $request -> email; 
            $User -> phone = $request -> phone;

            if (isset($request -> password) && $request -> password != '') {
                $User -> password = bcrypt($request -> password);
            }

            $Flag = $User -> save();
            if ($Flag == true) {
                return redirect('admin/staff/edit/'.$id) -> with(['flash_level' => 'success', 'flash_message' => 'Chỉnh Sửa tài khoản thành công']);
            } else {
                 return redirect('admin/staff/edit/'.$id) -> with(['flash_level' => 'danger', 'flash_message' => 'Chỉnh Sửa tài khoản thất bại']);
            }
    }
                                                    
    public function staff_delete(Request $request, $id) {
            $User = User::find($id);

            $Flag = $User -> delete();
            if ($Flag == true) {
                return redirect('admin/staff/list') -> with(['flash_level' => 'success', 'flash_message' => 'Xóa tài khoản thành công']);
            } else {
            return redirect('admin/staff/list') -> with(['flash_level' => 'danger', 'flash_message' => 'Xóa tài khoản thất bại']);
            }
    }
    // staff-------------------------------------------------//

    // system-------------------------------------------------//
    
    public function system() {
        $name = System::where('status', 1) -> where('Code', 'name') -> first();
        $email = System::where('status', 1) -> where('Code', 'email') -> first();
        $phone = System::where('status', 1) -> where('Code', 'phone') -> first();
        $address = System::where('status', 1) -> where('Code', 'address') -> first();
        $copyright = System::where('status', 1) -> where('Code', 'copyright') -> first();
        $logo = System::where('status', 1) -> where('Code', 'logo') -> first();
        $favicon = System::where('status', 1) -> where('Code', 'favicon') -> first();

            return view('back.system.system', compact('name', 'logo', 'email', 'favicon', 'address', 'phone', 'copyright'));
    }

                                                    
    public function system_post(Request $request) {
        if ($request -> name == '' || $request -> email == '' || $request -> phone == '') {
            return redirect('admin/system') -> with(['flash_level' => 'danger', 'flash_message' => 'Vui lòng điền vào chỗ trống ']);
        }

            System::where('status', 1)
            -> where('Code', 'name')
            -> update(['Description' => $request -> name]);

            System::where('status', 1)
            -> where('Code', 'email')
            -> update(['Description' => $request -> email]);

            System::where('status', 1)
            -> where('Code', 'phone')
            -> update(['Description' => $request -> phone]);

            System::where('status', 1)
            -> where('Code', 'address')
            -> update(['Description' => $request -> address]); System::where('status', 1)
            -> where('Code', 'copyright')
            -> update(['Description' => $request -> copyright]);

                if (!empty($request -> file('logo'))) {
                    $logo = System::where('status', 1) -> where('Code', 'logo') -> first();
                    $path = 'images/logo/'.$logo -> Description;
                        if (File::exists($path)) {
                            File::delete($path);
                        }
                            // upload logo
                    $name = $request -> file('logo') -> getClientOriginalName();
                    $request -> file('logo') -> move('images/logo/', $name);

                    $logo -> Description = $name;
                    $logo -> save();
                }

                if (!empty($request -> file('favicon'))) {
                    $favicon = System::where('status', 1) -> where('Code', 'favicon') -> first();
                    $path = 'images/favicon/'.$favicon -> Description;
                        if (File::exists($path)) {
                            File::delete($path);
                        }
                        // upload favicon
                    $name = $request -> file('favicon') -> getClientOriginalName();
                    $request -> file('favicon') -> move('images/favicon/', $name);

                    $favicon -> Description = $name;
                    $favicon -> save();
                }

                return redirect('admin/system') -> with(['flash_level' => 'success', 'flash_message' => 'Chỉnh Sửa tài khoản thành công']);
    }

            // page management
                                                            
    public function page_list() {
        $Page = Page::get();
            return view('back.page.list', compact('Page'));
    }

                                                            
    public function page_edit(Request $request, $id) {
        $Page = Page::find($id);
            return view('back.page.edit', compact('Page'));
    }

                                                            
    public function page_edit_post(Request $request, $id) {
        if ($request -> Name == '' || $request -> Font == '') {
            return redirect('admin/page/edit/'.$id) -> with(['flash_level' => 'danger', 'flash_message' => 'Vui lòng điền vào chỗ trống ']);
        }
            $Page = Page::find($id); 
            $Page -> Status = $request -> Status; 
            $Page -> Name = $request -> Name; 
            $Page -> Font = $request -> Font; 
            $Page -> Sort = $request -> Sort; 
            $Flag = $Page -> save();
                if ($Flag == true) {
                    return redirect('admin/page/edit/'.$id) -> with(['flash_level' => 'success', 'flash_message' => 'Chỉnh Sửa Trang thành công']);
                } else {
                    return redirect('admin/page/edit/'.$id) -> with(['flash_level' => 'danger', 'flash_message' => 'Chỉnh Sửa Trang thất bại']);
                }
    }
            // patient------------------------------
                                                                    
    public function patient_list() {
        $Patient = Patient::get();
            return view('back.patient.list', compact('Patient'));
    }
                                                               
    public function patient_edit(Request $request, $id) {
        $Patient = Patient::find($id);
            return view('back.patient.edit', compact('Patient'));
    }
    
    public function patient_edit_post(Request $request, $id) {
        if ($request -> fullname == '' || $request -> quequan == '') {
            return redirect('admin/patient/edit/'.$id) -> with(['flash_level' => 'danger', 'flash_message' => 'Vui lòng điền vào chỗ trống ']);
        }
            $Patient = Patient::find($id); 
            $Patient -> Status = $request -> Status; 
            $Patient -> fullname = $request -> fullname; 
            $Patient -> quequan = $request -> quequan; 
            $Patient -> ghichu = $request -> ghichu;

            $Flag = $Patient -> save();
            if ($Flag == true) {
                return redirect('admin/patient/list/') -> with(['flash_level' => 'success', 'flash_message' => 'Chỉnh Sửa Thông Tin Bệnh Nhân Thành Công']);
            } else {
                return redirect('admin/patient/edit/'.$id) -> with(['flash_level' => 'danger', 'flash_message' => 'Chỉnh Sửa Thông Tin Bệnh Nhân Thất Bại']);
            }
    }

    public function patient_delete(Request $request, $id) {
        $Patient = Patient::find($id);

        $Flag = $Patient -> delete();
            if ($Flag == true) {
                return redirect('admin/patient/list') -> with(['flash_level' => 'success', 'flash_message' => 'Xóa Bệnh Nhân Thành Công']);
            } else {
                return redirect('admin/patient/list') -> with(['flash_level' => 'danger', 'flash_message' => 'Xóa Bệnh Nhân Thất Bại']);
            }
    }
                        
    public function patient_add() {
        $Patient = Patient::where('Status', 1) -> get();
            return view('back.patient.add', compact('Patient'));
    }
                                                                           
    public function patient_add_post(Request $request) {
        if ($request -> fullname == '' || $request -> quequan == '') {
            return redirect('admin/patient/add') -> with(['flash_level' => 'danger', 'flash_message' => 'Vui lòng điền vào chỗ trống ']);
        }
            $Patient = new Patient; 
            $Patient -> Status = 1; 
            $Patient -> fullname = $request -> fullname; 
            $Patient -> quequan = $request -> quequan; 
            $Patient -> ghichu = $request -> ghichu; 
            $Flag = $Patient -> save();

            if ($Flag == true) {
                return redirect('admin/patient/list') -> with(['flash_level' => 'success', 'flash_message' => 'Thêm tài khoản thành công']);
            } else {
                return redirect('admin/patient/add') -> with(['flash_level' => 'danger', 'flash_message' => 'Thêm tài khoản thất bại']);
            }
    }
    
    public function map_list() {
        $Boxmap = DB::table('boxmaps as a')
        -> join('patient as b', 'a.patient_id', '=', 'b.RowID')
        -> selectRaw('a.id,  a.title, a.description, a.lng, a.lat, b.fullname')
        -> get();

            return view('back.map.list', compact('Boxmap'));
    }
                                                                                   
    public function map_add() {
        $Patient = Patient::get();
        $boxmap = Boxmap::all();

        $dataMap = Array();
        $dataMap['type'] = 'FeatureCollection';
        $dataMap['features'] = array();
        foreach($boxmap as $value) {
        $feaures = array();
        $feaures['type'] = 'Feature';
        $geometry = array("type" => "Point", "coordinates" => [$value -> lng, $value -> lat]);
        $feaures['geometry'] = $geometry;
        $properties = array('title' => $value -> title, "description" => $value -> description);
        $feaures['properties'] = $properties;
        array_push($dataMap['features'], $feaures);
        }
            return View('back.map.add', compact('Patient')) -> with('dataArray', json_encode($dataMap));
    }
                                                                              
    public function map_add_post(FormMapRequest $request) {
        $requestData = $request -> all();
        Boxmap::create($requestData);
        return redirect('admin/map/add/') -> with('success', "Add map success!");

    }
     
    public function map_edit($id) {
        $Boxmap = Boxmap::findOrFail($id);
        $Patient = Patient::pluck('fullname', 'RowID');
        $boxmap = Boxmap::all();

        $dataMap = Array();
        $dataMap['type'] = 'FeatureCollection';
        $dataMap['features'] = array();
        foreach($boxmap as $value) {
            $feaures = array();
            $feaures['type'] = 'Feature';
            $geometry = array("type" => "Point", "coordinates" => [$value -> lng, $value -> lat]);
            $feaures['geometry'] = $geometry;
            $properties = array('title' => $value -> title, "description" => $value -> description);
            $feaures['properties'] = $properties;
            array_push($dataMap['features'], $feaures);

        }
        return view('back.map.edit', compact('Boxmap', 'Patient')) -> with('dataArray', json_encode($dataMap));
    }

                                                                                    
    public function map_edit_post(FormMapRequest $request, $id) {
        $requestData = $request -> all();
        $Boxmap = Boxmap::findOrFail($id);
        $Boxmap -> update($requestData);
        return redirect('admin/map/edit/'.$id) -> with('success', "Add map success!");
    }

                                                                                    
    public function map_delete($id) {
        Boxmap::destroy($id);
        return redirect('admin/map/list') -> with(['flash_level' => 'success', 'flash_message' => 'Xóa tài khoản thành công']);
    }

    public function map_show(Request $request){
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
        
        
        return view('back.map.show',compact('dataMap','Patient','patientCount'))-> with('dataArray', json_encode($dataMap));;
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
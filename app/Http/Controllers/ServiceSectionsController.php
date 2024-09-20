<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\service_sections;
use App\Staffs;
use App\services;
use App\service_staffs;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ServiceSectionsController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    // add service section
    public function addServiceSection() {
        $staffs = Staffs::all()->where('user_id', Auth::user()->id)->where('status', 1);
        $services = Services::all()->where('user_id', Auth::user()->id);
        return view('manager.service_section.addServiceSection', [
            'staffs' => $staffs,
            'services' => $services
        ]);
    }

    // save service section.
    public function saveServiceSection(Request $req) {
        $this->validate($req, [
            'service_id' => 'required',
            'section_name' => 'required|max:190',
            'desc' => 'required'
        ]);

        if($image = $req->file('photo')){
            $photo = 'SERVICE_SECTION_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
            $image -> move("img/service/service_section", $photo);
        }else{
          $photo = "ServiceSection.png";
        }

        $service_data = array(
            'name'        => $req->section_name,
            'desc'        => $req->desc,
            'photo'       => $photo,
            'ss_time'     => $req->ss_time,
            'type'        => $req->type,
            'service_id'  => $req->service_id,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
        );

        try {
            $sevice_section_id = DB::table('service_sections')->insertGetId($service_data);
            $arr = array();
            $arr = $req->staff_id;
            foreach ($arr as $ar) {
                $service_staffs = array(
                    'staff_id'    => $ar,
                    'ss_id'       => $sevice_section_id,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now()
                );
                DB::table('service_staffs')->insert($service_staffs);
            }
            session()->flash('success', 'موفقانه ثبت شد');
            return back();
        }catch (Exception $e) {
            return redirect()->back();
        }
    }

    public function viewServiceSection() {
        // $serviceSections = DB::table('service_sections')->where('user_id', Auth::user()->id)->get();
        $serviceSections = DB::table('services as s')
            ->join('service_sections as ss', 's.id', 'ss.service_id')
            ->where('s.user_id', Auth::user()->id)
            ->select('ss.*')
            ->get();
        return view('manager.service_section.viewServiceSection', ['serviceSections' => $serviceSections]);
    }


    // service more info.
    public function serviceSectionMoreInfo($serviceid = 0) {
        $serviceInfo = service_sections::all()->where('id', $serviceid);
        return view('manager.service_section.serviceMoreInfo', ['serviceInfo' => $serviceInfo]);
    }

    // edit service.
    public function editServiceSection($serviceid = 0) {
        $staffs = Staffs::all()->where('user_id', Auth::user()->id)->where('status', 1);
        $services = Services::all()->where('user_id', Auth::user()->id);
        $serviceInfo = service_sections::all()->where('id', $serviceid);
        return view('manager.service_section.editService', [
          'serviceInfo' => $serviceInfo,
          'staffs' => $staffs,
          'services' => $services
        ]);
    }

    // update service.
    public function updateServiceSection(Request $req) {
        $this->validate($req, [
            'name' => 'required|max:190',

        ]);
        if($image = $req->file('photo')){
            $photo = 'SERVICE_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
            $image -> move("img/service", $photo);
        }else {
          $photo = $req->input('lastPhoto');
        }
        $service = service_sections::find($req->id);
        $service->name = $req->name;
        $service->desc = $req->service_desc;
        $service->photo = $photo;
        try {
            $service->save();
            session()->flash('success', 'موفقانه ثبت شد');
            return redirect()->route('viewServices');
        }catch(Exception $e) {
            session()->flash('failed', 'مشکل رخ داده! لطفا دوباره کوشش کنید');
            return back();
        }
    }

    // delete service.
    public function deleteServiceSection($serviceid = 0) {
        service_sections::destroy($serviceid);
        session()->flash('success', 'سرویس موفقانه حذف شد');
        return back();
    }



}

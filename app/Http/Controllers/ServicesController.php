<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    public function __constuct()
    {
        $this->middleware('auth');
    }

    // add service
    public function addService() {
        return view('manager.services.addService');
    }

    // save service
    public function saveService(Request $req) {
        $this->validate($req, [
            'service_name' => 'required|max:190',
            'photo'        => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $req->file('photo')){
            $photo = 'SERVICE_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
            $image -> move("img/service", $photo);
        }else {
          $photo = "service.png";
        }
        $service = new services;
        $service->name = $req->service_name;
        $service->desc = $req->service_desc;
        $service->photo = $photo;
        $service->user_id = Auth::user()->id;
        try {
            $service->save();
            session()->flash('success', 'موفقانه ثبت شد');
            return back();
        }catch(Exception $e) {
            session()->flash('failed', 'مشکل رخ داده! لطفا دوباره کوشش کنید');
            return back();
        }
    }

    // service list.
    public function viewServices() {
        $services = services::all()->where('user_id', Auth::user()->id);
        return view('manager.services.viewServices', ['services' => $services]);
    }

    // service more info.
    public function serviceMoreInfo($serviceid = 0) {
        $serviceInfo = services::all()->where('id', $serviceid);
        return view('manager.services.serviceMoreInfo', ['serviceInfo' => $serviceInfo]);
    }

    // edit service.
    public function editService($serviceid = 0) {
        $serviceInfo = services::all()->where('id', $serviceid);
        return view('manager.services.editService', ['serviceInfo' => $serviceInfo]);
    }

    // update service.
    public function updateService(Request $req) {
        $this->validate($req, [
            'name' => 'required|max:190',

        ]);
        if($image = $req->file('photo')){
            $photo = 'SERVICE_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
            $image -> move("img/service", $photo);
        }else {
          $photo = $req->input('lastPhoto');
        }
        $service = services::find($req->id);
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
    public function deleteService($serviceid = 0) {
        services::destroy($serviceid);
        session()->flash('success', 'سرویس موفقانه حذف شد');
        return back();
    }

}

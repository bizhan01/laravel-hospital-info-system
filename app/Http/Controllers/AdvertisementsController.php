<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\advertisements;
use Illuminate\Support\Facades\Auth;
use DB;

class AdvertisementsController extends Controller
{
    // add advertisement.
    public function addAdvertise()
    {
        return view('manager.advertisement.addAdvertise');
    }

    // save advertisement.
    public function saveAdvertisement(Request $req) {
        if (Auth::check()) {
            $this->validate($req, [
                'title'             => 'required|max:190',
                'content'           => 'required',
                'photo'             => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
                'status'            => 'required'
            ]);

            $userId = Auth::user()->id;
            if($image = $req->file('photo')){
                $photo = $userId.'/ADVER_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
                $image -> move("img/advertisement/".$userId, $photo);
              }else {
                $photo = "adv.png";
              }

            $advertise = new advertisements;
            $advertise->title = $req->title;
            $advertise->content = $req->content;
            $advertise->img = $photo;
            $advertise->status = $req->status;
            $advertise->user_id = Auth::user()->id;

            try {
                $advertise->save();
                session()->flash('success', 'تبلیغ جدید ایجاد شد');
                return redirect()->route('viewAdvertise');
            }catch(Exception $e) {
                session()->flash('failed', 'مشکلی رخ داده! لطفا دوباره سعی کنید');
                return back();
            }
        }else {
            return back();
        }
    }

    // view advertisement list.
    public function viewAdvertise() {
        if (Auth::check()) {
            $advertises = advertisements::all()->where('user_id', Auth::user()->id);
            return view('manager.advertisement.viewAdvertise', ['advertises' => $advertises]);
        }else {
            return back();
        }
    }

    // advertisement details.
    public function advertiseDetails($id = 0) {
        $advertiseDetails = advertisements::all()->where('id', $id);
        return view('manager.advertisement.advertiseDetails', ['advertiseDetails' => $advertiseDetails]);
    }

    // delete advertisement.
    public function deleteAvertise($id = 0) {
        advertisements::destroy($id);
        session()->flash('success', 'موفقانه حذف شد');
        return back();
    }

    // edit advertisement
    public function editAdvertise($id = 0) {
        $advertiseDetails = advertisements::all()->where('id', $id);
        return view('manager.advertisement.editAdvertise', ['advertiseDetails' => $advertiseDetails]);
    }


    public function advertisementList()
    {
      $advertisements = DB::table('advertisements')->where('status', 0) ->get();
      return view('admin.advertisement.advertisementList', compact('advertisements'));
    }

    public function confirmedAdvertisement()
    {
      $advertisements = DB::table('advertisements')->where('status', 1) ->get();
      return view('admin.advertisement.confirmedAdvertisement', compact('advertisements'));
    }

    public function show($id) {
      $advertisements = DB::select('select * from advertisements where id = ?',[$id]);
     return view('admin.advertisement.block',['advertisements'=>$advertisements]);
    }

    public function unBlock($id) {
      $advertisements = DB::select('select * from advertisements where id = ?',[$id]);
     return view('admin.advertisement.unBlock',['advertisements'=>$advertisements]);
    }

    // update advertisement.
    public function updateAdvertise(Request $req) {
        if (Auth::check()) {
            $this->validate($req, [
                'title'             => 'required|max:190',
                'content'           => 'required',
                'status'           => 'required',
            ]);

            if($image = $req->file('photo')){
                $photo = 'ADVER_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
                $image -> move("img/advertisement/", $photo);
            }else {
              $photo = $req->input('lastPhoto');
            }

            $advertise = advertisements::find($req->id);
            $advertise->title = $req->title;
            $advertise->content = $req->content;
            $advertise->img = $photo;
            $advertise->status =  $req->status;

            try {
                $advertise->save();
                session()->flash('success', 'تغییرات اعمال شد');
                return back();
            }catch(Exception $e) {
                session()->flash('failed', 'مشکلی رخ داده! لطفا دوباره سعی کنید');
                return back();
            }
        }else {
            return back();
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staffs;
use Illuminate\Support\Facades\Auth;

class StaffsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // add staff
    public function addStaff() {
        return view('manager.staff.addStaff');
    }

    // save staff.
    public function saveStaff(Request $req) {
        $this->validate($req, [
            'full_name'           => 'required|max:190',
            'gender'              => 'required',
            'photo'               => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'diploma'             => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'identity_card'       => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'guaranty_letter'     => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'accuracy_form'       => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'permit'              => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
            
        if($image1 = $req->file('photo')){
            $photo = 'photo'.strtotime(date('Y-m-d h:i:s')) . '.' . $image1-> getClientOriginalExtension();
            $image1 -> move("img/user_profile/staff", $photo);
        }

        if($image2 = $req->file('diploma')){
            $diploma = 'doploma'.strtotime(date('Y-m-d h:i:s')) . '.' . $image2-> getClientOriginalExtension();
            $image2 -> move("img/user_profile/staff", $diploma);
        }

        if($image3 = $req->file('identity_card')){
            $identity_card = 'id_card'.strtotime(date('Y-m-d h:i:s')) . '.' . $image3-> getClientOriginalExtension();
            $image3 -> move("img/user_profile/staff", $identity_card);
        }
    
        if($image4 = $req->file('guaranty_letter')){
            $guaranty_letter = 'g_letter'.strtotime(date('Y-m-d h:i:s')) . '.' . $image4-> getClientOriginalExtension();
            $image4 -> move("img/user_profile/staff", $guaranty_letter);
        }

        if($image5 = $req->file('accuracy_form')){
            $accuracy_form = 'a_l'.strtotime(date('Y-m-d h:i:s')) . '.' . $image5-> getClientOriginalExtension();
            $image5 -> move("img/user_profile/staff", $accuracy_form);
        }

        if($image6 = $req->file('permit')){
            $permit = 'permit'.strtotime(date('Y-m-d h:i:s')) . '.' . $image6-> getClientOriginalExtension();
            $image6 -> move("img/user_profile/staff", $permit);
        }
        $dob_d = trim($req->dob_d, ' ');
        $dob_m = trim($req->dob_m, ' ');
        $dob_y = trim($req->dob_y, ' ');
        $dob = $dob_d.'-'.$dob_m.'-'.$dob_y;
        $staff = new Staffs;
        $staff->full_name = $req->full_name;
        $staff->parent_name = $req->parent_name;
        $staff->education_level = $req->education_level;
        $staff->gender = $req->gender;
        $staff->dob = $dob;
        $staff->phone = $req->phone;
        $staff->address = $req->address;
        $staff->salary =  $req->salary;
        $staff->position = $req->position;
        $staff->job_time = $req->job_time;
        $staff->code = $req->code;
        $staff->photo = $photo;
        $staff->diploma = $diploma;
        $staff->identity_card = $identity_card;
        $staff->guaranty_letter = $guaranty_letter;
        $staff->accuracy_form = $accuracy_form;
        $staff->permit = $permit;
        $staff->user_id = Auth::user()->id;

        try {
            $staff->save();
            session()->flash('message', 'ملومات ثبت شد');
            return redirect()->route('staffsInfo');
        }catch(Exception $e) {
            return back()->with('message', 'معلومات ثبت نشد! لطفا دوباره کوشش کنید');
        }
    }

    // staff info.
    public function staffsInfo() {
        $staffInfo = Staffs::all()->where('user_id', Auth::user()->id);
        return view('manager.staff.staffsInfo', ['staffInfo'=>$staffInfo]);
    }

    // staff more info
    public function staffMoreInfo($staffId = 0) {
        $staffInfo = Staffs::all()->where('id', $staffId);
        return view('manager.staff.staffMoreInfo', ['staffInfo'=>$staffInfo]);
    }

    // edit staff.
    public function editStaff($staffId = 0) {
        $staffInfo = Staffs::all()->where('id', $staffId);
        return view('manager.staff.editStaff', ['staffInfo' => $staffInfo]);
    }

    // edit staff.
    public function updateStaff(Request $req) {
        $this->validate($req, [
            'full_name'           => 'required|max:190',
            'gender'              => 'required'
        ]);

        $dob_d = trim($req->dob_d, ' ');
        $dob_m = trim($req->dob_m, ' ');
        $dob_y = trim($req->dob_y, ' ');
        $dob = $dob_d.'-'.$dob_m.'-'.$dob_y;
        $staff = Staffs::find($req->id);
        $staff->full_name = $req->full_name;
        $staff->parent_name = $req->parent_name;
        $staff->education_level = $req->education_level;
        $staff->gender = $req->gender;
        $staff->dob = $dob;
        $staff->phone = $req->phone;
        $staff->address = $req->address;
        $staff->salary =  $req->salary;
        $staff->position = $req->position;
        $staff->job_time = $req->job_time;
        $staff->code = $req->code;
        $staff->user_id = Auth::user()->id;

        try {
            $staff->save();
            session()->flash('message', 'ملومات ثبت شد');
            return redirect()->route('staffsInfo');
        }catch(Exception $e) {
            return back()->with('message', 'معلومات ثبت نشد! لطفا دوباره کوشش کنید');
        }
    }

    // delete staff.
    public function deleteStaff($staffId = 0) {
        try {
            $staff = Staffs::find($staffId)->delete();
            session()->flash('message', 'حذف شد');
            return redirect()->route('staffsInfo');
        }catch(Exception $e) {
            session()->flash('message', 'حذف نشد لطفا دوباره کوشش کنید');
            return back();
        }
    }

}

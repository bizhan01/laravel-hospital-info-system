<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patients;
use DB;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // add patient.
    public function addPatient()
    {
        return view('manager.patient.addPatient');
    }

    public function savePatient(Request $req)
    {
        $this->validate($req, [
            'full_name'     => 'required',
            'gender'        => 'required',
            'examinations'  => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'agree_letter'  => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'exit_form'     => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);

        if($image1 = $req->file('examinations')){
            $examinations = 'EX'.strtotime(date('Y-m-d h:i:s')) . '.' . $image1-> getClientOriginalExtension();
            $image1 -> move("img/patient", $examinations);
        }

        if($image2 = $req->file('agree_letter')){
            $agree_letter = 'AL'.strtotime(date('Y-m-d h:i:s')) . '.' . $image2-> getClientOriginalExtension();
            $image2 -> move("img/patient", $agree_letter);
        }

        if($image3 = $req->file('exit_form')){
            $exit_form = 'EF'.strtotime(date('Y-m-d h:i:s')) . '.' . $image3-> getClientOriginalExtension();
            $image3 -> move("img/patient", $exit_form);
        }

        $patient = new Patients;
        $patient->full_name = $req->full_name;
        $patient->parent_name = $req->parent_name;
        $patient->age = $req->age;
        $patient->gender = $req->gender;
        $patient->phone = $req->phone;
        $patient->address = $req->address;
        $patient->doctor_name = $req->doctor_name;
        $patient->nurse_name = $req->nurse_name;
        $patient->code = $req->code;
        $patient->entry_date = $req->entry_date;
        $patient->exit_date = $req->exit_date;
        $patient->examinations = $examinations;
        $patient->agree_letter = $agree_letter;
        $patient->exit_form = $exit_form;
        $patient->user_id = Auth::user()->id;
        try {
            $patient->save();
            session()->flash('message', 'معلومات ثبت شد');
            return back();
        } catch(Exception $e) {
            session()->flash('message', 'خطا رخ داده! لطفا دوباره کوشش کنید');
            return back();
        }
    }

    // patient info
    public function patientsInfo()
    {
        $patientInfo = Patients::all()->where('user_id', Auth::user()->id);
        return view('manager.patient.patientsInfo', ['patientInfo' => $patientInfo]);
    }

    // patient more info
    public function patientMoreInfo($patientId = 0)
    {
        $patientInfo = Patients::all()->where('id', $patientId);
        return view('manager.patient.patientMoreInfo', ['patientInfo' => $patientInfo]);
    }

    // delete patient.
    public function deletePatient($patientId = '')
    {
        if ($patientId == '') {
            return back();
        }else {
            try {
                Patients::where('id', $patientId)->delete();
                session()->flash('message', "حذف شد");
                return back();
            }catch(Exception $d) {
                session()->flash('message', 'حذف نشد');
                return back();
            }
        }
    }

    // edit patient.
      public function editPatient($id) {
       $patientInfo = DB::select('select * from patients where id = ?',[$id]);
       return view('manager.patient.editPatient', ['patientInfo'=>$patientInfo]);
    }
    // update patient.
    public function updatePatient(Request $req) {
        $this->validate($req, [
            'full_name'     => 'required',
            'gender'        => 'required'
        ]);

        $patient = Patients::find($req->patientId);
        $patient->full_name = $req->full_name;
        $patient->parent_name = $req->parent_name;
        $patient->age = $req->age;
        $patient->gender = $req->gender;
        $patient->phone = $req->phone;
        $patient->address = $req->address;
        $patient->doctor_name = $req->doctor_name;
        $patient->nurse_name = $req->nurse_name;
        $patient->code = $req->code;
        $patient->entry_date = $req->entry_date;
        $patient->exit_date = $req->exit_date;
        $patient->user_id = Auth::user()->id;
        try {
            $patient->save();
            session()->flash('message', 'معلومات ثبت شد');
            return back();
        } catch(Exception $e) {
            session()->flash('message', 'خطا رخ داده! لطفا دوباره کوشش کنید');
            return back();
        }
    }


}

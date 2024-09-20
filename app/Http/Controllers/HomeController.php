<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Staffs;
use App\Patients;
use App\User;
use App\services;
use App\News;
use App\service_sections;
use View;
use Response;

class HomeController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        if(auth()->user()->type == 'admin' && auth()->user()->status == 1)
        {
          return Redirect::to('adminDashboard');
        }


        elseif(auth()->user()->type == 'hospital' && auth()->user()->status == 1)
        {
          $staffsNum = Staffs::where('user_id', Auth::user()->id)->count();
          $patientsNum = Patients::where('user_id', Auth::user()->id)->count();
          $serviceNum = DB::table('services as s')
              ->join('service_sections as ss', 's.id', 'ss.service_id')
              ->where('s.user_id', Auth::user()->id)
              ->count();

      return view('manager.dashboard', [
          'staffsNum'     => $staffsNum,
          'patientsNum'   => $patientsNum,
          'serviceNum'   => $serviceNum,
        ]);
        }
        else
        {
          return view('blocked');
        }


        // return view('index');
    }

    public function home()
    {
      $news = DB::table('news as p')
             ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
             ->select('p.*', 'u.*')
             ->where('p.status', '=', 1)
            ->orderByRaw('(p.created_at)desc')
            ->get();

      return view('index', compact('news'));
    }

    // hospital index.
    public function hospitalIndex($user_id = 0) {
        $services = services::all()->where('user_id', $user_id);
        $doctors = Staffs::all()->where('user_id', $user_id);
        $patientsNum = Patients::where('user_id', $user_id)->count();
        $staffsNum = Staffs::where('user_id', $user_id)->count();
        $servicesNum = DB::table('services as s')
            ->join('service_sections as ss', 's.id', 'ss.service_id')
            ->where('s.user_id', $user_id)
            ->count();

        $news = News ::latest()
            ->orderByRaw('(id)desc LIMIT 1')
            ->get();

        $comments = DB::table('comments')
              ->where('profile_id', '=', $user_id)
              ->latest()
              ->get();

        $userID = User::all()->where('id', $user_id);

        return view('site.hospitalIndex', [
            'services'  => $services,
            'doctors'   => $doctors,
            'patientsNum' => $patientsNum,
            'staffsNum' => $staffsNum,
            'servicesNum' => $servicesNum,
            'news'=> $news,
            'comments'=> $comments,
            'userID'=> $userID
        ]);
    }

    // hospital about
    public function hospitalAbout($user_id = 0) {
      $service_sections = DB::table('services as s')
          ->join('service_sections as ss', 's.id', 'ss.service_id')
          ->select('s.*', 'ss.id as ssId', 'ss.name as ssName', 'ss.desc as ssDesc', 'ss.photo as ssPhoto', 'ss.ss_time as ssTime', 'ss.type as ssType', 'ss.service_id as ssServiceId')
          ->where('s.user_id', $user_id)
          ->get();
        $services = services::all()->where('user_id', $user_id);
        $staffs = Staffs::all()->where('user_id', $user_id);
        $users = User::all()->where('id', $user_id);
        return view('site.hospitalAbout', [
            'service_sections'     => $service_sections,
            'services'  => $services,
            'staffs'   => $staffs,
            'users'   => $users
        ]);
    }

    // hospital service.
    public function hospitalService($user_id = 0) {
        $service_sections = DB::table('services as s')
            ->join('service_sections as ss', 's.id', 'ss.service_id')
            ->select('s.*', 'ss.id as ssId', 'ss.name as ssName', 'ss.desc as ssDesc', 'ss.photo as ssPhoto', 'ss.ss_time as ssTime', 'ss.type as ssType', 'ss.service_id as ssServiceId')
            ->where('s.user_id', $user_id)
            ->get();
        $userInfo = User::all()->where('id', $user_id);
        return view('site.hospitalService', [
            'service_sections'     => $service_sections,
            'userInfo'             => $userInfo
        ]);
    }

    public function hospitalServiceInfo($id){
      // $service_sections = service_sections::all()->where('id', $id);
      $service_sections = DB::table('services as s')
          ->join('service_sections as ss', 's.id', 'ss.service_id')
          ->select('s.*', 'ss.id as ssId', 'ss.name as ssName', 'ss.desc as ssDesc', 'ss.photo as ssPhoto', 'ss.ss_time as ssTime', 'ss.type as ssType', 'ss.service_id as ssServiceId')
          ->where('ss.id', $id)
          ->get();
      return view('site.hospitalServiceInfo', compact('service_sections'));
    }

    // hospital news
    public function hospitalNews($user_id = 0) {
        // $news = News::where('user_id', $user_id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(6);
        $news = DB::table('news as p')
               ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
               ->select('p.*', 'u.*')
               ->where('p.status', '=', 1)
              ->orderByRaw('(p.created_at)desc')
              // ->where('user_id', $user_id)
              ->get();
        return view('site.hospitalNews', compact('news'));
    }


    public function hospitalAdvs($user_id = 0) {
        // $news = News::where('user_id', $user_id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(6);
        $advs = DB::table('advertisements as p')
               ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
               ->select('p.*', 'u.*')
               ->where('p.status', '=', 1)
              ->orderByRaw('(p.created_at)desc')
              // ->where('user_id', $user_id)
              ->get();
        return view('site.hospitalAdvs', compact('advs'));
    }


    // hospital contact us.
    public function hospitalContactUs($user_id = 0) {
        return view('site.hospitalContactUs');
    }

    // hospital search.
    public function hospitalSearch(Request $req) {
        $hospitals = DB::table('users')->where('full_name', 'LIKE', '%' .$req->key. '%')->where('status', 1)->where('type', 'hospital')->get();
        if ($hospitals != NULL) {
            session()->flash('result', 'ok');
        }else {
            session()->flash('result', 'not_found');
        }
        return view('index', ['hospitals' => $hospitals]);
    }

    public function dashboard() {
        $staffsNum = Staffs::where('user_id', Auth::user()->id)->count();
        $patientsNum = Patients::where('user_id', Auth::user()->id)->count();
        $serviceNum = DB::table('services as s')
            ->join('service_sections as ss', 's.id', 'ss.service_id')
            ->where('s.user_id', Auth::user()->id)
            ->count();
        return view('manager.dashboard', [
            'staffsNum'     => $staffsNum,
            'patientsNum'   => $patientsNum,
            'serviceNum'   => $serviceNum
        ]);
    }


    public function adminDashboard() {
        $activeUsers = User::all()->where('status', 1)->where('type', '!=', 'admin')->count();
        $deActiveUsers = User::all()->where('status', 0)->where('type', '!=', 'admin')->count();
        $advCount = DB::table('advertisements')->count('id');
        $newsCount = DB::table('news')->count('id');
        return view('admin.adminDashboard', [
            'activeUsers'         => $activeUsers,
            'deActiveUsers'       => $deActiveUsers,
            'advCount'       => $advCount,
            'newsCount'       => $newsCount
        ]);
    }

   public function viewHospitals() {
       $hospitals = User::all()->where('type', '!=', 'admin');
       return view('admin.hospital.viewHospitals', ['hospitals' => $hospitals]);
   }

   public function hospitalDetails($id = 0) {
       $hospitalInfo = User::all()->where('id', $id);
       return view('admin.hospital.hospitalDetails', ['hospitalInfo' => $hospitalInfo]);
   }


    // accept hospital.
    public function hospitalAccept($id = 0) {
        $user = User::find($id);
        $user->status = 1;
        try {
            $user->save();
            session()->flash('success', 'فعال شد');
            return back();
        }catch(Exception $ex) {
                session()->flash('failed', 'خطا رخ داده');
                return back();
        }
    }
    // reject hospital.
    public function hospitalReject($id = 0) {
        $user = User::find($id);
        $user->status = 0;
        try {
            $user->save();
            session()->flash('success', 'غیر فعال شد');
            return back();
        }catch(Exception $ex) {
            session()->flash('failed', 'خطا رخ داده');
            return back();
        }
    }

    public function userDelete($id = 0) {
        User::destroy($id);
        session()->flash('success', 'کاربر موفقانه حذف شد');
        return back();
    }

    // search doctor in first page.
    public function hospitalSearchFromFirstPage(Request $req) {
        $hospital = $req->hospital;
        if ($req->hospital != NULL) {
            try {
                $hospitals = DB::table('users')->select('id', 'full_name', 'address')->where('type', 'hospital')->where('full_name', 'LIKE', '%'.$hospital.'%')->get();
                return View::make('/general_search_result')->with('hospitals', $hospitals)->render();
            } catch(Exception $e) {
                return response()->json(array('error' => 'unable_to_find'));
            }
        }
    }

    // doctor search in first page.
    public function doctorSearchFromFirstPage(Request $req) {
        $doctor = $req->doctor;
        if ($doctor != NULL) {
            try {
                $doctors = DB::table('staffs as s')
                    ->join('users as u', 's.user_id', 'u.id')
                    ->select('s.*', 'u.id as uid', 'u.full_name as hName')
                    ->where('u.type', 'hospital')
                    ->where('s.full_name', 'LIKE', '%'. $doctor . '%')
                    ->get();
                return View::make('/general_search_result')->with('doctors', $doctors)->render();
            }catch(Exception $ex) {
                return response()->json(array('error' => 'unable_to_find'));
            }
        }

    }

    // search service in first page.
    public function serviceSearchFromFirstPage(Request $req) {
        $service = $req->service;
        if($service != NULL) {
            try {
                $services = DB::table('services as s')
                    ->join('users as u', 's.user_id', 'u.id')
                    ->join('service_sections as ss', 's.id', 'ss.service_id')
                    ->where('u.type', 'hospital')
                    ->where('ss.name', 'LIKE', '%'. $service .'%')
                    ->select('ss.*', 'u.id as uid', 'u.full_name as hName')
                    ->get();
                return View::make('/general_search_result')->with('services', $services)->render();
            }catch(Exception $ex) {
                return response()->json(array('error' => 'unable_to_find'));
            }
        }
    }

}

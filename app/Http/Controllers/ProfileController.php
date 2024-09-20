<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\socials;

class ProfileController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    // hospital profile.
    public function profile() {
        $id = Auth::user()->id;
        $hospitalInfo = User::all()->where('id', $id);
        $socials = socials::all()->where('user_id', $id);
        return view('manager.profile.profile', [
            'hospitalInfo'      => $hospitalInfo,
            'socials'      => $socials
        ]);
    }

    // save social.
    public function saveSocial(Request $req) {
        $social = new socials();
        $social->name = $req->social_name;
        $social->url = $req->social_link;
        $social->user_id = Auth::user()->id;
        try {
            $social->save();
            session()->flash('success', 'باموفقیت انجام شد');
            return back();
        }catch(Exception $ex) {
            session()->flash('failed', 'خطا رخ داده! لطفا دوباره کوشش کنید');
            return back();
        }
    }
}

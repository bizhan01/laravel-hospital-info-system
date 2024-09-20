<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\news;
use DB;

class NewsController extends Controller
{
    // add news.
    public function addNews() {
        return view('manager.news.addNews');
    }


    public function newsList()
    {
      $news = DB::table('news')->where('status', 0) ->get();
      return view('admin.news.newsList', compact('news'));
    }

    public function confirmedNews()
    {
      $news = DB::table('news')->where('status', 1) ->get();
      return view('admin.news.confirmedNews', compact('news'));
    }

    public function show($id) {
      $news = DB::select('select * from news where id = ?',[$id]);
     return view('admin.news.block',['news'=>$news]);
    }

    public function unBlock($id) {
      $news = DB::select('select * from news where id = ?',[$id]);
     return view('admin.news.unBlock',['news'=>$news]);
    }





    // save news.
    public function saveNews(Request $req) {
        $this->validate($req, [
            'author_full_name'  => 'required|max:190',
            'title'             => 'required|max:190',
            'content'           => 'required',
            'photo'             => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);

        $userId = Auth::user()->id;
        if($image = $req->file('photo')){
            $photo = $userId.'/NEWS_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
            $image -> move("img/news/".$userId, $photo);
        }else {
          $photo = "news.png";
        }

        $news = new news;
        $news->title = $req->title;
        $news->content = $req->content;
        $news->image = $photo;
        $news->author_full_name = $req->author_full_name;
        $news->status = 0;
        $news->user_id = Auth::user()->id;

        try {
            $news->save();
            session()->flash('success', 'خبر ایجاد شد');
            return back();
        }catch(Exception $e) {
            session()->flash('failed', 'مشکلی رخ داده! لطفا دوباره سعی کنید');
            return back();
        }
    }

    // view news list.
    public function viewNews() {
        $newss = news::all()->where('user_id', Auth::user()->id);
        return view('manager.news.viewNews', ['newss' => $newss]);
    }

    // news details.
    public function newDetails($newsId = 0) {
        $newss = news::all()->where('id', $newsId);
        return view('manager.news.newDetails', ['newss' => $newss]);
    }

    // delete news.
    public function deleteNews($newsId = 0) {
        news::destroy($newsId);
        session()->flash('success', 'خبر موفقانه حذف شد.');
        return back();
    }

    // edit news.
    public function editNews($newsId = 0) {
        $newss = news::all()->where('id', $newsId);
        return view('manager.news.editNews', ['newss' => $newss]);
    }

    // update news.
    public function updateNews(Request $req) {
        $this->validate($req, [
            'author_full_name'  => 'required',
            'title'             => 'required',
            'content'           => 'required',
            'status'           => 'required',
        ]);
        if($image = $req->file('photo')){
            $photo = 'NEWS_'.strtotime(date('Y-m-d h:i:s')) . '.' . $image-> getClientOriginalExtension();
            $image -> move("img/news/", $photo);
        }else {
          $photo = $req->input('lastPhoto');
        }

        $news = news::find($req->id);
        $news->title = $req->title;
        $news->content = $req->content;
        $news->image = $photo;
        $news->author_full_name = $req->author_full_name;
        $news->status = $req->status;

        try {
            $news->save();
            session()->flash('success', ' تغییرات اعمال شد');
            return back();
        }catch(Exception $e) {
            session()->flash('failed', 'مشکلی رخ داده! لطفا دوباره سعی کنید');
            return back();
        }
    }


}

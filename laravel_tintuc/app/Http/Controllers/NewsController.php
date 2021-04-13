<?php

namespace App\Http\Controllers;


use App\News;
use App\Social;
use App\Slider;
use App\System;
use App\Page;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
	
    public function index()
    {
        // DD(DB::table('nems')->get());
        // return view('news', ['data'=>DB::table('nems')->get()]);
         // trả về trang news.blade.php
        $news = DB::table('nems')->select('*');
        $news = $news->get();

        $pageName = 'Tên Trang - News';

        return view('news', compact('news', 'pageName'));
    }

    public function home()
    {
        $news=DB::table('nems as a')
        ->orderBy('a.idnew', 'DESC')
        ->limit(6)->get();


         $newsTG=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'out')
        ->orderBy('a.idnew', 'DESC')
        ->limit(4)->get();

         $newsCOV=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'cov')
        ->orderBy('a.idnew', 'DESC')
        ->limit(4)->get();


        $Slider = DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk','ts')
        ->orderBy('a.idnew','ASC')
        ->get();


        return view('news',compact('news','newsTG','newsCOV','Slider'));
    }


   public function about()
   {
        return view('about');
   } 

   public function tintuc()
   {
    
        $tintuc=DB::table('nems as a')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);
        return view('page/tin-tuc',compact('tintuc'));
    }
    public function thegioi()
    {
       
        $thegioi=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'out')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);
        return view('page/thegioi',compact('thegioi'));
    }
    public function trongnuoc()
    {   
        
        $trongnuoc=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'pl')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);

        return view('page/trongnuoc',compact('trongnuoc'));
    }
     public function phapluat()
    {
        
        $phapluat=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'pl')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);

        return view('page/phapluat',compact('phapluat'));
    }
     public function covid()
    {
        $PageInfo = DB::table('categories')
        ->selectRaw('name')
        ->first();
        $covid=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'cov')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);

        return view('page/covid',compact('covid','PageInfo'));
    }
     public function giaoduc()
    {
        
        $giaoduc=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'gd')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);

        return view('page/giaoduc',compact('giaoduc'));
    }
     public function khoahoc()
    {
        
        $khoahoc=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'khcn')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);

        return view('page/khoahoc',compact('khoahoc'));
    }

     public function showbiz()
    {
        
        $showbiz=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'sw')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);
        
        return view('page/showbiz',compact('showbiz'));
    }

     public function thoisu()
    {
       
        $thoisu=DB::table('nems as a')
        ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
        ->selectRaw('a.*,b.name as name')
        ->where('a.id_cate_lk', 'ts')
        ->orderBy('a.idnew', 'DESC')
        ->paginate(8);

        return view('page/thoi-su',compact('thoisu'));
    }
 
    public function search(Request $r)
    { 
        
        if(isset($r->keyword) && $r->keyword!=NULL)
        {
            $timkiem = DB::table('nems as a')
            ->join('categories as b', 'a.id_cate_lk', '=', 'b.id_cate')
            ->orWhere('a.title', 'like', '%' . $r->keyword . '%')
            ->selectRaw('a.*,b.name as name')
            ->where('a.status',1)
            ->paginate(8);
        }else{
            $timkiem=NULL;
        }

        return view('page/timkiem',compact('timkiem'));
    }

    public function getLogin()
    {
       return view('page/login');
    }
    public function postLogin(Request $request)
    {
       if($request ->username == '' || $request ->password == '')
       {
            return redirect('/login')->with('notice', 'Tài khoản hoặc mật khẩu không được để trống!');
       }
       if($request ->username!=NULL && $request ->password!=NULL)
        //if (Auth::attempt(['username' => $request->username, 'password' =>$request->password]))
       {
            return view('back.home.home');
       }
       else{
            return redirect('/login')->with('notice', 'Tài khoản hoặc mật khẩu không chính xác, vui lòng thử lại!');
       }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('page/login');
    }
   
 
   }

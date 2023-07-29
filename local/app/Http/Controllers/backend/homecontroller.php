<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\service;
use App\historyerror;
use App\historyErorLog;
use DB,Auth;

class homecontroller extends Controller
{
    public function getlist()
    {
         return view('backend.master.home');
    }
    public function getajax()
    {
        $data = DB::table('history_error')->select('history_error.*','list_error.filename','list_error.error_name AS lap')
        ->leftjoin('list_error', 'history_error.error', '=', 'list_error.error_code')
        ->where('list_error.status','>',0)
        ->where('history_error.status','<',2)
        ->get();
         return view('backend.master.DaAjaxhome', compact('data'));
    }
    public function getajax2()
    {
        $data = DB::table('history_error')->select('history_error.*','list_error.filename','list_error.error_name AS lap')
        ->leftjoin('list_error', 'history_error.error', '=', 'list_error.error_code')
        ->where('list_error.status','=',0)
        ->where('history_error.status','<',2)
        ->get();
         return view('backend.master.DaAjaxhome2', compact('data'));
    }
}

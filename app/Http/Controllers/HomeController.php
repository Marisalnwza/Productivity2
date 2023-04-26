<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $output = [];
        $lotInfo = DB::table('view_wip_info')->where('NO_ATP_LOT','=',$request->get('lotno'))->first();
        if(!isset($lotInfo)){
            $lotInfo = DB::table('hist_lot_info')->where('NO_ATP_LOT','=',$request->get('lotno'))->first();
        }
        $output['LotInfo'] = $lotInfo;
        $reel = DB::table('combine_reel_his')
        ->where('NO_ATP_LOT','=',$request->get('lotno'))
        ->where('TR_Status','=','1')
        ->get();
        $scan = DB::table('combine_scanner_his')
        ->where('NO_ATP_LOT','=',$request->get('lotno'))
        ->where('SC_Status','=','1')
        ->get();
        $isScan = sizeof($scan);
        $isReel = sizeof($reel);
        $isCombine = true;
        if($isReel==0&&$isScan==0){
            $isCombine = false;
        }
        $output['isCombine'] = $isCombine;
        
        $scan = DB::table('sk_process')
        ->where('Master_Lot','=',$request->get('lotno'))
        ->orwhere('Lot_Child1','=',$request->get('lotno'))
        ->first();
        $process = "-";
        if(isset($scan->SK_Process)){
            $process = $scan->SK_Process;
        }
        $output['Process'] = $process;
        return $output;
    }
}

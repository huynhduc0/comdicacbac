<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataModel;
use DateTime;
use App\CayModel;
class DataController extends Controller
{
    //
    // function getData($uid)
    // {
    // 	$setup = DataModel::select('*')
    // 	->join("cay","cay.id","data.cayid")
    // 	->where("uid",$uid)->get()->toJson();
    // 	return $setup;

    // }
    function getCurrent($id){
        $dcm = DataModel::select('data.*','cay.tencay','cay.hinhloaicay')
                ->join('cay', 'data.cayid','cay.id')
                ->where('data.id',$id)
                // ->get()
                ->first();
        return $dcm;
    }
    function getData($uid){
    	$setup = DataModel::select('data.*')
    	->join("cay","cay.id","data.cayid")->get()->toArray();
    	// dd($setup);
        foreach ($setup as $key=>$value) {
        	// echo $value['id'];
        $dt = new DateTime($value['giobatdau']);
        $week = DataController::datediffInWeeks($dt->format('m/d/Y'), date('m/d/Y'));
        // echo $week+1;
       	$setup[$key] = DataModel::select('*')
        ->join("cay","cay.id","data.cayid")
        ->join("week","cay.id","week.cayid")
        ->where("week",$week+1)
        ->where('data.id',$value['id'])
        ->first();
        // dd($setup[0]);
        // ->toArray();
        	
    }
  
    return json_encode($setup);
}
  
    function datediffInWeeks($date1, $date2)
	{
    if($date1 > $date2) return DataController::datediffInWeeks($date2, $date1);
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    return floor($first->diff($second)->days/7);
	}
     function getDataArdui($uid,Request $req)
    {
    	 $setup = DataModel::select('*')
        ->join("cay","cay.id","data.cayid")->first()->toArray();
        $dt = new DateTime($setup['giobatdau']);
        $week = DataController::datediffInWeeks($dt->format('m/d/Y'), date('m/d/Y'));
        // dd($week);
       	$setup = DataModel::select('week.phutmoilan','data.giobatdau','week.delaymoilan')
        ->join("cay","cay.id","data.cayid")
        ->join("week","cay.id","week.cayid")
        ->where("week",$week+1)
        ->first()->toArray();
    	date_default_timezone_set('Asia/Ho_Chi_Minh');
    	$setup['giobatdau'] = abs(strtotime(date('Y/m/d h:i:s')) - strtotime($setup['giobatdau']));
    	// echo $setup['giobatdau'];
    	// echo $setup['giobatdau'] % ($setup['phutmoilan']*60);
    	$temp= ($req->nd > 35) ? $setup['phutmoilan']*60 : 0;
    	$setup['giobatdau']  = ($setup['giobatdau'] % ($setup['phutmoilan']*60) <$setup['delaymoilan']+5+$temp ) ? 1 : 0 ;
    	return json_encode($setup);
    }
     function getDataArduiAll($uid, Request $req)
    {	
    	 $setup = DataModel::select('*')
        ->join("cay","cay.id","data.cayid")->first()->toArray();
        	$dt = new DateTime($setup['giobatdau']);
        	$week = DataController::datediffInWeeks($dt->format('m/d/Y'), date('m/d/Y'));
       	$setup = DataModel::select('dungtichbe','week.ppm','week.ppm_max','week.ec','week.ec_max','week.ph','week.ph_max')
        ->join("cay","cay.id","data.cayid")
        ->join("week","cay.id","week.cayid")
        ->where("week",$week+1)
        ->first();  
        // echo $setup->ppm;
        if($req->ppm < $setup->ppm){
        	$them = (($setup->ppm - $req->ppm )*$setup->dungtichbe-120)/0.75;
        return $them;
    	}
        else if ($req->ppm > $setup->ppm_max) {
        		$them = -(($req->ppm - $setup->ppm_max)*$setup->dungtichbe-120)/0.75;
        		return $them;
        }
        else {
        	return 0;
        }
        $data = DataModel::find(1);
        $data->ppm= $req->ppm;
        $data->ec = $req->ec;
        $data->nhietdo = $req->nhietdo;
        $data->save();
    }
    function setData(Request $req){
    	$setup = DataModel::find(1);
    	$cay= CayModel::select('*')->where('tencay',$req->tencay)->first();
    	// dd($cay);
    	$setup->cayid = $cay->id;
        $setup->save();
        return "SAVED";
    	// $setup = DataModel::select('*')
    	// ->join("cay","cay.id","data.cayid")
    	// ->where("uid",$setup->uid)->get();
    	// return json_encode($setup[0]);
    }
    function allcay(){
    	$cay = CayModel::select('*')->get()->toJson();
    	return $cay;
    }
    function setSysIn($id, Request $req){
        $cay = DataModel::find($id);
        $cay->dodaiong = $req->duongkinhong;
        $cay->dodaiong = $req->dodai;
        $cay->congsuat = $req->congsuat;
        $cay->dungtichbe =  ($req->dodai*1000)*($req->duongkinhong/2)*($req->duongkinhong/2)*3.14/1000000;
        $cay->save();
        return "SAVED";
    }
    function chitietcay($id){
         $cay = CayModel::select('*')
         ->join('week','cay.id','week.cayid')
         ->where('cay.id',$id)
         ->first();
        return view('cay',compact("cay"));
    }
    function luucmnd(Request $req){
        $data = DataModel::find(1);
        $data->ppm= $req->ppm;
        $data->ec = $req->ec;
        $data->nhietdo = $req->nhietdo;
        $data->save();
        echo 'done';
    }
}

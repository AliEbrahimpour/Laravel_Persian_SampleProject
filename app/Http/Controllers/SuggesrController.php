<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\suggest;

class SuggesrController extends Controller
{

    public function sendsuggest(Request $request){
        return 1;
        $sgst=new suggest();
        $sgst->name=$request->name;
        $sgst->phone=$request->number;
        $sgst->email=$request->email;
        $sgst->care=$request->important;
        $sgst->comment=$request->suggested;
        if($sgst->save()){
            session()->flash('message', 'با موفقیت ثبت‍‍ شد');
        }
        else{
            session()->flash('message', 'سلام امید');
        }
        return 1;
        return redirect()->back();
    }

}

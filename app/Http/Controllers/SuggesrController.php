<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suggest;

class SuggesrController extends Controller
{

    public function sendsuggest(Request $request){

        $sgst=new suggest();
        $sgst->name=$request->name;
        $sgst->phone=$request->number;
        $sgst->email=$request->email;
        $sgst->care=$request->important;
        $sgst->suggest=$request->suggested;
        $sgst->save();
        return view('user.suggest');
    }
    public function get($page_num)
    {
        $suggests= suggest::paginate(2);
        return view('admin.suggestlist', ['suggests' => $suggests, 'suggest' => false,
            'page_now' => $page_num, 'all_page' => $suggests['count'], 'active' => 'suggest']);

        $limit = 10;
        $obj_pagination = new pagination("suggests", $page_num, $limit);
        $suggests = $obj_pagination->paginate('id');
        $counter_suggests = $page_num * $limit - $limit;
        if ($suggests['status'] == '350') {
            return view('admin.suggestlist', ['counter_sug' => $counter_suggests,
                'sug' => $suggests['data'], 'page_now' => $page_num, 'all_page' => $suggests['count'],
                'active' => 'sug']);
        } elseif ($suggests['status'] == '300') {
            return view('admin.suggestlist', ['counter_sug' => $counter_suggests, 'suggest' => false,
                'page_now' => $page_num, 'all_page' => '', 'active' => 'sug']);

        } else {
            //error baraye safhe moshke fani
        }
    }
}

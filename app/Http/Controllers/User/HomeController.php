<?php

namespace App\Http\Controllers\User;

use App\Classes\driver\ManagementCourseAvailable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\driver\News;
use App\Classes\Mails;
use App\CommentModel;

class HomeController extends Controller
{
    public function get()
    {
        $news = new  News();
        $professor = new ManagementCourseAvailable();
        $data_professor = $professor->get_all_professor();
        $data = $news->get_all_limit(5);
        if ($data['status'] == '350' and $data_professor['status'] == '350') {
            return view('user.index', ['news' => $data['news'], 'list_professor' =>$data_professor['list_professor']]);
        } elseif ($data['status'] == '300') {
            return view('user.index', ['news' => false]);
        } else {
            //moskle fani
        }

    }

    public function post2(Request $request)
    {
        return $request->all();
        $commentModel=new CommentModel();
        $commentModel->name=$request->name;
        $commentModel->email=$request->email;
        $commentModel->phone=$request->number;
        $commentModel->care=$request->important;
        $commentModel->message=$request->suggested;
        if($commentModel->save()){
            session()->flash('message', 'با موفقیت ثبت‍‍ شد');
        }
        else{
            session()->flash('message', 'سلام امید');
        }
        return 1;
        return redirect()->back();
    }
}

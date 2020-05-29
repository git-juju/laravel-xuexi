<?php
namespace App\Http\Controllers;

use App\SStudent;

class SStudentController extends Controller
{
    //学生列表页
    public function index()
    {
       $sstudents = SStudent::paginate(2);
        return view('sstudent.index',[
            'sstudents' => $sstudents
        ]);
    }
    public function create(){
        return view('sstudent.create');
    }
}

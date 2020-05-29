<?php
namespace App\Http\Controllers;


use App\Member;

class MemberController extends Controller
{
    public function JJJuuu()
    {
       return Member::getMember();
//        return view('member/info',
//        [
//            'name'=>'jjuju',
//            'age'=> '18'
//        ]);
    }
}

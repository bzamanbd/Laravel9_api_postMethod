<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index (Request $req){
        $member = new Member();
        $member->name = $req->name;
        $member->address = $req->address;
        $member->save();

        // $result=$member->save();

        // if ($result) {
        //     return 'one data added';
        // } else {
        //     return 'error found';

        // }


    }
}
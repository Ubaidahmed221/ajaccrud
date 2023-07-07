<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class memberController extends Controller
{
    function index(){
        return View('show');
    }

    function getmember(){
        $member = member::all();

        return view('memberlist',compact('member'));
    }

    function save(Request $req){
        if($req->ajax()){
            $member =  new member;
            $member->first_name = $req->input('firstname');
            $member->last_name = $req->input('lastname');

            $member->save();
            return response($member);
        }

    }

    function update(Request $req){
        if($req->ajax()){
            $member = member::find($req->id);
            $member->first_name = $req->input('firstname');
            $member->last_name = $req->input('lastname');

            $member->update();
            return response($member);
        }
    }

    function delete(Request $req){
        if($req->ajax()){
            member::destroy($req->id);
        }

    }
}

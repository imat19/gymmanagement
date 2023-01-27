<?php

namespace App\Http\Controllers; 

use App\Models\Member;
use Illuminate\Http\Request;


class MemberController extends Controller
{
    public function index(){
        return view('index')->with('members', Member::latest()->get());
    }
    public function create(Request $request){
       
        $member  = new Member;
        
        $member->name                       = $request->name;
        $member->email                      = $request->email;
        $member->membershipType             = $request->membershipType;
        $member->membershipExpiration       = $request->membershipExpiration;
       
        $member->save();
        return redirect()->route('index')->with('success', 'New member added!');
    }

    public function edit()
    {
        return view('edit');
    }

    public function delete($id)
    {
        $member = Member::find($id);
        $member-> delete();
        return redirect()->route('index')->with('success', 'Member deleted!');
    }

}

<?php

namespace App\Http\Controllers;
use App\Models\Member;

use Illuminate\Validation\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    //     return DB::select('SELECT * FROM users');
    // }

    // public function display_members(){
    //     $mymembers = Member::paginate(5);
    //     return view('list',['all_members'=>$mymembers]);
    // }

        public function insertMember(Request $request, Member $member){
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'address'=>'required'
            ]);
            $member->name = $request->input('name');
            $member->email = $request->input('email');
            $member->address = $request->input('address');
            $member->save();
            return redirect('form');
              
        }
        public function show_members(Member $member){
            $data = $member::paginate(5);
            return view('show_members',['data'=>$data]);
        } 
        public function delete_member(Member $member, $id){
            $member::find($id)->delete();
            return redirect('member_list');
        }
        public function edit_member(Member $member, $id){
            $find_member = $member::find($id);
            return view('edit_member',['find_member'=>$find_member]);
        }
        public function update_member(Request $request, $id){
            $member = Member::find($id);
            $member->name = $request->input('name');
            $member->email = $request->input('email');
            $member->address = $request->input('address');
            $member->save();
            return redirect('member_list');
        }
}
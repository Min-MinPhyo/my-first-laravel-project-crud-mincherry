<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
  public function index(){
    $users=DB::table('user')->get();

    return view('index',[
        'users'=>$users
    ]);

  }
  public function insert(){
    $users=DB::table('user')->insert([
        // 'id'=>request('id'),
       'name'=>request('name'),
       'email'=>request('email'),
       'password'=>request('password')
    ]
    );
    return redirect('/');

    
    
  }
  public function delete($id){
  $delUsers=DB::table('user')->where('id',$id)->delete();
  return redirect('/');

}
public function edit($id){
    $editUsers=DB::table('user')->where('id',$id)->first();
    //first so tar ta ku chin se hnan swe htar tar par ....
    
    return view('edit',[
        'editUsers'=>$editUsers
        ]
    );
}
public function update($id){
    DB::table('user')->where('id',$id)->update([
        'name'=>request('name'),
        'email'=>request('email'),
        'password'=>request('password')
    ]);
    return redirect('/');
}
}
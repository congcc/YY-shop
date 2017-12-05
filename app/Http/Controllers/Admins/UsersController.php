<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\admins;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.userauth');
    }

    public function sd($id)
    {
        $req = admins::where('id',$id)->first();
        $auth = $req->auth;
        if ($auth == '0') {
        	$res = ['auth'=>'1'];

            $data = admins::where('id',$id)->update($res);

	        if($res){
	            return redirect('/admin/user')->with('通过申请');
	        } else {
	            return back();
	        }
        }

        if ($auth == '1') {
        	$res = ['auth'=>'0'];

            $data = admins::where('id',$id)->update($res);

	        if($res){
	            return redirect('/admin/user')->with('通过申请');
	        } else {
	            return back();
	        }
        }
    }
}

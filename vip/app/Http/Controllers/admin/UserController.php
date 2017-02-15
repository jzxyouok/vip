<?php

namespace vip\Http\Controllers\admin;

use Illuminate\Http\Request;

use vip\Http\Requests;
use vip\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getIndex(){
        return view ('admin.user.index');
    }
    public function getAdd() {
        return view('admin.user.add');
        
    }

}

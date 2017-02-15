<?php

namespace vip\Http\Controllers\admin;

use Illuminate\Http\Request;

use vip\Http\Requests;
use vip\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index()
    {
        // 后台主页面
        return view('admin.admin.index');
        // return 111;
    }

    
}

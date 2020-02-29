<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /*获取一个添加页面
     * @param null
     * @return 返回添加页面
     * */
    public function add( )
    {
        return view('');
    }
    /*执行用户添加操作
     * @param 提交的表单数据
     * @return 返回添加是否成功
     * */
    public function store(Request $request)
    {
        //1.获取客户端提交的表单数据
        $input = $request->all();
        dd($input);
    }
}

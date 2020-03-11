<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function redis1(){
        $key='aaa';
        $val='bbb';
        Redis::set($key,$val);
        echo 'set成功';
    }
    public function redis2(){
        $key='aaa';
        $val=Redis::get($key);
        echo 'val:'.$val;
    }
    public function mysql1(){
        $list=DB::table('admin')->first();
        var_dump($list);
    }
}

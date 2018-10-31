<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017 河源市卓锐科技有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

// 为方便系统核心升级，二次开发中需要用到的公共函数请写在这个文件，不要去修改common.php文件

if (!function_exists('return_json')){
    /**
     * api接口返回
     * @param $data
     * @param bool $is_success
     * @auther sl
     * @return \think\response\Json
     */
    function return_json($data,$is_success=false){
        $arr = [];
        $arr['code'] = $is_success==false?'0':'1';
        $arr['info'] = $data;
        return json($arr);
    }
}if (!function_exists('my_dump')){
    function my_dump($data){

//        foreach ($data as $value){
//
//            foreach ($value as $vv){
//                echo $vv.' &nbsp&nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp ';
//            }
//            echo  '<br>';
//
//
//        }


        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
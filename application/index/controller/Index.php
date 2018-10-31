<?php
namespace app\index\controller;
use think\Db;
use think\Config;
class Index
{
    public function index()
    {


    Db::name('demo')
        ->find();
    Db::name('demo')
    ->field('id,name')
    ->limit(10)
    ->order('id','desc')
    ->select();
    $ss = config('mongo');
  //  echo $ss;

    dump($ss);
//$data = ['foo' => 'bar', 'bar' => 'foo'];
//Db::table('think_user')->insert($data);
//
//
//
//var_dump(phpinfo());
   


  try {


  	 $ss =  Db::connect($ss);

    var_dump($ss);
         // $re = Db::connect('mongo')->name('demo')->insert($data);
            //var_dump($re);
        } catch (Exception $e) {
            echo             $e->getMessage();
        }
        return 'asdfa';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}

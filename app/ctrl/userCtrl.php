<?php
namespace app\ctrl;
class userCtrl extends \core\action
    {
        public function index(){
            p('it is user index');

            //$temp=\core\lib\conf::get('CTRL','route');
            /*$temp=\core\lib\conf::get('ACTION','route');
            print_r($temp);*/
            // $title='ssssssss';
            // $this->assign('title',$title);
            // $ret='Hello World';
            $model = new \app\model\cMod();
            $ret = $model->lists();
           
            $this->assign('ret',$ret);
            $this->display('index.html');
        }
        public function user(){
            p('it is user  user');

            //$this->display('index.html');
        }
}

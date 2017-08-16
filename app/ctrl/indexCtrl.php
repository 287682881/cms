<?php
namespace app\ctrl;
use core\lib\model;
class indexCtrl extends \core\action
    {
        public function index(){
            p('it is index');
            // // $model=new \core\lib\model();
            // // $sql="SELECT * FROM student";
            // // $result=$model->query($sql);
            // // p($result->fetchAll());

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

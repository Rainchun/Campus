<?php
namespace Recommend\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function lists(){

    	$rid=$_GET['rid'];
    	$redmodel=M('recommend');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$redmodel->where("rid=$rid")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
        $this->redmodel=$redmodel->where("rid=$rid" )->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
      
       $this->display();
    }
}
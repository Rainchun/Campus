<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        //推荐类型总数
    	$this->rtype1=M('recommend')->where("rtype_rid=1")->count();
    	$this->rtype2=M('recommend')->where("rtype_rid=2")->count();
    	$this->rtype3=M('recommend')->where("rtype_rid=3")->count();
    	$this->rtype4=M('recommend')->where("rtype_rid=4")->count();
    	$this->rtype5=M('recommend')->where("rtype_rid=5")->count();
    	$this->rtype6=M('recommend')->where("rtype_rid=6")->count();


        //结伴类型总数
    	$this->themetype1=M('travel')->where("themetype_tid=1")->count();
    	$this->themetype2=M('travel')->where("themetype_tid=2")->count();
    	$this->themetype3=M('travel')->where("themetype_tid=3")->count();
    	$this->themetype4=M('travel')->where("themetype_tid=4")->count();
    	$this->themetype5=M('travel')->where("themetype_tid=5")->count();
       
        //轮播图片显示
        $this->carousel=M('carousel')->where("isfirst=1")->order("createtime desc")->find();
        // dump($carousel);

        //探索精彩大连
        $this->redmodel=M('recommend')->join(" __USER__  ON __RECOMMEND__.user_uid =__USER__.uid ")->where("ischeck='1'" )->order(" hits desc")->limit(4)->select();

        //约不约
        $this->travel=M('travel')->join(" __USER__  ON __TRAVEL__.user_uid =__USER__.uid ")->order("creatime desc")->limit(6)->select();
    	
   
        $this->display();
    }
    

}
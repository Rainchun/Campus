<?php
namespace Recommend\Controller;
use Think\Controller;
class TuijianController extends Controller {
    public function tuijian(){
    
       $this->display();
    }

    public function addTuijian(){
    	$user=M('user');
    	$uname['uname']=session('uname');
    	$rs=$user->where($uname)->select();
        //dump($rs);exit;
        $uid=$rs[0]["uid"];
      $rid=I('post.rid');
     // dump($rid);exit;


    	 $redmodel = M('recommend');
    
         if ($redmodel->create()) {
           if($_FILES["pic"]["error"]==0){
             $info=$this->upload();
             $redmodel->pic=$info["pic"]["savename"];
           }

           else{
             $redmodel->pic="default.jpg";
           }

            $redmodel->creatime=date('Y-m-d');//获取当前时间
            $redmodel->uid=$uid;
            $redmodel->rid=$rid;

             if (false !== $redmodel->add()) {
               $this->success('推荐成功！',U("Recommend/Index/lists/rid/$rid"));
               }else{         
               	   $this->error('数据错误');        
               	    }
               }else{
                   $this->error($redmodel->getError());
                    }
    }

    public function upload(){

       $upload = new \Think\Upload();// 实例化上传类
       $upload->maxSize=3145728 ;// 设置附件上传大小
       $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
       $upload->rootPath='./Public/Recommend/photo/'; // 设置附件上传根目录
        $upload->autoSub=false; 
       // $upload->savePath  =''; // 设置附件上传（子）目录
       $info =$upload->upload();  // 上传文件 
       // dump()
        $data=$info["pic"]["savename"];
      
        
       if(!$info) {  
             $this->error($upload->getError());   
           }else{       
               // $this->success('上传成功！');   
             return $info;
              }              
        }
}
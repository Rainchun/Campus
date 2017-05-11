<?php
namespace Admin\Controller;
use Think\Controller;
class RecommendController extends BaseController {

	  //显示user_recmd.html
    public function user_recmd(){

        //查找推荐类型
        $this->recmdtype=M('rtype')->select();

        //查找推荐表相关内容
        $this->recmd=M('recommend')->where("isadmin='0'")->select();
      	$this->display();
     
    } 

    //显示推荐详情
    public function recmd_detail(){
        $id=I('get.id');

        //查找推荐类型
        // $this->recmdtype=M('rtype')->select();
         //推荐类型总数
        // $this->rtype1=M('recommend')->where("rtype_rid=1")->count();
        // $this->rtype2=M('recommend')->where("rtype_rid=2")->count();
        // $this->rtype3=M('recommend')->where("rtype_rid=3")->count();
        // $this->rtype4=M('recommend')->where("rtype_rid=4")->count();
        // $this->rtype5=M('recommend')->where("rtype_rid=5")->count();
        // $this->rtype6=M('recommend')->where("rtype_rid=6")->count();

        //查找推荐表相关内容
        $this->recmd=M('recommend')->join(" __USER__  ON __RECOMMEND__.user_uid =__USER__.uid ")->where("id=$id")->find();

        $this->display();
     
    } 

    //审核通过
    public function recmd_check($id){
     $recmdmodel=M('recommend');
     $recmdmodel->ischeck="1";
     if(false!==$recmdmodel->where("id=$id")->save()){
         $this->success('审核成功');
       }else{ 
         $this->error('审核失败！');
       }

    }

    //审核不通过
    public function cal_recmd_check($id){
     $recmdmodel=M('recommend');
     $recmdmodel->ischeck="0";
     if(false!==$recmdmodel->where("id=$id")->save()){
         $this->success('取消审核通过成功');
       }else{ 
         $this->error('取消审核通过失败！');
       }

    }

    //管理员推荐

     public function admin_recmd(){

        //查找推荐类型
        // $this->recmdtype=M('rtype')->select();

        //查找推荐表相关内容
        $this->recmd=M('recommend')->join(" __RTYPE__  ON __RECOMMEND__.rtype_rid =__RTYPE__.rid ")->join(" __ADMIN__  ON __RECOMMEND__.user_uid =__ADMIN__.adminid ")->where("isadmin='1'")->select();
        $this->display();
     
    } 

     public function doTuijian(){

     
        $id=session('adminid');
        // dump($uid);exit;
        $rid=I('post.rtype_rid');
        // dump($rid);exit;


       $redmodel =M('recommend');
    
         if ($redmodel->create()) {
           if($_FILES["pic"]["error"]==0){
             $info=$this->upload();
             $redmodel->pic=$info["pic"]["savename"];
           }

           else{
             $redmodel->pic="defaults.jpg";
           }
             $redmodel->rtype_rid=$rid;
             $redmodel->isadmin='1';
             $redmodel->ischeck='1';
             $redmodel->user_uid=$id;
             $redmodel->creatime=date('Y-m-d H:i:s');

             if (false !== $redmodel->add()) {
               $this->success('推荐成功！');
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
       $upload->rootPath='./Public/Home/uploads/recmdphoto/'; // 设置附件上传根目录
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

   //删除管理员推荐内容
   public function recmd_del($id){
    
      $recommendmodel=M('recommend');

      $findinfo=$recommendmodel->where("id=$id and pic!='defaults.jpg'")->find();
    
      unlink(realpath("./Public/Home/uploads/recmdphoto/".$findinfo["pic"]));

      if(false!==$recommendmodel->where("id=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }

   public function delchecks(){
      
      $ck=$_GET["id"]; 
      $recommendinfo=M('recommend')->where("id in ($ck)")->getField('pic',true);

      // dump($recommendinfo);exit;

      // unlink(realpath("./Public/Uploads/qrcode/".$recommendinfo));
       if(false!==M('recommend')->where("id in ($ck)")->delete()){
           $this->success('删除成功！');
        }else{
           $this->success('删除失败！');
       } 


    }

  public function admin_detail_edit(){

        $id=I('get.id');

        //查找推荐表相关内容
        $this->recmd=M('recommend')->join(" __ADMIN__  ON __RECOMMEND__.user_uid =__ADMIN__.adminid ")->join(" __RTYPE__  ON __RECOMMEND__.rtype_rid =__RTYPE__.rid ")->where("id=$id")->find();

        // $recmd=M('recommend')->join(" __ADMIN__  ON __RECOMMEND__.user_uid =__ADMIN__.id ")-find();

        $this->display();

  }

  //修改管理员推荐内容
   public function editTuijian(){

     
        // $id=session('adminid');
        // dump($uid);exit;
       $pic=I('post.pic');
         // dump($pic);exit;

       $redmodel =M('recommend');
    
         if ($redmodel->create()) {
           if($_FILES["pic"]["error"]==0){
             $info=$this->upload();

             if($pic!='default.jpg'){
                unlink(realpath("./Public/Home/uploads/recmdphoto/".$pic));
             }
             $redmodel->pic=$info["pic"]["savename"];
           }

             $redmodel->creatime=date('Y-m-d H:i:s');

             if (false !== $redmodel->save()) {
               $this->success('修改成功！');
               }else{         
                   $this->error('数据错误');        
                    }
               }else{
                   $this->error($redmodel->getError());
                    }
    }
  

}
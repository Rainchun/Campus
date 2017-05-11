<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {


//用户资料
 public function user_info(){


        $usermodel=M('user');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$usermodel->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->usermodel=$usermodel->limit($Page->firstRow,$pageSize)->select();
 	     $this->display();
 }

//用户收藏(主题推荐)
 public function recmd_collect(){

        $redmodel=M('recmdcollect');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$redmodel->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->redmodel=$redmodel->join(" __RECOMMEND__  ON __RECMDCOLLECT__.recommend_id =__RECOMMEND__.id ")->join(" __USER__  ON __RECMDCOLLECT__.uid =__USER__.uid ")->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
         // dump($redmodels);
 	     $this->display();
 }

  //删除用户收藏的推荐内容
    public function delcol($id){
    
      $recommendmodel=M('recmdcollect');

      if(false!==$recommendmodel->where("cid=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }


//用户收藏(结伴同游)
 public function travel_collect(){

        $travelmodel=M('travelcollect');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$travelmodel->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->travel=$travelmodel->join(" __TRAVEL__  ON __TRAVELCOLLECT__.travel_id =__TRAVEL__.id ")->join(" __USER__  ON __TRAVELCOLLECT__.uid =__USER__.uid ")->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
         // dump($travel);
   
 	     $this->display();
 }

   //删除结伴内容
   public function deltcol($id){
    
      $travelmodel=M('travelcollect');

      if(false!==$travelmodel->where("cid=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }

  public function p_letter(){
 	$this->display();
 }

//禁用
  public function stopuser($id){ 
 	$usersmodel=M('user');
 	$usersmodel->state="1";
 	if(false!==$usersmodel->where("uid=$id")->save()){
  		$this->success('暂停使用成功！');
  	}else{
  		$this->error('暂停使用失败！');
  	}
 }

//取消禁用
 public function releaseuser($id){ 
 	$usersmodel=M('user');
 	$usersmodel->state="0";

 	if(false!==$usersmodel->where("uid=$id")->save()){
  		$this->success('解除禁用成功！');
  	}else{ 
  		$this->error('解除禁用失败！');
  	}
 }

  //删除用户
   public function user_del($id){
    
      $usersmodel=M('user');

      $findinfo=$usersmodel->where("uid=$id and upic!='default.jpg'")->find();
    
      unlink(realpath("./Public/Home/userphoto/".$findinfo["pic"]));

      if(false!==$usersmodel->where("uid=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }


//结伴内容
  
    public function travel(){

       
        $travelmodel=M('travel');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$travelmodel->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
        $this->travel=$travelmodel->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
        // dump($travel);
        $this->display();
    }

   //删除用户结伴内容
   public function deltrave($id){
    
      $travelmodel=M('travel');

      $findinfo=$travelmodel->where("id=$id and pic!='defaults.jpg'")->find();
    
      unlink(realpath("./Public/Home/uploads/travelphoto/".$findinfo["pic"]));

      if(false!==$travelmodel->where("id=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }









}?>
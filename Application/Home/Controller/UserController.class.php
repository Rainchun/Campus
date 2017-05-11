<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

 public function center(){
 	     $uid=session('uid');
       // dump($uid);
 	      
      
        $redmodel=M('recommend');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$redmodel->where("user_uid=$uid")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->redmodel=$redmodel->join(" __USER__  ON __RECOMMEND__.user_uid =__USER__.uid ")->where("user_uid=$uid" )->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
         // dump($tredmodel);
         $this->display();
    }

   //删除用户推荐内容
   public function delrecmd($id){
    
      $recommendmodel=M('recommend');

      $findinfo=$recommendmodel->where("id=$id and pic!='defaults.jpg'")->find();
    
      unlink(realpath("./Public/Home/uploads/recmdphoto/".$findinfo["pic"]));

      if(false!==$recommendmodel->where("id=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }
    
  public function logins(){
   
        $this->display();
    }

  public function dologin(){
   
       $user=M('user');
       $data['telephone']=I('post.telephone');
       $data['password']=md5(I('post.password'));
       $rs=$user->where($data)->select();

       $uname=$rs[0]['uname'];
       $uid=$rs[0]['uid'];
       
       // dump($user->getLastSql());exit;
       if($rs){
       	session("telephone",$data['telephone']);
        session("uname",$uname);
        session("uid",$uid);
     
       	$this->success('登录成功',U('Home/Index/index'));
       }
       else{
       	$this->error('用户名或密码错误');
       }
    }
    public function logout(){
    	session(null);
    	redirect(U("Home/Index/index"));
    }

    public function register(){
      // 实例化User模型
      // var_dump($_FILES);
     // $code=I('post.verifycode');
     // if(!$this->checkverify($code))
     //   $this->error("验证码错误");
      
       


        $user = D('user'); 

        $data['telephone']=I('post.telephone');
        $data['uname']=I('post.uname');
        
        // var_dump($user);exit; 
        if ($user->create()) {
           // $user->password=md5($password);
          $newid= $user->add();
             if (false !== $newid) {
                session("telephone",$data['telephone']);
                session("uname",$data['uname']);
                session("uid",$newid);
               $this->success('注册成功！', 'update_info');
                
               
               }else{         
                   $this->error('数据错误');        
                    }
               }else{
                   $this->error($user->getError());
                    }
    }


    //我的结伴
    public function my_travel(){

        $uid=session('uid');
        $travelmodel=M('travel');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$travelmodel->where("user_uid=$uid")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
        $this->travel=$travelmodel->join(" __USER__  ON __TRAVEL__.user_uid =__USER__.uid ")->where(" user_uid=$uid" )->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
        // dump($travel);
        $this->display();
    }

    //收藏主题推荐
    public function collect_recmd(){

       $uid=session('uid');
       // dump($uid);
        
      
        $redmodel=M('recmdcollect');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$redmodel->where("uid=$uid")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->redmodel=$redmodel->join(" __RECOMMEND__  ON __RECMDCOLLECT__.recommend_id =__RECOMMEND__.id ")->where("uid=$uid")->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
         // dump($redmodels);
         $this->display();
   

    }

    //收藏结伴同游
    public function collect_travel(){

       $uid=session('uid');
       // dump($uid);
        
      
        $travelmodel=M('travelcollect');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$travelmodel->where("uid=$uid")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->travel=$travelmodel->join(" __TRAVEL__  ON __TRAVELCOLLECT__.travel_id =__TRAVEL__.id ")->where("uid=$uid")->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
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

    //删除用户收藏的推荐内容
    public function delcol($id){
    
      $recommendmodel=M('recmdcollect');

      if(false!==$recommendmodel->where("cid=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }


     //删除用户结伴内容
   public function deltcol($id){
    
      $travelmodel=M('travelcollect');

      if(false!==$travelmodel->where("cid=$id")->delete()){
        $this->success('删除成功！');
      }else{
        $this->success('删除失败！');
      } 

  }

    //我的私信
   public function private_letter(){

       $uid=session('uid');
       // dump($uid);
        
      
        $pletter=M('pletter');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$pletter->where("ag_uid=$uid")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->pletters=$pletter->join(" __USER__  ON __PLETTER__.send_uid =__USER__.uid ")->where("ag_uid=$uid" )->order("p_time desc")->limit($Page->firstRow,$pageSize)->select();
         // dump($pletters);
        $this->display();
   }
    
    //处理私信
    public function send_letter(){

        $uid=session('uid');
       
        $plmodel = D('pletter');
    
         if ($plmodel->create()) {
          
             $plmodel->send_uid=$uid;
             $plmodel->p_time=date('Y-m-d H:i:s');

             if (false !== $plmodel->add()) {
               $this->success('悄悄话已送达！');
               }else{         
                   $this->error('数据错误');        
                    }
               }else{
                   $this->error($plmodel->getError());
                    }
   
   }


   //AJAX 动态验证

    public function checkA(){
    $key=I('get.tt');
    $rs=M('users')->field("aliasname")->where("aliasname like '%$key%'")->limit(4)->select();

    $this->ajaxReturn($rs);
  }


  public function checkTele(){

    $tele = I("get.t");
    $l=I("get.l"); 
    
    $usermodel=M('user');
    $rs=$usermodel->where("telephone='$tele'")->select();
    // dump($rs);

    if($tele=='') echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>手机号不能为空</font>";
    else {
          if($l!=='11')echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>手机格式不正确</font>";
    else{

    if($rs) echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>手机号已被注册</font>";
    else{
      echo "<img src='../../Public/icon/right.png' width='23px' height='20px'><font color='green'>手机号可用</font>";
        }
    
      }
   }
  }

   public function checkAlias(){

    $alias=I('get.alias');
    $usermodel=M('user');
    $rs=$usermodel->where("uname='$alias'")->select();

    if($alias=='admin' || $alias =='administrator')echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>用户名不能为admin或administrator</font>";
    else{
       if($rs) echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>用户名已存在</font>";
    else{
      if($alias=='')echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>用户名不能为空</font>";

        else{
      echo "<img src='../../Public/icon/right.png' width='23px' height='20px'>";
        }
       }
    }

   }

    public function check(){

      $pwd1=I('get.pwd1');
      $pwd2=I('get.pwd2');

      if($pwd1== ''||$pwd2=='')
        echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>密码不能为空</font>";
      else {
        if($pwd1!=$pwd2)
           echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>两次密码不一致</font>";
         else{
          if($pwd1=$pwd2)echo "<img src='../../Public/icon/right.png' width='23px' height='20px'>";
         }
      }
     
    }

   public function checkYZM(){

     $code=I('get.verifycode');
      if(!$this->checkverify($code)){
         echo "<img src='../../Public/icon/wrong.png' width='20px' height='20px'><font color='red'>验证码错误</font>";
       // $this->error("验证码错误");
     }
       else{
        echo "<img src='../../Public/icon/right.png' width='23px' height='20px'>";
       }

   }



    public function verify(){
      ob_clean();
      $Verify = new \Think\Verify();
      $Verify->entry();

   }
    public function checkverify($code,$id=''){

     $Verify = new \Think\Verify(); 
     return $Verify->check($code,$id);
   }


   //修改个人资料
   public function update_info(){

    $uid=session('uid');

    $this->userInfos=M('user')->where("uid=$uid")->find();
    $this->display();
   }

    public function doUpdate(){

          $uname=I('post.uname');
          $uid=I('post.uid');
        $user =M('user');
        // var_dump($user);exit; 
        if ($user->create()) {
         

          // $photo=I('post.photo');
        

           if($_FILES["file"]["error"]==0){
            $info=$this->upload();
            $user->upic=$info["file"]["savename"];
             // unlink(realpath("./Public/Uploads/photo/".$photo));

           }
          
             if (false !== $user->save()) {
              session("uname",$uname);
              session("uid",$uid);
               $this->success('成功保存！',U('userinfo'));
               }else{         
                   $this->error('数据错误');        
                    }
               }
               else{
                   $this->error($user->getError());
                    }

          

  }

   public function upload(){

       $upload = new \Think\Upload();// 实例化上传类
       $upload->maxSize=3145728 ;// 设置附件上传大小
       $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
       $upload->rootPath='./Public/Home/userphoto/'; // 设置附件上传根目录
        $upload->autoSub=false; 
       // $upload->savePath  =''; // 设置附件上传（子）目录
       $info =$upload->upload();  // 上传文件 
       // dump()
        $data=$info["file"]["savename"];
        // $image= new \Think\Image();
        // $image->open("./Public/Uploads/photo/$data");
        // $image->thumb(150,150)->save("./PublicHome/userphoto//$data");
        
       if(!$info) {  
             $this->error($upload->getError());   
           }else{       
               // $this->success('上传成功！');   
             return $info;
              }              
        }

  //个人资料
   public function userinfo(){

    $uid=session('uid');

    $this->userInfos=M('user')->where("uid=$uid")->find();
    $this->display();

   }

    public function edit_info(){

    $uid=session('uid');

    $this->userInfos=M('user')->where("uid=$uid")->find();
    $this->display();

   }


	}?>
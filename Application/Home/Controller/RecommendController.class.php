<?php
  namespace Home\Controller;
  use Think\Controller;
  class RecommendController extends Controller {
    public function index(){
    
        $this->display();
    }
    
    public function lists(){
      // dump(session());

    	  $rid=I('get.rtype_rid');
    	 
    	  $redmodel=M('recommend');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$redmodel->where("rtype_rid=$rid")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
         $this->redmodel=$redmodel->join(" __USER__  ON __RECOMMEND__.user_uid =__USER__.uid ")->field('dca_user.uname,dca_recommend.pic,dca_recommend.name,dca_recommend.hits,dca_recommend.praise,dca_recommend.id')->where("rtype_rid=$rid  and ischeck='1'" )->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();

         $this->redmodeltype=M('rtype')->field('dca_rtype.rname')->where("rid=$rid" )->find();

         $this->rtype=M('rtype')->select();

         $this->fresh=M('recommend')->order('creatime desc')->limit(5)->select();

 
    	
         $this->display();
    }
    
     public function doTuijian(){

     
        $uid=session('uid');
        // dump($uid);exit;
        $rid=I('post.rtype_rid');
        // dump($rid);exit;


       $redmodel = D('recommend');
    
         if ($redmodel->create()) {
           if($_FILES["pic"]["error"]==0){
             $info=$this->upload();
             $redmodel->pic=$info["pic"]["savename"];
           }

           else{
             $redmodel->pic="defaults.jpg";
           }
             $redmodel->rtype_rid=$rid;

             if (false !== $redmodel->add()) {
               $this->success('推荐成功！',U("Home/Recommend/lists/rtype_rid/$rid"));
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


    public function content(){

        $id=$_GET['id'];
        $uid=session('uid');
        // dump($id);
        $redmodel=M('recommend');
        $this->content=M('recommend')->where("id='$id'")->setInc('hits',1);
        $this->content=$redmodel->where("id='$id'")->find();

       if($uid!=null){

        $this->rcollect=M('recmdcollect')->where("recommend_id=$id and uid=$uid")->find();
       // dump($rcollect);
         }
        $this->fresh=M('recommend')->order('creatime desc')->limit(5)->select();

        $this->display();
    }

    //登录
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
     
        $this->success('登录成功',U('Home/Recommend/lists/rtype_rid/1'));
       }
       else{
        $this->error('用户名或密码错误');
       }
    }

    //收藏推荐内容
     public function collect(){

     
        $uid=session('uid');
        $id=I('get.id');
         // dump($uid);
         // dump($id);exit;
        $data['recommend_id'] =$id;
        $data['uid'] = $uid;
        // dump($data);exit;

        $redmodel = D('recmdcollect');

             if (false !== $redmodel->add($data)) {
                // $redmodel->rid=$id;
                
               $this->success('收藏成功！');
               }else{         
                   $this->error('数据错误');        
                    }

        }


}
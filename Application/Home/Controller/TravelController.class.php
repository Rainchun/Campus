<?php
  namespace Home\Controller;
  use Think\Controller;
  class TravelController extends Controller {
    public function travel(){

        $id=I("get.theme_tid");
        $this->themetype=M('themetype')->where("tid=$id")->find();
        $this->theme=M('themetype')->select();
        // dump(M('themetype')->getLastSql());
       

        $travelmodel=M('travel');

        //准备分页数据：总记录数，每页显示的记录数
        $records=$travelmodel->where("themetype_tid=$id")->count();
        $pageSize=8;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();

        //准备每页显示的数据
        $this->travel=$travelmodel->join(" __USER__  ON __TRAVEL__.user_uid =__USER__.uid ")->field('dca_user.uname,dca_travel.pic,dca_travel.titles,dca_travel.id,dca_travel.hits,dca_travel.want,dca_travel.pretime,dca_travel.endtime')->where(" themetype_tid='$id'" )->order("creatime desc")->limit($Page->firstRow,$pageSize)->select();
         // dump($travel);

         // $this->travelmodeltype=M('rtype')->field('dca_rtype.rname')->where("rid=$rid" )->find();

         // $this->rtype=M('rtype')->select();

        $this->fresh=M('travel')->order('creatime desc')->limit(5)->select();
   
        $this->display();
    }

    public function doTravel(){

   
        $tid=I('post.themetype_tid');
        // dump($rid);exit;
        $travelmodel = D('travel');
    
         if ($travelmodel->create()) {
           if($_FILES["pic"]["error"]==0){
             $info=$this->upload();
             $travelmodel->pic=$info["pic"]["savename"];
           }

           else{
             $travelmodel->pic="defaults.jpg";
           }
             $travelmodel->themetype_tid=$tid;

             if (false !== $travelmodel->add()) {
               $this->success('发布成功！',U("Home/Travel/travel/theme_tid/$tid"));
               }else{         
                   $this->error('数据错误');        
                    }
               }else{
                   $this->error($travelmodel->getError());
                    }
    }

    public function upload(){

       $upload = new \Think\Upload();// 实例化上传类
       $upload->maxSize=3145728 ;// 设置附件上传大小
       $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
       $upload->rootPath='./Public/Home/uploads/travelphoto/'; // 设置附件上传根目录
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

    
    public function detail(){

        $id=$_GET['id'];
        $uid=session('uid');
        // dump($id);
        $travelmodel=M('travel');
        $this->travelcontent=M('travel')->where("id='$id'")->setInc('hits',1);
        $this->travelcontent=$travelmodel->join(" __USER__  ON __TRAVEL__.user_uid =__USER__.uid ")->where("id='$id'")->find();

        $this->fresh=M('travel')->order('creatime desc')->limit(5)->select();

  if($uid!=null){
        $this->rcollect=M('travelcollect')->where("travel_id=$id and uid=$uid")->find();
}
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
     
        $this->success('登录成功',U('Home/Travel/travel/theme_tid/1'));
       }
       else{
        $this->error('用户名或密码错误');
       }
    }

     //收藏结伴内容
     public function collect(){

     
        $uid=session('uid');
        $id=I('get.id');
         // dump($uid);
         // dump($id);exit;
        $data['travel_id'] =$id;
        $data['uid'] = $uid;
        // dump($data);exit;

        $redmodel = D('travelcollect');

             if (false !== $redmodel->add($data)) {
                // $redmodel->rid=$id;
                
               $this->success('收藏成功！');
               }else{         
                   $this->error('数据错误');        
                    }

        }

    

}
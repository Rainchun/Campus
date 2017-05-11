<?php
namespace Recommend\Controller;
use Think\Controller;
class ContentController extends Controller {
    public function content(){

    
    /*----------------------显示推荐商品详情----------------------------*/
        $id=$_GET['id'];
        //dump($id);
        $redmodel=M('recommend');
        $this->content=$redmodel->where("id=$id")->find();
        //dump($redmodel);exit;

        $red=$redmodel->join(" __USER__  ON __RECOMMEND__.uid =__USER__.uid ")->field('dca_user.uname,dca_recommend.rid')->where("dca_recommend.id=$id")->select();
        //dump($redmodel->getLastSql());exit;
        $this->uname=$red[0]['uname'];
        $rid=$red[0]['rid'];
        //dump($rid);exit;

        $red2=$redmodel->join(" __RTYPE__  ON __RECOMMEND__.rid =__RTYPE__.rid ")->field('dca_rtype.rname')->where("dca_rtype.rid=$rid")->select();
        // dump($redmodel->getLastSql());exit;
        // dump($red2);
        $this->rname=$red2[0]['rname'];
        //dump($rname);


 /*----------------------分页显示评论信息----------------------------*/
        $commentmodel=M('comment');

          //准备分页数据：总记录数，每页显示的记录数
        $records=$commentmodel->where("id=$id")->count();
        $pageSize=5;

        //使用分页类生成分页链接
        //创建分页类的对象
        $Page = new \Think\Page($records,$pageSize);
        $this->link=$Page->show();
    
        $com=$commentmodel->join(" __USER__  ON __COMMENT__.uname =__USER__.uname ")->where("dca_comment.id=$id")->order("cid desc")->limit($Page->firstRow,$pageSize)->select();
        
        $this->com=$com;
    

          $this->display();
    }

    public function comment(){
    	 
    	$usermodel=M('user');
    	$uname=session('uname');
    //Sdump($uname);exit;

  
    	 $commentmodel=M('comment');
    	 $id=I('post.id');

    	 if ($commentmodel->create()) {
           
            $commentmodel->id=$id;
            $commentmodel->uname=$uname;
            $commentmodel->creatime=date('Y-m-d');

             if (false !== $commentmodel->add()) {
               $this->success('评论成功！',U("Recommend/Content/content/id/$id"));
               }else{         
               	   $this->error('数据错误');        
               	    }
               }else{
                   $this->error($commentmodel->getError());
                    }
              
        }

 public function repcomment(){

 	    $usermodel=M('user');
    	$uname['uname']=session('uname');
    	$user=$usermodel->where($uname)->select();
    	$uid=$user[0]['uid'];
    	

 	    $repmodel=M('repcomment');
   	
    	
    	$cid=I('post.cid');
    	$commentmodel=M('comment');
        $content=$commentmodel->where("cid=$cid")->find();
        $id=$content['id'];
      

    	 if ($repmodel->create()) {
           
            $repmodel->cid=$cid;
            $repmodel->uid=$uid;
            $repmodel->creatime=date('Y-m-d H:i:s');

             if (false !== $repmodel->add()) {
               $this->success('回复成功！',U("Recommend/Content/content/id/$id"));
               }else{         
               	   $this->error('数据错误');        
               	    }
               }else{
                   $this->error($repmodel->getError());
                    }
           }


}
<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function verify(){
      ob_clean();
      $Verify = new \Think\Verify();
      $Verify->entry();

   }
    public function checkverify($code,$id=''){

     $Verify = new \Think\Verify(); 
     return $Verify->check($code,$id);
   }

    public function dologin(){
      //获取用户输入的验证码
      $code=I('post.verifycode');
      if(!$this->checkverify($code))
        $this->error("验证码错误");

      $adminmodel=M('admin');
      $data["adminname"]=I("post.adminname");
      $data["password"]=md5(I("post.password"));
      $rs=$adminmodel->where($data)->select();
      $apic=$rs[0]["apic"];
      $id=$rs[0]["adminid"];
       // dump($aliasname);exit;
      // echo($adminmodel->getLastSql());exit;
      if($rs){
         session("adminname",$data['adminname']);
          session("apic",$apic);
          session("adminid",$id);
          // dump(session());exit;
        $this->success("登录成功",U('Index/index_gallery'));
      }else{
        $this->error("用户名或密码错误");
      }
    }

    public function logout(){
      session(null);
      redirect(U("Admin/Index/index"));
    }

    public function index(){ 

      $this->display();
    }

	//显示index_gallery.html
    public function index_gallery(){

    	//置顶的所有图片
    	$this->isfirst=M('carousel')->select();
    	// $this->nisfirst=M('carousel')->where("isfirst=0")->select();

    	$this->display();
     
    } 

 
    //首页轮播图片处理
    public function do_first_carousel(){

    	  $carousel = M('carousel');
        // var_dump($user);exit; 
        if ($carousel->create()) {

           if($_FILES["pic"]["error"]==0){
            $info=$this->upload();
            $carousel->pic=$info["pic"]["savename"];
        
           }
    
            $carousel->createtime=date('Y-m-d H:i:s');//获取当前时间

             if (false !== $carousel->add()) {
               $this->success('添加轮播图片成功！', 'index_gallery');
               }else{         
                   $this->error('数据错误');        
                } 
          }else{
                   $this->error($carousel->getError());
                    }

    }

     public function upload(){

         $upload = new \Think\Upload();// 实例化上传类
         $upload->maxSize=3145728 ;// 设置附件上传大小
         $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->rootPath='./Public/Admin/Uploads/carouselphoto/'; // 设置附件上传根目录
         $upload->autoSub=false; 
         // $upload->savePath  =''; // 设置附件上传（子）目录
         $info =$upload->upload();  // 上传文件 
         // dump($info);exit;
       
         $data= $info ['pic'] ['savename'];

         if(!$info) {  
               $this->error($upload->getError());   
             }else{       
               // $this->success('上传成功！');   
              return $info;
              }              
         }

     //删除首页轮播图片
     public function delcarousel($id){
       
         $carouselmodel=M('carousel');

         $carouseinfo=$carouselmodel->find($id);
       
         unlink(realpath("./Public/Admin/Uploads/carouselphoto/".$carouseinfo["pic"]));


         if(false!==$carouselmodel->where("id=$id")->delete()){
             $this->success('删除成功！',U('index_gallery'));
           //E("删除失败")//如果后面还有别的方法 那就不能用e方法 只能用this调用
          }else{
             $this->error('删除失败！');
         } 
      }

     //置顶轮播图片
     public function top($id){
 	    $carouselmodel=M('carousel');
 	    $carouselmodel->isfirst="1";
 	    if(false!==$carouselmodel->where("id=$id")->save()){
  		   $this->success('置顶成功！');
  	    }else{
  		   $this->error('置顶失败！');
  	    }
     }

     //取消置顶轮播图片

     public function cancel($id){
 	   $carouselmodel=M('carousel');
 	   $carouselmodel->isfirst="0";
 	   if(false!==$carouselmodel->where("id=$id")->save()){
  		   $this->success('取消置顶成功！');
  	   }else{ 
  		   $this->error('取消置顶失败！');
  	   }
 }





}
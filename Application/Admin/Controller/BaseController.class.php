<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController  extends Controller {

function _initialize(){
if(ACTION_NAME!='index'  &&  ACTION_NAME!='dologin' )
$this->checkAdmin();
}
private  function checkAdmin(){
if(!session("?adminname"))

	$this->error('无权限访问本页面',U('Index/index'));

}
	
}?>
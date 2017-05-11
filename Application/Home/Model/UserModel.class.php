<?php
namespace Home\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel {
	 protected $_validate = array(
	 	array('telephone', '', '手机号已经存在', 0, 'unique', self::MODEL_INSERT),
	 	array('uname', '', '用户名已经存在', 0, 'unique', self::MODEL_INSERT),
        array('uname','administrator','用户名不能是administrator',1,'notequal'),
        array('uname','admin','用户名不能是admin',1,'notequal'),
        array('uname','Admin','用户名不能是Admin',1,'notequal'),
        array('uname','管理员','用户名不能是管理员',1,'notequal'),
        
	    array('password', 'require', '密码必须！', 1),
	    array('newpassword','password','两次密码不一致',0,'confirm'),
       
	    // array('email', 'require', '邮箱必填！', 1),
    );

	 protected $_auto = array(
//为think_users表的createtime字段生成当前的日期
     
//为think_users表的pass字段进行md5加密
	 	array('upic','default.jpg',self::MODEL_INSERT),
        array('password','md5', self::MODEL_INSERT, 'function'),
    );

	  protected $_link = array(

'Recommend'=>self::HAS_MANY,
// 'User'=>self::MANY_TO_MANY,

);
    
}




?>

<?php
namespace Home\Model;
use Think\Model;
class TravelModel extends Model {
          

	 protected $_auto = array(
      array('creatime','getdate',self::MODEL_INSERT, 'callback'),
      array('user_uid','getuid',self::MODEL_INSERT, 'callback'),
      array('hits','0',self::MODEL_INSERT),
      array('want','0',self::MODEL_INSERT),
   

    );
    function getdate(){

       return date('Y-m-d H:i:s');
     }
     
    function getuid(){
      
       $uid=session('uid');  
       return  $uid;
    }



}
?>

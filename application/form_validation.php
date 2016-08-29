<?php
/*验证规则*/
$config = array(
               'login'=>array(array(
                     'field'   => 'user_id', 
                     'label'   => '工号', 
                     'rules'   => 'required|numeric'
                  ),
               array(
                     'field'   => 'pw', 
                     'label'   => '密码', 
                     'rules'   => 'required|numeric'
                  ),  
               array(
                     'field'   => 'yzm', 
                     'label'   => '验证码', 
                     'rules'   => 'required|callback_yzm_check'
                  ))
            );
?>
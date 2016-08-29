<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    $config = array(
           'account/register' => array(
                                    array(
                                            'field' => 'account',
                                            'label' => '用户名',
                                            'rules' => 'trim|required|xss_clean|is_unique[mar_admin.user_name]|min_length[3]|max_length[30]'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => '密码',
                                            'rules' => 'trim|required|xss_clean|alpha_dash|matches[repassword]|min_length[4]|max_length[30]|md5'
                                         ),
                                    array(
                                            'field' => 'repassword',
                                            'label' => '重输密码',
                                            'rules' => 'trim|required|xss_clean|alpha_dash|min_length[4]|max_length[30]|md5'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => '邮箱',
                                            'rules' => 'trim|required|xss_clean|is_unique[mar_admin.user_email]|valid_email'
                                         ),
                                    array(
                                            'field' => 'ver_code',
                                            'label' => '验证码',
                                            'rules' => 'trim|required|max_length[4]|xss_clean|callback_vercode_check'
                                         )
                                    )

               );
?>
<?php
namespace Admin\Model;

use Think\Model;

class AdminModel extends Model
{
    /**
     * 自动验证
     */
    protected $_validate = array(
        array('username','require','名稱必須填寫',0),
        array('password','require','請輸入原密碼',0),
        array('new_password','require','請輸入新密碼',0),
        array('reset_password','new_password','两次输入密码不一样',0,'confirm'),
        array('email','email','郵箱格式不正確',0),//邮箱格式验证
        
    );
    
    /**
     * 
     *自动完成
     *
     */
    protected $_auto = array ( 
        array('created','time',1,'function'),
        array('updated','time',3,'function'),
     );
    


    /**
     * 
     *[驗證]
     * @author Echo
     * @dateTime 2018/05/22
     * @return [type] [description]
     *
     */
    public function validate(array $params)
    {

        $data = $this->create(array(
            'username'       => $params['username'],
            'mobile_phone'       => $params['mobile_phone'],
            'email'       => $params['email'],
            'is_admin'=> $params['is_admin'],
        ));

        return $data;
    }

    /**
     * 
     *[驗證]
     * @author Echo
     * @dateTime 2018/05/22
     * @return [type] [description]
     *
     */
    public function validate_admin(array $params)
    {

        $data = $this->create(array(
            'username'       => $params['username'],
            'mobile_phone'       => $params['mobile_phone'],
            'email'       => $params['email'],
        ),2);

        return $data;
    }


    /**
     * 
     *[驗證]
     * @author Echo
     * @dateTime 2018/05/22
     * @return [type] [description]
     *
     */
    public function validate_reset(array $params)
    {

        $data = $this->create(array(
            'password'       => hash('sha256',$params['password']),
            'new_password'   => $params['new_password'],
            'reset_password' => $params['reset_password'],
        ),2);

        return $data;
    }


}

<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class LoginController extends Controller
{

	public function index(){
		$this->display();
	}


    public function logining(){
    	$this->success('登錄成功',U('Index/index'));
    }
    /**
     * 
     *[ description]
     * @author Echo
     * @dateTime 2018/09/03
     * @return [type] [description]
     *
    */
    public function login()
    {	
    	$params = I('post.');
    	$name = I('post.name');
    	$password = I('post.password');
    	$captcha = I('post.captcha');

    	if(!$name){
    		$message['status'] = 'error_name';
    		$message['message'] = '用戶名不能為空';
    		$this->ajaxReturn($message, 'json');
    		exit();
    	}
    	if(!$password){
    		$message['status'] = 'error_password';
    		$message['message'] = '密碼不能為空';
    		$this->ajaxReturn($message, 'json');
    		exit();
    	}
    	if(!$captcha){
    		$message['status'] = 'error_captcha';
    		$message['message'] = '驗證碼不能為空';
    		$this->ajaxReturn($message, 'json');
    		exit();
    	}
    	$status = $this->check_verify($captcha);

    	if(!$status){
			$message['status'] = $status;
    		$message['message'] = '驗證碼不正確';
    		$this->ajaxReturn($message, 'json');
    		exit();
    	}
    	$where['password']= hash('sha256',$password);
    	$where['username']= $name;
    	$admin = D('admin')->where($where)->find();
       
        if($admin){
            session(array('name'=>'community_user','expire'=>86400));
            session('community_user',$admin);
            $message['status'] = 'success';
            $this->ajaxReturn($message, 'json');
        }else{
            $message['status'] = 'error_auth';
            $message['message'] = '密碼錯誤或沒有權限登錄';
            $this->ajaxReturn($message, 'json');
            exit();
        }
    	
    }

    /* 生成验证码 */
     public function verify()
     {
         $config = array(
             'fontSize' => 22, // 验证码字体大小
             'length' => 4, // 验证码位数
             'imageH' => 50,
             'imageW' => 200,
         );
         $Verify = new Verify($config);
         $Verify->entry();
     }
 
     /* 验证码校验 */
     public function check_verify($code, $id = '')
     {
         $verify = new \Think\Verify();
         $res = $verify->check($code, $id);
         return $res;
     }




     /**
      * 
      *[ description]
      * @author Echo
     * @dateTime 2018/05/22
      * @return [type] [description]
      *
     */
     public function loginOut()
     {
     	session('community_user',null);
     	$this->success('退出登錄成功',U('Login/index'));
     }



    /**
     * 
     *[修改]
     * @author Echo
     * @dateTime 2018/04/10
     * @return [type] [description]
     *
    */
    public function edit()
    {

        $adminModel = D('Admin');
        if(IS_POST){
            $params = I('post.');
            $id = I('post.id');
            $where['deleted'] = array('exp','IS NULL');
            $where['password']= hash('sha256',$password);
            $where['id']  = array('neq',$id);
            $admin = $adminModel->where($where)->find();
            if($admin){
               $this->error('用戶名已存在'); 
            }
            //驗證并獲取
            $data = $adminModel->validate_admin($params);

            if (!$data){
                $this->error($adminModel->getError());
            }else{
                //验证通过 可以进行其他数据操作
                $adminModel->where('id='.$id)->save($data);
                $this->success('修改成功', U('Admin/Index/index'));
            }
        }else{
            $ext_user = session('community_user');
            $admin = $adminModel->where('id='.$ext_user['id'])->find();
            $this->assign('community_user',$admin);
            $this->display();
        }
            
    }


    /**
     * 
     *[修改密碼]
     * @author Echo
     * @dateTime 2018/04/10
     * @return [type] [description]
     *
    */
    public function reset_password()
    {

        $adminModel = D('Admin');
        if(IS_POST){
            $params = I('post.');
            $id = I('post.id');
            $where['deleted'] = array('exp','IS NULL');
            $where['password'] = hash('sha256',$params['password']);
            $where['username'] = $params['username'];
            $where['id']  = array('eq',$id);
  
            $admin = $adminModel->where($where)->find();

            if(!$admin){
               $this->error('原密碼不正確'); 
            }
            

            //驗證并獲取
            $data = $adminModel->validate_reset($params);
            
            if (!$data){
                $this->error($adminModel->getError());
            }else{
                
                $data_['password'] = hash('sha256',$params['new_password']);
                $data_['updated'] = time();
                //验证通过 可以进行其他数据操作
                $status = $adminModel->where('id='.$id)->save($data_);
                if($status){
                    session('community_user',null);
                    $this->success('修改成功', U('Admin/Index/index'));
                }else{
                    $this->error('修改失敗');
                }
                
            }
        }else{
            $ext_user = session('community_user');
            $admin = $adminModel->where('id='.$ext_user['id'])->find();
            $this->assign('community_user',$admin);
            $this->display();
        }
            
    }

    
}

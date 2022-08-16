<?php
namespace Admin\Controller;

use Think\Controller;


/**
 *基础控制器    所有控制器继承它
 */
class BaseController extends Controller{

    protected $community_user;


    /**
     *  做权限验证
     */
    public function _initialize(){
       if (!session('community_user')) {
          $this->redirect('Login/index');
          // $this->display('Login/index');

          exit();
          
        }


    }

    /**
     * 
     *[]
     * @author echo@poptek.cn
     * @dateTime 2018/09/03
     * @return [type] [description]
     *
     */
    public function __construct(){
        parent::__construct();
        $this->community_user = session('community_user');
        $this->assign('community_user',$this->community_user);
   }


      
        
        
}

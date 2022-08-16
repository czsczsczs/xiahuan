<?php
namespace Home\Controller;

use Think\Controller;


/**
 *基础控制器    所有控制器继承它
 */
class BaseController extends Controller{

	protected $lang;
	protected $user;

      /**
     *  做权限验证
     */
    public function _initialize(){
    }


    public function __construct(){
        parent::__construct();



        //活動實況
        $new_active = D('Active')->newActive();
        $new_news = D('News')->newNews();
        $new_media = D('Media')->newMedia();
        $new_media2= D('Media2')->newMedia2();
        $new_shop = D('Shop')->newShop();
        //$rightNews = D('News')->rightNews();
        $rightStreetHistory = D('StreetHistory')->rightStreetHistory();

        $rightShop = D('Shop')->rightShop();
        $rightPost = D('Posts')->rightPost();
        //$right_data = array_merge($rightNews,$rightPost,$rightShop,$rightStreetHistory);
        $right_data = array_merge($rightPost,$rightShop,$rightStreetHistory);


        // $this->lang = cookie('think_language');
        // $this->user = session('user');
        $this->assign('new_active',$new_active);
        $this->assign('new_media',$new_media);
        $this->assign('new_media2',$new_media2);
        $this->assign('new_news',$new_news);
        $this->assign('new_shop',$new_shop);
        $this->assign('right_data',$right_data);
        $this->assign('Method',CONTROLLER_NAME);

   }





}

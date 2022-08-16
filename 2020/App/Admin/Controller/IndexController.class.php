<?php
namespace Admin\Controller;


class IndexController extends BaseController {

    public function index()
    {

	   /*判斷是否有傳token過來，有則顯示事件內容設置，沒有則只顯示事件列表*/
        $where['deleted'] = array('exp','IS NULL');
		$list = '';
        // die();
        $this->assign('list',$list);
        $this->display();
    	
    } 
}
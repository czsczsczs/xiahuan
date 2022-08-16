<?php
namespace Home\Controller;


/**
 *
 *[媒體中心控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/10
 * @return [type] [description]
 *
 */
class LinksController extends BaseController{


    protected $linksModel;

    public function __construct()
    {
    	parent::__construct();
        $this->linksModel = D('Links');
    }

	/**
	 *
	 *[列表]
	 * @author echo@poptek.cn
	 * @dateTime 2018/09/10
	 * @return [type] [description]
	 *
	 */
	public function index(){
		//社區介紹
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';

        $count = $this->linksModel->linksCount($where);
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->linksModel->linksList($where,$show['firstRow'],$show['listRows']);

		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->display();
	}

	
	









}




?>

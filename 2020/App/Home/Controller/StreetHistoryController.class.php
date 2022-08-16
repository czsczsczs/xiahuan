<?php 
namespace Home\Controller;


/**
 * 
 *[社區介紹控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/10
 * @return [type] [description]
 *
 */
class StreetHistoryController extends BaseController{


    protected $streetHistoryModel;
    protected $streetModel;

    public function __construct()
    {
    	parent::__construct();
        $this->streetHistoryModel = D('streetHistory');
        $this->streetModel = D('street');

    }

	/**
	 * 
	 *[列表]
	 * @author echo@poptek.cn
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */
	public function index(){
		//搜索，篩選
		$keyword = I('get.keyword');
		$status = I('get.status');
		
		//篩選
        if($status){
        	switch ($status) {
	            case 'published':
	                    $where['status'] = 'published';
	                break;
	            case 'draft':
	                    $where['status'] = 'draft';
	                break;
	            case 'recommend':
	                    $where['recommend'] = 1;
	                break;
	        }
        }
        if($keyword){
        	$where['title|title_cn|title_en|content|content_cn|content_en'] = array('like','%'.$keyword.'%');
        }
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		
		$count = $this->streetHistoryModel->streetHistoryCount($where);
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->streetHistoryModel->streetHistoryList($where,$show['firstRow'],$show['listRows']);

		$street_list = $this->streetModel->streetList($where);
		$this->assign('street_list',$street_list);
		$this->assign('status',$status);
		$this->assign('keyword',$keyword);
		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->assign('type',$type);

		$this->display();
	}



	/**
	 * 
	 *[詳情]
	 * @author echo@poptek.cn
	 * @dateTime 2018/09/10
	 * @return [type] [description]
	 *
	 */
	public function detail($id)
	{
		$data = $this->streetHistoryModel->find($id);
        $where['deleted'] = array('exp', 'IS NULL');
        $where['status'] = 'published';

        //获取前一篇
        $where['id'] = array('gt',$id);
        $before = $this->streetHistoryModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id')
			        ->select();
        $this->assign('before',$before['0']);

        //获取后一篇
        $where['id'] = array('lt',$id);
        $later = $this->streetHistoryModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id desc')
			        ->select();
		$this->assign('later',$later['0']);

		$this->assign('history',$data);
		$this->display();

	}






}




?>
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
class CultureHeritageController extends BaseController{


    protected $cultureHeritageModel;

    public function __construct()
    {
    	parent::__construct();
        $this->cultureHeritageModel = D('cultureHeritage');

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
		
		$count = $this->cultureHeritageModel->cultureHeritageCount($where);
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->cultureHeritageModel->cultureHeritageList($where,$show['firstRow'],$show['listRows']);

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
		$data = $this->cultureHeritageModel->find($id);
        $where['deleted'] = array('exp', 'IS NULL');
        $where['status'] = 'published';

        //获取前一篇
        $where['id'] = array('gt',$id);
        $before = $this->cultureHeritageModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id')
			        ->select();
        $this->assign('before',$before['0']);

        //获取后一篇
        $where['id'] = array('lt',$id);
        $later = $this->cultureHeritageModel
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
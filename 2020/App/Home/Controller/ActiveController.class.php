<?php 
namespace Home\Controller;


/**
 * 
 *[活動控制器]
 * @author Echo
 * @dateTime 2018/09/17
 * @return [type] [description]
 *
 */
class ActiveController extends BaseController{


    protected $activeModel;

    public function __construct()
    {
    	parent::__construct();
        $this->activeModel = D('active');
    }

	/**
	 * 
	 *[列表]
	 * @author Echo
	 * @dateTime 2018/09/17
	 * @return [type] [description]
	 *
	 */
	public function index(){

		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$count = $this->activeModel->activeCount($where);
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->activeModel->activeList($where,$show['firstRow'],$show['listRows']);
		$this->assign('count',$count);
		$this->assign('list',$list);

		$this->display();
	}




	/**
	 * 
	 *[詳情]
	 * @author Echo
	 * @dateTime 2018/09/17
	 * @return [type] [description]
	 *
	 */	
	public function detail($id){

		$where['deleted'] = array('exp', 'IS NULL');
		$active = $this->activeModel->find($id);

		if($active['cover']){
			$active['cover_'] = $active['cover'];
		}

		if($active['images']){
            $imagesId = array_filter(explode(',', trim($active['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }

        $where['deleted'] = array('exp', 'IS NULL');
        $where['status'] = 'published';

        //获取前一篇
        $where['id'] = array('gt',$id);
        $before = $this->activeModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id')
			        ->select();
        $this->assign('before',$before['0']);

        //获取后一篇
        $where['id'] = array('lt',$id);
        $later = $this->activeModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id desc')
			        ->select();
		$this->assign('later',$later['0']);
		unset($where['id']);
		
        $re_active = $this->activeModel
			        ->where($where)
			        ->limit(4)
			        ->order('rand()')
			        ->select();
        $this->assign('re_active',$re_active);
        
        $this->assign('images',$images);
		$this->assign('active',$active);

		$this->display();	
		
	}

















}




?>
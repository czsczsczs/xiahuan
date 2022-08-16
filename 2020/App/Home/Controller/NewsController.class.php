<?php 
namespace Home\Controller;


/**
 * 
 *[新聞資訊控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/10
 * @return [type] [description]
 *
 */
class NewsController extends BaseController{


    protected $newsModel;

    public function __construct()
    {
    	parent::__construct();
        $this->newsModel = D('News');
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
        
        $count = $this->newsModel->newsCount($where);
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->newsModel->newsList($where,$show['firstRow'],$show['listRows']);
		
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


		$news = $this->newsModel->find($id);

		if($news['images']){
            $imagesId = array_filter(explode(',', trim($news['images'])));
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
        $before = $this->newsModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id')
			        ->select();
        $this->assign('before',$before['0']);

        //获取后一篇
        $where['id'] = array('lt',$id);
        $later = $this->newsModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id desc')
			        ->select();
		$this->assign('later',$later['0']);

        $this->assign('images',$images);
		$this->assign('news',$news);

		$this->display();	
		
	}









}




?>
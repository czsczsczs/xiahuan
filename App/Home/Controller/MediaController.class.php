<?php
namespace Home\Controller;


/**
 *
 *[媒體中心圖片控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/10
 * @return [type] [description]
 *
 */
class MediaController extends BaseController{


    protected $mediaModel;
	protected $linksModel;

    public function __construct()
    {
    	parent::__construct();
        $this->mediaModel = D('Media');
		$this->linksModel = D('links');
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
		
		
        $count = $this->mediaModel->mediaCount($where);
	
		//分頁
        $show = Pages($count,4);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->mediaModel->mediaList($where,$show['firstRow'],$show['listRows']);
 //友情鏈接
 $links = $this->linksModel->indexLinks($where,50);


		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->assign('links',$links);
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
 //友情鏈接
 $links = $this->linksModel->indexLinks($where,50);

 

		$media = $this->mediaModel->find($id);

		if($media['images']){
            $imagesId = array_filter(explode(',', trim($media['images'])));
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
        $before = $this->mediaModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id')
			        ->select();
        $this->assign('before',$before['0']);

        //获取后一篇
        $where['id'] = array('lt',$id);
        $later = $this->mediaModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id desc')
			        ->select();
		$this->assign('later',$later['0']);

        $this->assign('images',$images);
		$this->assign('media',$media);
		$this->assign('links',$links);
		
	
		$this->display();

	}

	





}




?>

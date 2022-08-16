<?php 
namespace Home\Controller;


/**
 * 
 *[社區特色控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/07
 * @return [type] [description]
 *
 */
class PostsController extends BaseController{


    protected $postsModel;

    public function __construct()
    {
    	parent::__construct();
        $this->postsModel = D('Posts');
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

		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$count = $this->postsModel->postCount($where);
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->postsModel->postList($where,$show['firstRow'],$show['listRows']);
		
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


		$post = $this->postsModel->find($id);

		if($post['images']){
            $imagesId = array_filter(explode(',', trim($post['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }



        //推薦活動
        $where['deleted'] = array('exp', 'IS NULL');
        $where['status'] = 'published';

        //获取前一篇
        $where['id'] = array('gt',$id);
        $before = $this->postsModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id')
			        ->select();
        $this->assign('before',$before['0']);

        //获取后一篇
        $where['id'] = array('lt',$id);
        $later = $this->postsModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id desc')
			        ->select();
		$this->assign('later',$later['0']);
        // $where['recommend'] = 1;
    	// $re_post = $this->postModel->otherpost($where,8);

        // $this->assign('re_post',$re_post);
        $this->assign('images',$images);
		$this->assign('post',$post);

		$this->display();	
		
	}





}




?>
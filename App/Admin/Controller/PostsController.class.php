<?php 
namespace Admin\Controller;


/**
 * 
 *[景點控制器]
 * @author Echo
 * @dateTime 2018/09/07
 * @return [type] [description]
 *
 */
class PostsController extends BaseController{


    protected $postsModel;
	protected $streetModel;

    public function __construct()
    {
    	parent::__construct();
        $this->postsModel = D('Posts');
        $this->streetModel = D('Street');
    }

	/**
	 * 
	 *[列表]
	 * @author Echo
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */
	public function index(){
		//搜索，篩選
		$keyword = I('get.keyword');
		$status = I('get.status');
		$street_id = I('get.street_id');
		//篩選
        if($status){
        	switch ($status) {
	            case 'published':
	                    $where['a.status'] = 'published';
	                break;
	            case 'draft':
	                    $where['a.status'] = 'draft';
	                break;
	            case 'recommend':
	                    $where['a.recommend'] = 1;
	                break;
	        }
        }

        if($street_id){
        	$where['a.street_id'] = $street_id;
        }

        if($keyword){
        	$where['a.title|a.title_cn|a.title_en|a.content|a.content_cn|a.content_en'] = array('like','%'.$keyword.'%');
        }
		$where['a.deleted'] = array('exp','IS NULL');
		
		$count = $this->postsModel->postsCount($where);
		//分頁
        $show = Pages($count,10);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->postsModel->postsList($where,$show['firstRow'],$show['listRows']);
		
		unset($where);
		$where['deleted'] = array('exp','IS NULL'); 
		$street = $this->streetModel->streetList($where);

		$this->assign('street',$street);
		$this->assign('street_id',$street_id);
		$this->assign('status',$status);
		$this->assign('keyword',$keyword);
		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->assign('type',$type);
		$this->display();
	}



	/**
	 * 
	 *[]
	 * @author Echo
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */
	public function add(){
		
		$where['deleted'] = array('exp','IS NULL'); 
		$street = $this->streetModel->streetList($where);
		$this->assign('street',$street);
		$this->display();

	}

	/**
	 * 
	 *[新增]
	 * @author Echo
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */
	public function create(){
		
		$data = I('post.');

		$return = $this->postsModel->postsCreate($data);
		if (!$return){
                $this->error($this->postsModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Posts/index');
            // $this->success('新增成功', U('Active/index',array('type'=>$type)));
        }

	}



	/**
	 * 
	 *[編輯]
	 * @author Echo
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */	
	public function edit($id){
		$post = $this->postsModel->find($id);
		if($post['cover']){
			$post['cover_'] = $post['cover'];
		}
		//圖片集
		if($post['images']){
            $imagesId = array_filter(explode(',', trim($post['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }
        $where['deleted'] = array('exp','IS NULL'); 
		$street = $this->streetModel->streetList($where);
		$this->assign('street',$street);
        $this->assign('images',$images);
		$this->assign('post',$post);
		$this->display();	
		
	}

	/**
	 * 
	 *[更新]
	 * @author Echo
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */	
	public function update($id){

		$data = I('post.');

		$return = $this->postsModel->postsUpdate($id,$data);
		if (!$return){
                $this->error($this->postsModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Posts/index');
            // $this->success('修改成功', U('streetHistory/index',array('type'=>$data['type'])));
        }
		
	}


	/**
	 * 
	 *[刪除]
	 * @author Echo
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */
    public function destroy($id)
    {
        
        $data['deleted'] = time();
        $status = $this->postsModel->where('id='.$id)->save($data);
        if($status){
            $this->ajaxReturn(array('status'=>200));
        }else{
            $this->ajaxReturn(array('status'=>403));
        }
        
    }


    /**
     * 
     *[推薦]
     * @author Echo
     * @dateTime 2018/09/06
     * @return [type] [description]
     *
     */
    public function recommend($id){
    	$streetHistory = $this->postsModel->find($id);
    	if($streetHistory['recommend']){
    		$data['recommend'] = 0;
    		$status = $this->postsModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'cancel'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}else{
    		$data['recommend'] = 1;
    		$data['re_time'] = time();
    		$status = $this->postsModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'recommend'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}
    	
    }

















}




?>
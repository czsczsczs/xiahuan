<?php 
namespace Admin\Controller;


/**
 * 
 *[新聞資訊]
 * @author Echo
 * @dateTime 2018/09/04
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
	 * @author Echo
	 * @dateTime 2018/09/04
	 * @return [type] [description]
	 *
	 */
	public function index(){

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
		$count = $this->newsModel->newsCount($where);
		//分頁
        $show = Pages($count,10);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->newsModel->newsList($where,$show['firstRow'],$show['listRows'],$keyword);
		
		$this->assign('status',$status);
		$this->assign('keyword',$keyword);
		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->display();
	}

	/**
	 * 
	 *[新增]
	 * @author Echo
	 * @dateTime 2018/09/04
	 * @return [type] [description]
	 *
	 */
	public function create(){

		$data = I('post.');
		$return = $this->newsModel->newsCreate($data);
		if (!$return){
                $this->error($this->newsModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('News/index');
            // $this->success('新增成功', U('Active/index'));
        }

	}



	/**
	 * 
	 *[編輯]
	 * @author Echo
	 * @dateTime 2018/09/04
	 * @return [type] [description]
	 *
	 */	
	public function edit($id){


		$news = $this->newsModel->find($id);

		if($news['cover']){
			$news['cover_'] = $news['cover'];
		}

		if($news['images']){
            $imagesId = array_filter(explode(',', trim($news['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }
        $this->assign('images',$images);
		$this->assign('news',$news);
		$this->display();	
		
	}

	/**
	 * 
	 *[更新]
	 * @author Echo
	 * @dateTime 2018/09/04
	 * @return [type] [description]
	 *
	 */	
	public function update($id){

		$data = I('post.');

		$return = $this->newsModel->newsUpdate($id,$data);
		if (!$return){
                $this->error($this->newsModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('News/index');
            // $this->success('修改成功', U('Active/index'));
        }
		
	}


	/**
	 * 
	 *[刪除]
	 * @author Echo
	 * @dateTime 2018/09/04
	 * @return [type] [description]
	 *
	 */
    public function destroy($id)
    {   
        $data['deleted'] = time();
        $status = $this->newsModel->where('id='.$id)->save($data);
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
    	$news = $this->newsModel->find($id);
    	if($news['recommend']){
    		$data['recommend'] = 0;
    		$status = $this->newsModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'cancel'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}else{
    		$data['recommend'] = 1;
    		$data['re_time'] = time();
    		$status = $this->newsModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'recommend'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}
    	
    }


















}




?>
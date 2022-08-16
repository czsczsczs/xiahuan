<?php 
namespace Admin\Controller;


/**
 * 
 *[社區圖片控制器]
 * @author Echo
 * @dateTime 2018/09/06
 * @return [type] [description]
 *
 */
class CommunityImageController extends BaseController{


    protected $communityImageModel;

    public function __construct()
    {
    	parent::__construct();
        $this->communityImageModel = D('CommunityImage');
    }

	/**
	 * 
	 *[列表]
	 * @author Echo
	 * @dateTime 2018/09/06
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
        	$where['title|title_cn|title_en'] = array('like','%'.$keyword.'%');
        }
		$where['deleted'] = array('exp','IS NULL');
		$count = $this->communityImageModel->communityImageCount($where);
		//分頁
        $show = Pages($count,10);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->communityImageModel->communityImageList($where,$show['firstRow'],$show['listRows'],$keyword);
		$this->assign('status',$status);
		$this->assign('keyword',$keyword);
		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->assign('type',$type);
		$this->display();
	}




	/**
	 * 
	 *[新增]
	 * @author Echo
	 * @dateTime 2018/09/06
	 * @return [type] [description]
	 *
	 */
	public function create(){
		
		$data = I('post.');
		$return = $this->communityImageModel->communityImageCreate($data);
		if (!$return){
                $this->error($this->communityImageModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('CommunityImage/index');
            // $this->success('新增成功', U('Active/index',array('type'=>$type)));
        }

	}



	/**
	 * 
	 *[編輯]
	 * @author Echo
	 * @dateTime 2018/09/06
	 * @return [type] [description]
	 *
	 */	
	public function edit($id){
		$communityImage = $this->communityImageModel->find($id);
		if($communityImage['image']){
			$communityImage['image_'] = $communityImage['image'];
		}
		$this->assign('communityImage',$communityImage);
		$this->display();	
		
	}

	/**
	 * 
	 *[更新]
	 * @author Echo
	 * @dateTime 2018/09/05
	 * @return [type] [description]
	 *
	 */	
	public function update($id){

		$data = I('post.');

		$return = $this->communityImageModel->communityImageUpdate($id,$data);
		if (!$return){
                $this->error($this->communityImageModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('CommunityImage/index');
            // $this->success('修改成功', U('Slide/index',array('type'=>$data['type'])));
        }
		
	}


	/**
	 * 
	 *[刪除]
	 * @author Echo
	 * @dateTime 2018/09/06
	 * @return [type] [description]
	 *
	 */
    public function destroy($id)
    {
        
        $data['deleted'] = time();
        $status = $this->communityImageModel->where('id='.$id)->save($data);
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
    	$communityImage = $this->communityImageModel->find($id);
    	if($communityImage['recommend']){
    		$data['recommend'] = 0;
    		$status = $this->communityImageModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'cancel'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}else{
    		$data['recommend'] = 1;
    		$data['re_time'] = time();
    		$status = $this->communityImageModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'recommend'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}
    	
    }

















}




?>
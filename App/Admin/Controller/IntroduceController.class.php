<?php 
namespace Admin\Controller;


/**
 * 
 *[社區介紹控制器]
 * @author Echo
 * @dateTime 2018/09/05
 * @return [type] [description]
 *
 */
class IntroduceController extends BaseController{


    protected $introduceModel;

    public function __construct()
    {
    	parent::__construct();
        $this->introduceModel = D('Introduce');
    }

	/**
	 * 
	 *[列表]
	 * @author Echo
	 * @dateTime 2018/09/05
	 * @return [type] [description]
	 *
	 */
	public function index($type){
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
		$where['type'] = $type;
		$count = $this->introduceModel->introduceCount($where);
		//分頁
        $show = Pages($count,10);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->introduceModel->introduceList($where,$show['firstRow'],$show['listRows'],$keyword);
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
	 * @dateTime 2018/09/05
	 * @return [type] [description]
	 *
	 */
	public function add($type){
		$this->assign('type',$type);
		$this->display();

	}
	/**
	 * 
	 *[新增]
	 * @author Echo
	 * @dateTime 2018/09/05
	 * @return [type] [description]
	 *
	 */
	public function create($type){
		
		$data = I('post.');
		$return = $this->introduceModel->introduceCreate($data);
		if (!$return){
                $this->error($this->introduceModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Introduce/index',array('type'=>$type));
            // $this->success('新增成功', U('Active/index',array('type'=>$type)));
        }

	}



	/**
	 * 
	 *[編輯]
	 * @author Echo
	 * @dateTime 2018/09/05
	 * @return [type] [description]
	 *
	 */	
	public function edit($id){
		$introduce = $this->introduceModel->find($id);
		if($introduce['cover']){
			$introduce['cover_'] = $introduce['cover'];
		}
		//圖片集
		if($introduce['images']){
            $imagesId = array_filter(explode(',', trim($introduce['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }
        $this->assign('images',$images);
		$this->assign('introduce',$introduce);
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

		$return = $this->introduceModel->introduceUpdate($id,$data);
		if (!$return){
                $this->error($this->introduceModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Introduce/index',array('type'=>$data['type']));
            // $this->success('修改成功', U('Introduce/index',array('type'=>$data['type'])));
        }
		
	}


	/**
	 * 
	 *[刪除]
	 * @author Echo
	 * @dateTime 2018/09/05
	 * @return [type] [description]
	 *
	 */
    public function destroy($id)
    {
        
        $data['deleted'] = time();
        $status = $this->introduceModel->where('id='.$id)->save($data);
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
    	$introduce = $this->introduceModel->find($id);
    	if($introduce['recommend']){
    		$data['recommend'] = 0;
    		$status = $this->introduceModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'cancel'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}else{
    		$data['recommend'] = 1;
    		$data['re_time'] = time();
    		$status = $this->introduceModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'recommend'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}
    	
    }

















}




?>
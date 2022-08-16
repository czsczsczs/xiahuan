<?php 
namespace Admin\Controller;


/**
 * 
 *[街道歷史控制器]
 * @author Echo
 * @dateTime 2018/09/07
 * @return [type] [description]
 *
 */
class CultureHeritageController extends BaseController{


    protected $cultureHeritageModel;

    public function __construct()
    {
    	parent::__construct();
        $this->cultureHeritageModel = D('CultureHeritage');
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
		$culture_id = I('get.culture_id');
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

        if($culture_id){
        	$where['culture_id'] = $culture_id;
        }

        if($keyword){
        	$where['title|title_cn|title_en|content|content_cn|content_en'] = array('like','%'.$keyword.'%');
        }
		$where['deleted'] = array('exp','IS NULL');
		
		$count = $this->cultureHeritageModel->cultureHeritageCount($where);
		//分頁
        $show = Pages($count,10);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->cultureHeritageModel->cultureHeritageList($where,$show['firstRow'],$show['listRows']);
		
		unset($where);
		$where['deleted'] = array('exp','IS NULL'); 


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
	 * @dateTime 2018/09/07
	 * @return [type] [description]
	 *
	 */
	public function create(){
		
		$data = I('post.');

		$return = $this->cultureHeritageModel->cultureHeritageCreate($data);
		if (!$return){
                $this->error($this->cultureHeritageModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('CultureHeritage/index');
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
		$cultureHeritage = $this->cultureHeritageModel->find($id);
		if($cultureHeritage['cover']){
			$cultureHeritage['cover_'] = $cultureHeritage['cover'];
		}
		//圖片集
		if($cultureHeritage['images']){
            $imagesId = array_filter(explode(',', trim($cultureHeritage['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }
        $where['deleted'] = array('exp','IS NULL'); 
        $this->assign('images',$images);
		$this->assign('cultureHeritage',$cultureHeritage);
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

		$return = $this->cultureHeritageModel->cultureHeritageUpdate($id,$data);
		if (!$return){
                $this->error($this->cultureHeritageModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('cultureHeritage/index');
            // $this->success('修改成功', U('cultureHeritage/index',array('type'=>$data['type'])));
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
        $status = $this->cultureHeritageModel->where('id='.$id)->save($data);
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
    	$cultureHeritage = $this->cultureHeritageModel->find($id);
    	if($cultureHeritage['recommend']){
    		$data['recommend'] = 0;
    		$status = $this->cultureHeritageModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'cancel'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}else{
    		$data['recommend'] = 1;
    		$data['re_time'] = time();
    		$status = $this->cultureHeritageModel->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'recommend'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}
    	
    }

















}




?>
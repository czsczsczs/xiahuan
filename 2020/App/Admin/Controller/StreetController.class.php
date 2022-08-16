<?php 
namespace Admin\Controller;


/**
 * 
 *[街道控制器]
 * @author Echo
 * @dateTime 2018/09/07
 * @return [type] [description]
 *
 */
class StreetController extends BaseController{


    protected $streetModel;

    public function __construct()
    {
    	parent::__construct();
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
		$where['deleted'] = array('exp','IS NULL');
		
		$count = $this->streetModel->streetCount($where);
		//分頁
        $show = Pages($count,10);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->streetModel->streetList($where,$show['firstRow'],$show['listRows']);
		$this->assign('count',$count);
		$this->assign('list',$list);
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
		$return = $this->streetModel->streetCreate($data);
		if (!$return){
                $this->error($this->streetModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Street/index');
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
		$street = $this->streetModel->find($id);
		if($street['cover']){
			$street['cover_'] = '/community.com'.$street['cover'];
		}
		//圖片集
		if($street['images']){
            $imagesId = array_filter(explode(',', trim($street['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = '/community.com'.$file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }
        $this->assign('images',$images);
		$this->assign('street',$street);
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

		$return = $this->streetModel->streetUpdate($id,$data);
		if (!$return){
                $this->error($this->streetModel->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Street/index',array('type'=>$data['type']));
            // $this->success('修改成功', U('street/index',array('type'=>$data['type'])));
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
        $status = $this->streetModel->where('id='.$id)->save($data);
        if($status){
            $this->ajaxReturn(array('status'=>200));
        }else{
            $this->ajaxReturn(array('status'=>403));
        }
        
    }









}




?>
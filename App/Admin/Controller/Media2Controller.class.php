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
class Media2Controller extends BaseController{


    protected $media2Model;

    public function __construct()
    {
    	parent::__construct();
        $this->media2Model = D('Media2');
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
		$count = $this->media2Model->media2Count($where);
		//分頁
        $show = Pages($count,10);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->media2Model->media2List($where,$show['firstRow'],$show['listRows'],$keyword);

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
		$return = $this->media2Model->media2Create($data);
		if (!$return){
                $this->error($this->media2Model->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Media2/index');
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


		$media2 = $this->media2Model->find($id);

		if($media2['cover']){
			$media2['cover_'] = $media2['cover'];
		}

		if($media2['images']){
            $imagesId = array_filter(explode(',', trim($media2['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }
        $this->assign('images',$images);
		$this->assign('media2',$media2);
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

		$return = $this->media2Model->media2Update($id,$data);
		if (!$return){
                $this->error($this->media2Model->getError());
        }else{
            //验证通过 可以进行其他数据操作
            $this->redirect('Media2/index');
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
        $status = $this->media2Model->where('id='.$id)->save($data);
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
    	$media2 = $this->media2Model->find($id);
    	if($media2['recommend']){
    		$data['recommend'] = 0;
    		$status = $this->media2Model->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'cancel'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}else{
    		$data['recommend'] = 1;
    		$data['re_time'] = time();
    		$status = $this->media2Model->where('id='.$id)->save($data);
    		if($status){
	            $this->ajaxReturn(array('status'=>'recommend'));
	        }else{
	            $this->ajaxReturn(array('status'=>'error'));
	        }
    	}

    }


















}




?>

<?php 
namespace Home\Controller;


/**
 * 
 *[店鋪控制器]
 * @author Echo
 * @dateTime 2018/09/17
 * @return [type] [description]
 *
 */
class ShopController extends BaseController{


    protected $shopModel;
	protected $linksModel;

    public function __construct()
    {
    	parent::__construct();
        $this->shopModel = D('shop');
        $this->streetModel = D('street');
		$this->linksModel = D('links');
    }

	/**
	 * 
	 *[列表]
	 * @author Echo
	 * @dateTime 2018/09/17
	 * @return [type] [description]
	 *
	 */
	public function index($street_id=''){

		$keyword = I('get.keyword');
		$status = I('get.status');
		// $shoptype=I('get.shoptype');
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

        if($street_id){
        	$where['street_id'] = $street_id;
        }

        if($keyword){
        	$where['title|title_cn|title_en|content|content_cn|content_en'] = array('like','%'.$keyword.'%');
        }
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		// $where['shoptype'] = 'discount';
		$count = $this->shopModel->shopCount($where);
		
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->shopModel->shopList($where,$show['firstRow'],$show['listRows']);
		unset($where);
		$where['deleted'] = array('exp','IS NULL'); 
		$street = $this->streetModel->streetList($where);

		//友情鏈接
 		$links = $this->linksModel->indexLinks($where,50);


		$this->assign('street_id',$street_id);
		$this->assign('street',$street);

		$this->assign('status',$status);
		// $this->assign('shoptype',$shoptype);
		$this->assign('keyword',$keyword);
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

		$shop = $this->shopModel->find($id);

		if($shop['images']){
            $imagesId = array_filter(explode(',', trim($shop['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $images[$key]['savepath'] = $file['save_path'];
                $images[$key]['images_id'] = $value;

            }
        }
        $where['deleted'] = array('exp', 'IS NULL');
        $where['status'] = 'published';
		$where['shoptype'] = 'shoptype';
        //获取前一篇
        $where['id'] = array('gt',$id);
        $before = $this->shopModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id')
			        ->select();
        $this->assign('before',$before['0']);

        //获取后一篇
        $where['id'] = array('lt',$id);
        $later = $this->shopModel
        			->field('id,title')
			        ->where($where)
			        ->limit(1)
			        ->order('id desc')
			        ->select();
		$this->assign('later',$later['0']);

		unset($where['id']);
		//獲取6加推薦的發佈店鋪
        $where['recommend'] = 1;
        $re_shop = $this->shopModel
			        ->where($where)
			        ->limit(6)
			        ->order('rand()')
			        ->select();
        $this->assign('re_shop',$re_shop);
        // $this->assign('re_shop',$re_shop);
        $this->assign('images',$images);
		$this->assign('shop',$shop);
		$this->assign('links',$links);

		$this->display();	
		
	}


	/**
	 * 
	 *[分类]
	 * @author Echo
	 * @dateTime 2018/09/17
	 * @return [type] [description]
	 *
	 */
	public function categroy($shoptype='',$street_id=''){

		$keyword = I('get.keyword');
        if(!empty($shoptype)){
        	$where['shoptype'] = ['like',$shoptype];
			
        }
		if($street_id){
			$where['street_id'] = $street_id;
		}
        if($keyword){
        	$where['title|title_cn|title_en|content|content_cn|content_en'] = array('like','%'.$keyword.'%');
        }
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$count = $this->shopModel->shopCount($where);
		
		//分頁
        $show = Pages($count,12);
        $this->assign('page',$show['show']);// 赋值分页输出
        //列表
		$list = $this->shopModel->shopList($where,$show['firstRow'],$show['listRows']);
		unset($where);
		$where['deleted'] = array('exp','IS NULL'); 
		$street = $this->streetModel->streetList($where);
		//友情鏈接
        $links = $this->linksModel->indexLinks($where,50);

		$this->assign('street_id',$street_id);
		$this->assign('street',$street);
		$this->assign('status',$status);
		$this->assign('keyword',$keyword);
		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->assign('links',$links);

		$this->display('index');
	}

















}




?>
<?php
namespace Home\Controller;

/**
 * 
 *[主頁控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/08
 * @return [type] [description]
 *
 */
class IndexController extends BaseController {


    protected $activeModel;
    protected $introduceModel;
    protected $slideModel;
    protected $newsModel;
    protected $communityImageModel;



    public function __construct()
    {
        parent::__construct();
        $this->activeModel = D('active');
        $this->slideModel = D('slide');
        $this->introduceModel = D('introduce');
        $this->communityImageModel = D('communityImage');
        $this->streetHistoryModel = D('streetHistory');
        $this->shopModel = D('shop');
        $this->postsModel = D('posts');
        $this->newsModel = D('news');
    }

	/**
	 * 
	 *[主頁]
	 * @author echo@poptek.cn
	 * @dateTime 2018/09/08
	 * @return [type] [description]
	 *
	 */
    public function index()
    {
        $where['deleted'] = array('exp','IS NULL');
        //$where['recommend'] = 1;
        $where['status'] = 'published';


        //輪播圖
        $slide = $this->slideModel->indexSlide($where,4);

        //活動實況
    	$active = $this->activeModel->indexActive($where);
        //$active = $this->activeModel->getActiveAllByWhere($where);
        //var_dump($active);


        //社區圖片
        $communityImges = $this->communityImageModel->indexComImage($where,10);
        //$communityImges = $this->communityImageModel->getComImageAllByWhere($where);
        //var_dump($communityImges);


        //街道故事
        $streetHistory = $this->streetHistoryModel->indeHistory($where);
        //$streetHistory = $this->streetHistoryModel->getStreetHistoryAllByWhere($where);
        //var_dump($streetHistory);


        //社区美食
        $shop = $this->shopModel->indexShop($where);
        //$shop = $this->shopModel->getShopAllByWhere($where);
        //var_dump($shop);


        //特色景點
        $posts = $this->postsModel->indexPosts($where);
        //$posts = $this->postsModel->getPostAllByWhere($where);
        //var_dump($posts);


        //新聞資訊
        $news = $this->newsModel->indexNews($where);
        //$news = $this->newsModel->getNewsAllByWhere($where);
        //var_dump($news);
        

        $this->assign('slide',$slide);
        $this->assign('news',$news);
        $this->assign('streetHistory',$streetHistory);
        $this->assign('post',$posts);
        $this->assign('shop',$shop);
        $this->assign('active',$active);
        $this->assign('communityImges',$communityImges);
        
        $this->display();
    	
    } 


}
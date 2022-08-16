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
    protected $mediaModel;
    protected $media2Model;
    protected $communityImageModel;
    protected $linksModel;



    public function __construct()
    {
        parent::__construct();
        $this->activeModel = D('active');
        $this->slideModel = D('slide');
        $this->pcbannerModel = D('pCbanner');
        $this->introduceModel = D('introduce');
        $this->communityImageModel = D('communityImage');
        $this->streetHistoryModel = D('streetHistory');
        $this->shopModel = D('shop');
        $this->postsModel = D('posts');
        $this->newsModel = D('news');
        $this->mediaModel = D('media');
        $this->media2Model = D('media2');
        $this->cultureHeritageModel = D('cultureHeritage');
        $this->linksModel = D('links');
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
        $pcbanner = $this->pcbannerModel->indexPCbanner($where,6);

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

        //媒體中心圖片集
        $media = $this->mediaModel->indexMedia($where);
        

        //媒體中心視頻集
        $media2 = $this->media2Model->indexMedia2($where);


        //文化遺產
        $cultureHeritage = $this->cultureHeritageModel->indexHeritage($where);
      
        

        //友情鏈接
        $links = $this->linksModel->indexLinks($where,50);
        

        $this->assign('slide',$slide);
        $this->assign('pcbanner',$pcbanner);
        $this->assign('news',$news);
        $this->assign('media',$media);
        $this->assign('media2',$media2);
        $this->assign('streetHistory',$streetHistory);
        $this->assign('post',$posts);
        $this->assign('shop',$shop);
        $this->assign('active',$active);
        $this->assign('communityImges',$communityImges);
        $this->assign('cultureHeritage',$cultureHeritage);
        $this->assign('links',$links);
        
        $this->display();
    	
    } 


}
<?php
namespace Home\Controller;

/**
 *
 *[搜索控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/08
 * @return [type] [description]
 *
 */
class SearchController extends BaseController {


    protected $linksModel;
    public function __construct()
    {
        parent::__construct();
        $this->activeModel = D('active');
        $this->newsModel = D('news');
        $this->mediaModel = D('media');
        $this->media2Model = D('media2');
        $this->streetHistoryModel = D('streetHistory');
        $this->shopModel = D('shop');
        $this->postsModel = D('posts');
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
        //友情鏈接
        $links = $this->linksModel->indexLinks($where,50);
        $keyword = I('get.keyword');
        $where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
        if($keyword){
            $where['title|title_cn|title_en'] = array('like','%'.$keyword.'%');
        }
        $active = $this->activeModel->activeList($where);
        foreach ($active as $key1 => $value1) {
            $active[$key1]['search_type'] = 'active';
        }
        $streetHistory = $this->streetHistoryModel->streetHistoryList($where);
        foreach ($streetHistory as $key2 => $value2) {
            $streetHistory[$key2]['search_type'] = 'history';
        }
        $posts = $this->postsModel->postList($where);
        foreach ($posts as $key3 => $value3) {
            $posts[$key3]['search_type'] = 'posts';
        }
        $shop = $this->shopModel->shopList($where);
        foreach ($shop as $key4 => $value4) {
            $shop[$key4]['search_type'] = 'shop';
        }
        $news = $this->newsModel->newsList($where);
        foreach ($news as $key5 => $value5) {
            $news[$key5]['search_type'] = 'news';
        }
        $media = $this->mediaModel->mediaList($where);
        foreach ($media as $key6 => $value6) {
            $media[$key6]['search_type'] = 'media';
        }
        $media2 = $this->media2Model->media2List($where);
        foreach ($media2 as $key7 => $value7) {
            $media2[$key7]['search_type'] = 'media2';
        }
        $cultureHeritage = $this->cultureHeritageModel->cultureHeritageList($where);
        foreach ($cultureHeritage as $key8 => $value8) {
            $cultureHeritage[$key8]['search_type'] = 'cultureHeritage';
        }
        $search = array_merge($active,$streetHistory,$shop,$posts,$news,$media,$media2,$cultureHeritage);

        $this->assign('search',$search);
        $this->assign('keyword',$keyword);
        $this->assign('links',$links);

        $this->display();

    }


}
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



    public function __construct()
    {
        parent::__construct();
        $this->activeModel = D('active');
        $this->streetHistoryModel = D('streetHistory');
        $this->shopModel = D('shop');
        $this->postsModel = D('posts');
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
        $search = array_merge($active,$streetHistory,$shop,$posts);

        $this->assign('search',$search);
        $this->assign('keyword',$keyword);
        
        
        $this->display();
    	
    } 


}
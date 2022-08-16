<?php
namespace WechatApi\Controller;


/**
 * 
 *[活動控制器]
 * @author Echo
 * @dateTime 2018/10/17
 * @return [type] [description]
 *
 */
class ActiveController extends BaseController 
{


    protected $activeModel;

    public function __construct()
    {
        parent::__construct();
        $this->activeModel = D('active');
    }

    /**
     * 
     *[活動列表]
     * @author Echo
     * @dateTime 2018/10/17
     * @return [type] [description]
     *
     */
    public function lists()
    {


        $where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
        $list = $this->activeModel->where($where)
            ->order('created desc')
            ->field('id,title,content,cover,lat,lng,created')
            ->select();
        foreach ($list as $key => $value) {
            $list[$key]['cover'] = 'http://macauonline.net/'.$value['cover'];
            $list[$key]['content'] = htmlspecialchars_decode($value['content']);
        }
        return $this->ajaxReturn(success($list));
    }




    /**
     * 
     *[頁面詳情]
     * @author Echo
     * @dateTime 2018/04/21
     * @return [type] [description]
     *
     */
    public function show($id)
    {

        $pageModel = D('page');
        //獲取頭部語言
        $lang = $_SERVER['HTTP_LANGUAGE'];
        // if($lang != 'en'){
        //     $fields = 'name_en,sub_name_en,discription_en,address_en,area_name_en,country_en';
        // }
        
        $page = $pageModel->where('id='.$id)
            ->find();
        $page['content'] = htmlspecialchars_decode($page['content']);
        if($lang === 'en'){
            //替換英文語言
            $page = $pageModel->lang($page);

        }
        return $this->ajaxReturn(success($page));
    }

    
}

<?php
namespace WechatApi\Controller;


/**
 * 
 *[小程序接口]
 * @author Echo
 * @dateTime 2018/10/17
 * @return [type] [description]
 *
 */
class ApiController extends BaseController 
{


    protected $activeModel;
    protected $slideModel;
    protected $pcbannerModel;
    protected $shopModel;
    protected $postModel;
    protected $newsModel;
    protected $streetModel;
    protected $mediaModel;
    protected $media2Model;
    protected $cultureHeritageModel;



    public function __construct()
    {
        parent::__construct();
        $this->activeModel = M('Active');
        $this->shopModel = M('Shop');
        $this->postModel = M('Posts');
        $this->newsModel = M('News');
        $this->streetModel = M('StreetHistory');
        $this->slideModel = M('Slide');
        $this->pcbannerModel = M('PCbanner');
        $this->mediaModel = M('Media');
        $this->media2Model = M('Media2');
        $this->cultureHeritageModel = D('CultureHeritage');
        

    }



    /**
     * 
     *[首頁]
     * @author Echo
     * @dateTime 2018/10/17
     * @return [type] [description]
     *
     */
    public function index()
    {

        $where['recommend'] = 1;
        $where['latitude']  = array('neq',0.0000000);
        $where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
        $activity = $this->activeModel->where($where)
            ->order('created asc')
            ->field('id,title,cover,cover_width_300,latitude,longitude,created')
            ->limit(10)
            ->select();
        foreach ($activity as $key1 => $value1) {
            $activity[$key1]['cover'] = 'http://macauonline.net/xiahuan'.$value1['cover_width_300'];
            $activity[$key1]['created'] = date('Y-m-d',$value1['created']);
            // if($value1['latitude'] == 0.0000000){
            //     $activity[$key1]['latitude'] = 22.1943398;
            //     $activity[$key1]['longitude'] = 113.5496750;
            // }
            $activity[$key1]['category'] = 'activity';
            $activity[$key1]['catename'] = '活動';
        }

        $where['type'] = 'cate';

        $shop = $this->shopModel->where($where)
            ->order('created asc')
            ->field('id,title,cover,cover_width_300,latitude,longitude,created')
            ->limit(10)
            ->select();
        foreach ($shop as $key2 => $value2) {
            $shop[$key2]['cover'] = 'http://macauonline.net/xiahuan'.$value2['cover_width_300'];
            $shop[$key2]['created'] = date('Y-m-d',$value2['created']);
            // if($value2['latitude'] == 0.0000000){
            //     $shop[$key2]['latitude'] = 22.1943398;
            //     $shop[$key2]['longitude'] = 113.5496750;
            // }
            $shop[$key2]['category'] = 'shop';
            $shop[$key2]['catename'] = '店鋪';
        }

        $post = $this->postModel->where($where)
            ->order('created desc')
            ->field('id,title,cover,cover_width_300,latitude,longitude,created')
            ->limit(10)
            ->select();
        foreach ($post as $key3 => $value3) {
            $post[$key3]['cover'] = 'http://macauonline.net/xiahuan'.$value3['cover_width_300'];
            $post[$key3]['created'] = date('Y-m-d',$value3['created']);
            // if($value3['latitude'] == 0.0000000){
            //     $shop[$key3]['latitude'] = 22.1943398;
            //     $shop[$key3]['longitude'] = 113.5496750;
            // }
            $post[$key3]['category'] = 'post';
            $post[$key3]['catename'] = '景點';
        }
        $list = array_merge($activity,$shop,$post);
       
        return $this->ajaxReturn(success($list));
    }


    /**
     * 
     *[活動列表]
     * @author Echo
     * @dateTime 2018/10/17
     * @return [type] [description]
     *
     */
    public function lists($type)
    {

        $where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
        if($type == 'activity'){
            $lists = array();
            $activity = $this->activeModel->where($where)
            ->order('created desc')
            ->select();
            foreach ($activity as $ackey => $acvalue) {
                $activity[$ackey]['type'] = 'activity';
                
            }
            $news = $this->newsModel->where($where)
            ->order('created desc')
            ->select();
            foreach ($news as $nkey => $nvalue) {
                $news[$nkey]['type'] = 'news';

            }
            $media = $this->mediaModel->where($where)
            ->order('created desc')
            ->select();
            foreach ($media as $mkey => $mvalue) {
                $media[$mkey]['type'] = 'media';

            }
            $media2 = $this->media2Model->where($where)
                                    ->order('created desc')
                                    ->select();
                                    foreach ($media2 as $m2key => $m2value) {
                                        $media2[$m2key]['type'] = 'media2';

                                    }
            $lists = array_merge($activity,$news,$media,$media2);
        }elseif($type == 'shop'){
            $count = $this->shopModel->where($where)->count();
            //分頁
            $show = Pages($count,7);
            $lists = $this->shopModel->where($where)
            ->limit($show['firstRow'].','.$show['listRows'])
            ->order('created desc')
            ->select();
        }elseif($type == 'post'){
            $count = $this->postModel->where($where)->count();
            //分頁
            $show = Pages($count,7);

            $lists = $this->postModel->where($where)
            ->limit($show['firstRow'].','.$show['listRows'])
            ->order('created desc')
            ->select();
        }elseif($type == 'street'){
            $count = $this->streetModel->where($where)->count();
            //分頁
            $show = Pages($count,7);
            $lists = $this->streetModel->where($where)
            ->limit($show['firstRow'].','.$show['listRows'])
            ->order('created desc')
            ->select();
        }elseif($type == 'culture'){
            $count = $this->cultureHeritageModel->where($where)->count();
            //分頁
            $show = Pages($count,7);
            $lists = $this->cultureHeritageModel->where($where)
            ->limit($show['firstRow'].','.$show['listRows'])
            ->order('created desc')
            ->select();
        }
        
        foreach ($lists as $key => $value) {
            $lists[$key]['cover'] = 'http://macauonline.net/xiahuan'.$value['cover_width_300'];
            $lists[$key]['content'] = htmlspecialchars_decode($value['content']);
            $lists[$key]['created'] = date('Y-m-d',$value['created']);
            if(empty($value['latitude']) || $value['latitude'] == 0.0000000){
                $lists[$key]['latitude'] = null;
            }
        }

        return $this->ajaxReturn(success($lists));
    }


    /**
     * 
     *[頁面詳情]
     * @author Echo
     * @dateTime 2018/04/21
     * @return [type] [description]
     *
     */
    public function detail()
    {
        //獲取頭部語言
        $type = $_GET['type'];
        $id = $_GET['id'];
        $where['id'] = $id;
        if($type == 'activity'){
           $data = $this->activeModel->where($where)
            ->find();
//             <p style="text-align: center;">
//     <img src="http://macauonline.net/Public/upload/2018-10-27/5bd42a2c0c6fb.JPG" width="600" height="335" style="width: 600px; height: 335px;" border="0" vspace="0" title="" alt=""/>
// </p>
            // $data['cover'] = 'http://macauonline.net'.$data['cover_width_300'];
            /*$data['cover'] = '<p style="text-align: center;"><img src="http://macauonline.net'.$data['cover'].'"  style="100%" border="0" vspace="0" title="" alt=""></p>';
            $data['content'] = $data['cover'] . $data['content'];*/
        }elseif ($type == 'post') {
           $data = $this->postModel->where($where)
            ->find();
            $data['cover'] = '';
        }elseif ($type == 'shop') {
            $data = $this->shopModel->where($where)
            ->find();
            $data['cover'] = 'http://macauonline.net/xiahuan'.$data['cover_width_300'];
        }elseif ($type == 'news') {
            $data = $this->newsModel->where($where)
            ->find();
            $data['cover'] = 'http://macauonline.net/xiahuan'.$data['cover_width_300'];
        }elseif ($type == 'media') {
            $data = $this->mediaModel->where($where)
            ->find();
            $data['cover'] = 'http://macauonline.net/xiahuan'.$data['cover_width_300'];
        }elseif ($type == 'media2') {
            $data = $this->media2Model->where($where)
            ->find();
            $data['cover'] = 'http://macauonline.net/xiahuan'.$data['cover_width_300'];

        }elseif ($type == 'street') {
            $data = $this->streetModel->where($where)
            ->find();
            $data['cover'] = '';
        }elseif ($type == 'culture') {
            $data = $this->cultureHeritageModel->where($where)
            ->find();
            $data['cover'] = '';
        }else{
            $data = '';
        }
        
        
        $data['created'] = date('Y-m-d H:i',$data['created']);
        // $str6 = strtr($str, array("e" => 'www', "s" => "hhh"));
        // $data['content'] = str_replace(array('width: 10%', 'width: 20%','width: 30%','width: 40%','width: 50%','width: 60%','width: 70%','width: 80%','90%'), 'width:100%', $data['content']);
        // $data['content'] = str_replace('src="/','src="http://macauonline.net/',htmlspecialchars_decode($data['content']));
        $data['content'] = str_replace('src="/','src="http://macauonline.net/xiahuan',htmlspecialchars_decode($data['content']));

        //獲取圖片
        if($data['images']){
            $imagesId = array_filter(explode(',', trim($data['images'])));
            $images = array();
            foreach ($imagesId as $key => $value) {
                $file = D('files')->where('id='.$value)->field('save_path,extension')->find();
                $data['image'][$key]['savepath'] = 'http://macauonline.net/xiahuan'.$file['save_path'];
            }
        }

        
        return $this->ajaxReturn(success($data));
    }

    /**
     * 
     *[搜索]
     * @author echo@poptek.cn
     * @dateTime 2018/10/27
     * @return [type] [description]
     *
     */
    public function search($keyword){

        $where['title|content'] = array('like','%'.$keyword.'%');
        $where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
        $news = $this->newsModel->where($where)
            ->order('created desc')
            ->select();
        foreach ($news as $nkey => $nvalue) {
            $news[$nkey]['type'] = 'news';
            $news[$nkey]['type_'] = '新聞資訊';
        }
        $shop = $this->shopModel->where($where)
            ->order('created desc')
            ->select();
        foreach ($shop as $skey => $svalue) {
            $shop[$skey]['type'] = 'shop';
            $shop[$skey]['type_'] = '店鋪';
        }
        $active = $this->activeModel->where($where)
            ->order('created desc')
            ->select();
        foreach ($active as $akey => $avalue) {
            $active[$akey]['type'] = 'activity';
            $active[$akey]['type_'] = '活動';
        }
        $post = $this->postModel->where($where)
            ->order('created desc')
            ->select();
        foreach ($post as $pkey => $pvalue) {
            $post[$pkey]['type'] = 'post';
            $post[$pkey]['type_'] = '景點';
        }
        $street = $this->streetModel->where($where)
            ->order('created desc')
            ->select();
        foreach ($street as $tkey => $tvalue) {
            $street[$tkey]['type'] = 'street';
            $street[$tkey]['type_'] = '街道故事';
        }
        $media = $this->mediaModel->where($where)
                    ->order('created desc')
                    ->select();
                foreach ($media as $mkey => $mvalue) {
                    $media[$mkey]['type'] = 'media';
                    $media[$mkey]['type_'] = '圖片集';
                }
        $media2 = $this->media2Model->where($where)
                    ->order('created desc')
                    ->select();
                foreach ($media2 as $m2key => $mvalue) {
                    $media2[$m2key]['type'] = 'media2';
                    $media2[$m2key]['type_'] = '視頻集';
                }
        $cultureHeritage = $this->cultureHeritageModel->where($where)
                    ->order('created desc')
                    ->select();
                foreach ($cultureHeritage as $lkey => $lvalue) {
                    $cultureHeritage[$lkey]['type'] = 'cultureHeritage';
                    $cultureHeritage[$lkey]['type_'] = '文化遺產';
        }
        $lists = array_merge($news,$shop,$active,$post,$street,$media,$media2,$cultureHeritage);
        foreach ($lists as $key => $value) {
            $lists[$key]['cover'] = 'http://macauonline.net/xiahuan'.$value['cover_width_300'];
            $lists[$key]['content'] = htmlspecialchars_decode($value['content']);
            $lists[$key]['created'] = date('Y-m-d',$value['created']);
        }

        return $this->ajaxReturn(success($lists));
    }

    /**
     * 
     *[列表banner]
     * @author echo@poptek.cn
     * @dateTime 2018/10/27
     * @return [type] [description]
     *
     */
    public function banner($id){
        $where['id'] = $id;
        $where['deleted'] = array('exp','IS NULL');
        $data = $this->slideModel->where($where)
            ->find();
        $data['image'] = 'http://macauonline.net/xiahuan'.$data['image'];
        return $this->ajaxReturn(success($data));
    }

}

<?php 
namespace Home\Controller;


/**
 * 
 *[社區介紹控制器]
 * @author echo@poptek.cn
 * @dateTime 2018/09/10
 * @return [type] [description]
 *
 */
class IntroduceController extends BaseController{


    protected $introduceModel;

    public function __construct()
    {
    	parent::__construct();
        $this->introduceModel = D('Introduce');
    }

	/**
	 * 
	 *[列表]
	 * @author echo@poptek.cn
	 * @dateTime 2018/09/10
	 * @return [type] [description]
	 *
	 */
	public function index(){
		//社區介紹
		$where['deleted'] = array('exp','IS NULL');
        $where['type'] = 'profile';
        $profile = $this->introduceModel->indexProfile($where);

        //古玩
        $where['type'] = 'antique';
        $antique = $this->introduceModel->indexAntique($where);

        //特色景物
        $where['type'] = 'scenery';
        $scenery = $this->introduceModel->indexScenery($where);

		$this->assign('profile',$profile);
		$this->assign('antique',$antique);
		$this->assign('scenery',$scenery);
		$this->display();
	}











}




?>
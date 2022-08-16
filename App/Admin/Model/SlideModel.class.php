<?php
namespace Admin\Model;

use Think\Model;

/**
 * 
 *[首頁輪播圖模型]
 * @author echo@poptek.cn
 * @dateTime 2018/09/06
 * @return [type] [description]
 *
 */
class SlideModel extends Model
{

    /**
     * 自动验证
     */
    protected $_validate = array(
        array('image','require','請上傳一張圖片',1),
        
    );


    /**
     * 
     *自动完成
     *
     */
    protected $_auto = array ( 
        array('created','time',1,'function'),
        array('updated','time',3,'function'),
     );

	public function slideList($where,$firstRow = '',$listRows = '',$keyword = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}


	public function slideCount($where){
		$count = self::where($where)
            ->order('created desc')
            ->count();
        return $count;
	}



	public function slideCreate($data){
		if($data['recommend']){
			$data['re_time'] = time();
		}
		/*自動驗證*/
		$return = self::create($data);

		if(!$return){
			return false;
		}else{
			return self::add($return);
		}
	}


	public function slideUpdate($id,$data){
		if($data['recommend']){
			$data['re_time'] = time();
		}
		/*自動驗證*/
		$return = self::create($data,2);

		if(!$return){
			return false;
		}else{
			return self::where('id='.$id)->save($return);
		}
	}





}


?>
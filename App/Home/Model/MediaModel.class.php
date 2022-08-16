<?php
namespace Home\Model;

use Think\Model;

/**
 *
 *[媒體中心圖片集]
 * @author echo@poptek.cn
 * @dateTime 2018/09/05
 * @return [type] [description]
 *
 */
class MediaModel extends Model
{

	/**
	 *
	 *[]
	 * @author echo@poptek.cn
	 * @dateTime 2018/09/11
	 * @param array $where
	 * @param string $keyword
	 * @return [type] [description]
	 *
	 */
	public function indexMedia($where,$num = ''){
		$Data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('created desc')
            ->select();
        return $Data;
	}

	public function otherMedia($where,$num = ''){
		$Data = self::where($where)
		 	->order('rand()')
			->limit($num)
            ->select();
        return $Data;
	}



	public function mediaList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('grade desc,created desc')
            ->select();
        return $Data;
	}



	public function mediaCount($where){
		$count = self::where($where)
			->order('created desc')			   
            ->count();
        return $count;
	}

public function newMedia(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$count = self::where($where)
            ->order('grade desc,created desc')
            ->limit(3)
            ->select();
        return $count;
	}


	public function getMediaAllByWhere($where){
		$Data = self::where($where)
            ->order('re_time desc')
            ->select();
        return $Data;
	}





}


?>

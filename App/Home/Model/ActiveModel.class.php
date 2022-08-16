<?php
namespace Home\Model;

use Think\Model;

/**
 *
 *[活動模型]
 * @author echo@poptek.cn
 * @dateTime 2018/09/04
 * @return [type] [description]
 *
 */
class ActiveModel extends Model
{

	/**
	 *
	 *[]
	 * @author echo@poptek.cn
	 * @dateTime 2018/09/10
	 * @param array $where 查询条件
	 * @param int $num 查询数量
	 * @return Array
	 *
	 */
	public function indexActive($where,$num = ''){
		$data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('created desc')
            ->select();
        return $data;
	}


	public function otherActive($where,$num = ''){
		$data = self::where($where)
		 	->order('rand()')
			->limit($num)
            ->select();
        return $data;
	}


	public function activeList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('grade desc,created desc')
            ->select();
        return $Data;
	}


	public function activeCount($where){
		$count = self::where($where)
            ->order('created desc')
            ->count();
        return $count;
	}

	public function newActive(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$count = self::where($where)
            ->order('created desc')
            ->limit(4)
            ->select();
        return $count;
	}

	public function getActiveAllByWhere($where){
		$Data = self::where($where)
            ->order('re_time desc')
            ->select();
        return $Data;
	}


}


?>

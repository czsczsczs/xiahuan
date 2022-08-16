<?php
namespace Home\Model;

use Think\Model;

/**
 * 
 *[街道歷史]
 * @author echo@poptek.cn
 * @dateTime 2018/09/04
 * @return [type] [description]
 *
 */
class StreetHistoryModel extends Model
{

	public function indeHistory($where,$num=''){
		$Data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('sort desc,created desc')
            ->select();
        return $Data;
	}


	public function streetHistoryList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('grade desc,created desc')
            ->select();
        return $Data;
	}


	public function streetHistoryCount($where){
		$count = self::where($where)
            ->count();
        return $count;
	}



	public function rightStreetHistory(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$data = self::where($where)
				->order('rand()')
				->limit(1)
     			->select();
     	$data[0]['type'] = 'history';
        return $data;
	}

	public function getStreetHistoryAllByWhere($where){
		$Data = self::where($where)
            ->order('created desc')
            ->select();
        return $Data;
	}



}


?>
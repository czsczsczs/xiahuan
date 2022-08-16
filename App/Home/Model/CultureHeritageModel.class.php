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
class CultureHeritageModel extends Model
{

	public function indexHeritage($where,$num=''){
		$Data = self::where($where)
			->limit($num)
            ->order('sort desc,created desc')
            ->select();
        return $Data;
	}


	public function cultureHeritageList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('grade desc,created desc')
            ->select();
        return $Data;
	}


	public function cultureHeritageCount($where){
		$count = self::where($where)
            ->count();
        return $count;
	}



	public function rightCultureHeritage(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$data = self::where($where)
				->order('rand()')
				->limit(1)
     			->select();
     	$data[0]['type'] = 'culturehistory';
        return $data;
	}

	public function getCultureHeritageAllByWhere($where){
		$Data = self::where($where)
            ->order('created desc')
            ->select();
        return $Data;
	}



}


?>
<?php
namespace Home\Model;

use Think\Model;

/**
 * 
 *[社區介紹模型]
 * @author echo@poptek.cn
 * @dateTime 2018/09/05
 * @return [type] [description]
 *
 */
class IntroduceModel extends Model
{

	public function indexProfile($where){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->find();
        return $Data;
	}

	public function indexAntique($where){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}
	
	public function indexScenery($where){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}


	public function introduceCount($where){
		$count = self::where($where)
            ->order('created desc')
            ->count();
        return $count;
	}





}


?>
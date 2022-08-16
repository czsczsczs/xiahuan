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
class Media2Model extends Model
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
	public function indexMedia2($where,$num=''){
		$Data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('created desc')
            ->select();
        return $Data;
	}

	public function media2List($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}


	public function media2Count($where){
		$count = self::where($where)
            ->count();
        return $count;
	}

public function newMedia2(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$count = self::where($where)
            ->order('created desc')
            ->limit(3)
            ->select();
        return $count;
	}


	public function getMedia2AllByWhere($where){
		$Data = self::where($where)
            ->order('re_time desc')
            ->select();
        return $Data;
	}





}


?>

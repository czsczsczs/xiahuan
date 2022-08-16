<?php
namespace Home\Model;

use Think\Model;

/**
 * 
 *[社區圖片模型]
 * @author echo@poptek.cn
 * @dateTime 2018/09/06
 * @return [type] [description]
 *
 */
class CommunityImageModel extends Model
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
	public function indexComImage($where,$num=''){
		$Data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('created desc')
            ->select();
        return $Data;
	}

	public function getComImageAllByWhere($where){
		$Data = self::where($where)
            ->order('re_time desc')
            ->select();
        return $Data;
	}



}


?>
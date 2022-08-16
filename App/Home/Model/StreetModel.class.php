<?php
namespace Home\Model;

use Think\Model;

/**
 * 
 *[街道]
 * @author echo@poptek.cn
 * @dateTime 2018/09/04
 * @return [type] [description]
 *
 */
class StreetModel extends Model
{

	public function streetList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}


}


?>
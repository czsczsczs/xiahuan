<?php
namespace Home\Model;

use Think\Model;

/**
 * 
 *[首頁輪播圖模型]
 * @author echo@poptek.cn
 * @dateTime 2018/09/17
 * @return [type] [description]
 *
 */
class PCbannerModel extends Model
{


	public function indexPCbanner($where,$num){
		$Data = self::where($where)
			->limit($num)
            ->order('re_time desc')
            ->select();
        return $Data;
	}






}


?>
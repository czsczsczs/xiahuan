<?php
namespace Home\Model;

use Think\Model;

/**
 *
 *[新聞資訊]
 * @author echo@poptek.cn
 * @dateTime 2018/09/05
 * @return [type] [description]
 *
 */
class NewsModel extends Model
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
	public function indexNews($where,$num=''){
		$Data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('created desc')
            ->select();
        return $Data;
	}

	public function newsList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('grade desc,created desc')
            ->select();
        return $Data;
	}


	public function newsCount($where){
		$count = self::where($where)
            ->count();
        return $count;
	}

	public function rightNews(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$data = self::where($where)
				->order('rand()')
     			->limit(1)
     			->select();
     	$data[0]['type'] = 'news';
        return $data;
	}
	public function newNews(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$count = self::where($where)
            ->order('grade desc,created desc')
            ->limit(4)
            ->select();
        return $count;
	}
	public function getNewsAllByWhere($where){
		$Data = self::where($where)
            ->order('re_time desc')
            ->select();
        return $Data;
	}





}


?>

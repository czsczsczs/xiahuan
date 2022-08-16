<?php
namespace Home\Model;

use Think\Model;

/**
 * 
 *[社區特色模型]
 * @author echo@poptek.cn
 * @dateTime 2018/09/07
 * @return [type] [description]
 *
 */
class PostsModel extends Model
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
	public function indexPosts($where,$num=''){
		$Data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('created desc')
            ->select();
    
        return $Data;
	}


	public function postList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('grade desc,created desc')
            ->select();
        return $Data;
	}


	public function postCount($where){
		$count = self::where($where)
            ->count();
        return $count;
	}

	public function rightPost(){
		$where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$data = self::where($where)
				->order('rand()')
     			->limit(1)
     			->select();
     	$data[0]['type'] = 'posts';
        return $data;
	}

	public function getPostAllByWhere($where){
		$Data = self::where($where)
            ->order('re_time desc')
            ->select();
        return $Data;
	}


}


?>
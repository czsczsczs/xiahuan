<?php
namespace Admin\Model;

use Think\Model;

/**
 * 
 *[街道歷史]
 * @author echo@poptek.cn
 * @dateTime 2018/09/04
 * @return [type] [description]
 *
 */
class PostsModel extends Model
{

    /**
     * 自动验证
     */
    protected $_validate = array(
        array('title','require','標題必須填寫',1),
        array('street_id','require','請選擇所屬街道',1),
        
    );


    /**
     * 
     *自动完成
     *
     */
    protected $_auto = array ( 
        array('created','time',1,'function'),
        array('updated','time',3,'function'),
     );


	public function postsList($where,$firstRow = '',$listRows = ''){
		$Data = M('Posts as a')
            ->join(" LEFT JOIN __STREET__ as b ON a.street_id = b.id")
            ->where($where)
            ->field("a.*,b.name as street_name")
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}


	public function postsCount($where){
		$count = M('Posts as a')
            ->join(" LEFT JOIN __STREET__ as b ON a.street_id = b.id")
            ->where($where)
            ->count();
        return $count;
	}



	public function postsCreate($data){
		$data['images'] = implode(",", $data['files']['file_id']);
		if($data['recommend']){
			$data['re_time'] = time();
		}
		/*自動驗證*/
		$return = self::create($data);

		if(!$return){
			return false;
		}else{
			//压缩图片
			if($return['cover']){
				$return['cover_width_300'] = resize($return['cover']);
			}
			return self::add($return);
		}
	}


	public function PostsUpdate($id,$data){
		$data['images'] = implode(",", $data['files']['file_id']);
		$data['start_time'] = strtotime($data['start_time']);
		$data['end_time'] = strtotime($data['end_time']);
		if($data['recommend']){
			$data['re_time'] = time();
		}
		/*自動驗證*/
		$return = self::create($data,2);

		if(!$return){
			return false;
		}else{
			//压缩图片
			if($return['cover']){
				$return['cover_width_300'] = resize($return['cover']);
			}
			return self::where('id='.$id)->save($return);
		}
	}





}


?>
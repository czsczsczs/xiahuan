<?php
namespace Admin\Model;

use Think\Model;

/**
 * 
 *[資訊]
 * @author echo@poptek.cn
 * @dateTime 2018/09/04
 * @return [type] [description]
 *
 */
class NewsModel extends Model
{

    /**
     * 自动验证
     */
    protected $_validate = array(
        array('title','require','標題必須填寫',1),
        
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

	public function newsList($where,$firstRow = '',$listRows = '',$keyword = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}


	public function newsCount($where){
		$count = self::where($where)
            ->order('created desc')
            ->count();
        return $count;
	}



	public function newsCreate($data){
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


	public function newsUpdate($id,$data){
		$data['images'] = implode(",", $data['files']['file_id']);
		$data['start_time'] = strtotime($data['start_time']);
		$data['end_time'] = strtotime($data['end_time']);
		if($data['recommend']){
			$data['re_time'] = time();
		}
		if($data['lat'] == ''){
			$data['lat'] == null;
			$data['lng']== null;
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
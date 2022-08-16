<?php
namespace Admin\Model;

use Think\Model;

/**
 * 
 *[活動模型]
 * @author echo@poptek.cn
 * @dateTime 2018/09/04
 * @return [type] [description]
 *
 */
class ActiveModel extends Model
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

	public function activeList($where,$firstRow = '',$listRows = '',$keyword = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('created desc')
            ->select();
        return $Data;
	}


	public function activeCount($where){
		$count = self::where($where)
            ->order('created desc')
            ->count();
        return $count;
	}



	public function activeCreate($data){
		$data['images'] = implode(",", $data['files']['file_id']);
		$data['content'] = htmlspecialchars_decode($data['content']);

		if($data['lat'] == ''){
			unset($data['lat']);
			unset($data['lng']);
		}
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


	public function activeUpdate($id,$data){
		$data['images'] = implode(",", $data['files']['file_id']);
		
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
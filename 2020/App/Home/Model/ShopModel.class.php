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
class ShopModel extends Model
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
	public function indexShop($where,$num=''){
		$Data = self::where($where)
			->limit($num)
            //->order('re_time desc')
            ->order('created desc')
            ->select();
        return $Data;
	}

	public function shopList($where,$firstRow = '',$listRows = ''){
		$Data = self::where($where)
			->limit($firstRow.','.$listRows)
            ->order('grade desc,created desc')
            ->select();
        return $Data;
	}


	public function shopCount($where){
		$count = self::where($where)
            ->count();
        return $count;
	}

	public function rightShop(){
        $where['deleted'] = array('exp','IS NULL');
        $where['status'] = 'published';
		$data = self::where($where)
				->order('rand()')
     			->limit(1)
     			->select();
     	$data[0]['type'] = 'shop';
        return $data;
	}

	public function getShopAllByWhere($where){
		$Data = self::where($where)
            ->order('re_time desc')
            ->select();
        return $Data;
	}

	public function randomData($where,$num){
        $ids = self::where($where)->field('id')->select();//獲取所有的數據id
        //echo "ids=>";var_dump($ids);
        $r = array_rand($ids,6);
        $rids = "0";
        foreach ($r as $key => $value) {
        	$rids .= ",".$value;
        }
        var_dump($rids);
        $where[] = ['id','in',$rids];
        var_export($where);
        echo "data=>";
        $data = self::whereIn('id',[15,44,52,71,73,111])->buildSql();
        var_export($data);die;
        return $data;
	}

	//随机获取指定表指定条件指定数量的数据
	/*public function randomData($table,$where,$num){
        $countcus = db($table)->where($where)->count();
        $min = db($table)->where($where)->min('id');
        $max = $min+$countcus;
        if($countcus < $num){$num = $countcus;}
        $i = 1;
        $flag = 0;
        $ary = array();
        while($i<=$num){
            $rundnum = rand($min, $max);
            if($flag != $rundnum){
                if(!in_array($rundnum,$ary)){
                    $ary[] = $rundnum;
                    $flag = $rundnum;
                }else{
                    $i--;
                }
                $i++;
            }
        }
        $where[] = ['id','in',$arr];
        $data = db($table)->where($where)->select();
        return $data;
	}*/
}


?>
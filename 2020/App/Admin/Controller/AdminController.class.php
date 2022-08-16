<?php
namespace Admin\Controller;


class AdminController extends BaseController 
{

    /**
     * 
     *[管理員管理]
     * @author Echo
     * @dateTime 2018/05/28
     * @return [type] [description]
     *
     */
    public function index()
    {

        $adminModel = D('Admin');
        //分頁
        $where['deleted'] = array('exp','IS NULL');
        $count = $adminModel->where($where)->count();
        $Page  = new \Think\Page($count,10);
        $Page->lastSuffix=false;
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $show = $Page->show();
        $this->assign('page',$show);// 赋值分页输出

        $list = $adminModel->where($where)
                ->order('id desc')
                ->limit($Page->firstRow.','.$Page->listRows)
                ->select();
        foreach ($list as $key => $value) {
            switch ($value['is_admin']) {
                case 1:
                        $list[$key]['is_admin_'] = '超級管理員';
                    break;
                case 2:
                        $list[$key]['is_admin_'] = '普通管理員';
                    break;
                
            }
        }
        $this->assign('list',$list);
    	$this->display();
        
    }

    /**
     * 
     *[添加管理員]
     * @author Echo
     * @dateTime 2018/05/28
     * @return [type] [description]
     *
     */
    public function add()
    {
        $adminModel = D('Admin');
        if(IS_POST){
            $params = I('post.');
            $where['deleted'] = array('exp','IS NULL');
            $where['username'] = $params['username'];
            $admin = $adminModel->where($where)->find();
            if($admin){
               $this->error('用戶名已存在'); 
            }
            //驗證并獲取
            $data = $adminModel->validate($params);

            if (!$data){
                $this->error($adminModel->getError());
            }else{
                //验证通过 可以进行其他数据操作
                $adminModel->add($data);
                $this->success('新增管理員成功', U('Admin/index'));
            }
        }else{
            $this->display();
        }
    }



    /**
     * 
     *[修改]
     * @author Echo
     * @dateTime 2018/04/10
     * @return [type] [description]
     *
    */
    public function edit($id)
    {
        $adminModel = D('Admin');
        if(IS_POST){
            $params = I('post.');
            $where['deleted'] = array('exp','IS NULL');
            $where['username'] = $params['username'];
            $where['id']  = array('neq',$id);
            $admin = $adminModel->where($where)->find();
            if($admin){
               $this->error('用戶名已存在'); 
            }
            //驗證并獲取
            $data = $adminModel->validate($params);

            if (!$data){
                $this->error($adminModel->getError());
            }else{
                //验证通过 可以进行其他数据操作
                $adminModel->where('id='.$id)->save($data);
                $this->success('修改成功', U('Admin/index'));
            }
        }else{
            $admin = $adminModel->find($id);
            $this->assign('admin',$admin);

            $this->display();
        }
            
    }



    /**
     * 
     *[軟刪除]
     * @author Echo
     * @dateTime 2018/05/22
     * @return [type] [description]
     *
    */
    public function destroy()
    {
        $id = I('post.id');
        $adminModel = D('Admin');
        $admin = $adminModel->where('id='.$id)->find();
        if($this->ext_user['is_admin'] != 1){
            $msg['status'] = 403;
            $msg['message'] = '沒有權限刪除用戶';
            $this->ajaxReturn($msg);
            die();
        }

        if($id == $this->ext_user['id']){
            $msg['status'] = 405;
            $msg['message'] = '不能刪除自己';
            $this->ajaxReturn($msg);
            die();
        }
        
        $data['deleted'] = time();
        $status = $adminModel->where('id='.$id)->save($data);
        if($status){
            $this->ajaxReturn(array('status'=>200));
        }else{
            $this->ajaxReturn(array('status'=>403));
        }
        
    }






}

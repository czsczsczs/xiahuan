<?php
namespace Admin\Controller;

/**
 * 
 *[文件上傳]
 * @author Echo
 * @dateTime 2018/09/10
 * @return [type] [description]
 *
 */
class UploadController extends BaseController 
{


    public function upload(){
        $date = date('Y/m',time());
        $upload = new \Think\Upload();// 实例化上传类
        
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      './Public/'; // 设置附件上传根目录
        $upload->savePath  =      'upload/'; // 设置附件上传根目录
        $upload->saveName = array('uniqid','');
        // 上传单个文件 
        $info   =   $upload->uploadOne($_FILES['file']);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            // $fileModel = D('files');
            $savepath = '/xiahuan/2020/Public/'.$info['savepath'].$info['savename'];
            $params = array(
                'save_name' => $info['savename'],
                'save_path' => $savepath,
                'extension' => $info['ext'],
                'mime' => $info['type'],
                'size' => $info['size'],
            );
            $photo = '/xiahuan/2020/Public/'.$info['savepath'].$info['savename'];
            $file_id = M('files')->add($params);
            $data = array('code'=>1,'message'=>'成功','photo'=>$photo,'org_name'=>$info['name'],'file_id'=>$file_id,'savepath' => $savepath);
            
            return $this->ajaxReturn($data);
        }
    }

}

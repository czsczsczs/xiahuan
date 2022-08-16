<?php

/**
 * 功能：邮件发送函数
 * @param string $to 目标邮箱
 * @param string $subject 邮件主题（标题）
 * @param string $to 邮件内容
 * @return bool true
 */

function sendMail($to, $subject, $content) {
    vendor('PHPMailer.class#smtp'); 
    vendor('PHPMailer.class#phpmailer');    //注意这里的大小写哦，不然会出现找不到类，PHPMailer是文件夹名字，class#phpmailer就代表class.phpmailer.php文件名
    $mail = new PHPMailer();
    // 装配邮件服务器
    if (C('MAIL_SMTP')) {
        $mail->IsSMTP();
    }
    $mail->Host = C('MAIL_HOST');  //这里的参数解释见下面的配置信息注释
    $mail->SMTPAuth = C('MAIL_SMTPAUTH');  
    $mail->Username = C('MAIL_USERNAME');
    $mail->Password = C('MAIL_PASSWORD');
    $mail->Port     = 25; 
    $mail->SMTPSecure = C('MAIL_SECURE');
    $mail->CharSet = C('MAIL_CHARSET');
    // 装配邮件头信息
    $mail->From = C('MAIL_USERNAME');
    $mail->AddAddress($to);
    $mail->FromName = C('MAIL_FROMNAME');
    $mail->IsHTML(C('MAIL_ISHTML'));
    // 装配邮件正文信息
    $mail->Subject = $subject;
    $mail->Body = $content;
    // 发送邮件
    return $mail->Send() ? true : false;
}


function Pages($count,$page = 10){
        //分頁
        $Page  = new \Think\Page($count,$page);
        $Page->lastSuffix=false;
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末頁');
        $Page->setConfig('first','首頁');
        $show['firstRow'] = $Page->firstRow;
        $show['listRows'] = $Page->listRows;
        $show['show'] = $Page->show();
        return $show;
}


function error($status,$message = '',$data = array()){
    switch ($status) {
        case '410':
                return array(
                    'status_code' => 410,
                    'message'  => '非法操作',
                );
            break;
        case '409':
                return array(
                    'status_code' => 409,
                    'message'  => '查無數據',
                );
            break;
    }
    
}


function success($data = array()){
    $return['status_code'] = 200;
    $return['data'] = $data;
    return $return;
    
}





function random ($length = 6, $numeric = 0)
    {
        PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
        if($numeric)
        {
            $hash = sprintf('%0' . $length . 'd', mt_rand(0, pow(10, $length) - 1));
        }
        else
        {
            $hash = '';
            $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
            $max = strlen($chars) - 1;
            for($i = 0; $i < $length; $i ++)
            {
                $hash .= $chars[mt_rand(0, $max)];
            }
        }
        return $hash;
    }



    /**
     * 图片压缩，比例不够部分留白
     * @param  [type]  $src          图片地址
     * @param  integer $width_value  压缩后的图片宽度
     * @param  integer $height_value 压缩后的图片高度
     * @return str 生成的图片地址
     */
    function resize($src, $width_value=300, $height_value='') {
        var_dump("d");
        $temp = pathinfo($src);
        $filename = $temp['filename'].'_width_300.jpg';
        $dir = $temp["dirname"];    //文件所在的文件夹     
        $savepath = '..'.$dir.'/'.$filename; //缩略图保存路径  

        $savepath_= $dir.'/'.$filename;

        //获取图片的基本信息
        $info = getimagesize('http://macauonline.net/xiahuan/2020'.$src);
        
        $width = $info[0];      //获取图片宽度     
        $height = $info[1];     //获取图片高度 
        
        $rate = $width_value/$info[0]; //计算绽放比例
        $height_value = floor($info[1]*$rate);//根據寬度大小，高度等比縮放

        if(($width/$height) >= ($width_value/$height_value)){ //宽度优先
            $w_mid = $width_value;                        //压缩后图片的宽度
            $h_mid = intval($width_value * $height/$width);//等比缩放图片高度       
            $mid_x = 0;
            $mid_y = intval(($height_value-$h_mid)/2);
        }else{                                        //高度优先
            $w_mid = intval($height_value * $width/$height);                            //压缩后图片的宽度
            $h_mid = $height_value;//等比缩放图片高度               
            $mid_x = intval(($width_value-$w_mid)/2);
            $mid_y = 0;
        }
        $temp_img = imagecreatetruecolor($width_value , $height_value);     //创建画布 
        $white = imagecolorallocate($temp_img, 255, 255, 255);
        imagefill($temp_img, 0, 0, $white);     
        $im = create('http://macauonline.net/xiahuan/2020'.$src);
        imagecopyresampled($temp_img, $im, $mid_x, $mid_y, 0, 0, $w_mid, $h_mid, $width, $height);
        imagejpeg($temp_img,$savepath, 100);
        imagedestroy($im);  
     
        return $savepath_;
    }
     
    /**
     * 创建图片，返回资源类型 
     * @param  string $src 图片路径   
     * @return resource $im 返回资源类型   
     */
    function create($src) {
        $info = getimagesize($src);
        switch ($info[2]) {
            case 1:
                $im = imagecreatefromgif($src);
                break;
            case 2:
                $im = imagecreatefromjpeg($src);
                break;
            case 3:
                $im = imagecreatefrompng($src);
                break;
        }
        return $im;
    }



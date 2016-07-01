<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2016/6/22
 * Time: 10:10
 */
namespace Home\Model\ManageFile;
use Think\Model;
/**
 * 文件操作类
 * */
class ManageFile extends Model{
    public function __construct()
    {   $user='admin';
        $rootPath=str_replace("/","\\",__ROOT__."UserFile"."\\".$user."\\");
        return $rootPath;
    }
    /**
     * 遍历目录(最外层)
     * $params 目录路径$path
     * retuen array
     *
     * */
    public function getDir($path=null){
        $basePath=$this->__construct();
        $path= $path ? $basePath.$path."\\" :$this->__construct();
        if (is_dir($path)) {
            $hander=opendir($path);
            while(($item=readdir($hander))!==false ){
                if($item!="." && $item!=".."){
                    $allPath=$path."\\".$item;
                    if(is_file($allPath)){ //文件
                        $encoding = mb_detect_encoding($item, array('UTF-8','ASCII','GB2312','GBK','BIG5'));//转码
                        $item = mb_convert_encoding($item, 'utf-8', $encoding);
                        $arr['file'][]=array('name'=>$item,'attr'=>$this->getFileAttr($allPath));
                    }
                    elseif(is_dir($allPath)){ //目录
                        $encoding = mb_detect_encoding($item, array('UTF-8','ASCII','GB2312','GBK','BIG5'));
                        $item = mb_convert_encoding($item, 'utf-8', $encoding);
                        $arr['dir'][]=array('name'=>$item ,'attr'=>$this->getFileAttr($allPath));
                    }
                }
            }
            closedir($hander);
            return $arr;

        }

    }
    /**
     * 获取文件属性
     * $param 文件(文件夹)路径
     * trturn array
     *
     * */
    public function getFileAttr($path){
        $arr['type']=filetype($path);//文件类型
        $arr['size']=$this->transByte(filesize($path));//文件大小
        $arr['readable']=is_readable($path)?true:false;//文件是否可读
        $arr['writable']=is_writable($path)?true:false;//文件是否可写
        $arr['executable']=is_executable($path)?true:false;//文件是可执行
        $arr['ctime']=date("Y-m-d H:i:s",filectime($path));//创建时间
        $arr['mtime']=date("Y-m-d H:i:s",filemtime($path));//修改时间
        $arr['atime']=date("Y-m-d H:i:s",fileatime($path));//访问时间
        return $arr;
        
    }
    /**
     *转换字节
     *$params= number fileSizeByte
     *return string
     *
     */
    public function transByte($size){
        $arr=array("Byte","KB","Mb","GB","TB","EB");
        $i=0;
        while($size>=1024){
            $size/=1024;
            $i++;
        }
        return round($size,2).$arr[$i];

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2016/6/22
 * Time: 10:10
 */
namespace Home\Model\ManageFile;
use Think\Model;
class ManageFile extends Model{
    public function __construct()
    {   $user='admin';
        $rootPath=str_replace("/","\\",__ROOT__."UserFile"."\\".$user."\\");
        return $rootPath;
    }
    /*遍历目录*/
    public function getDir($path=null){
        $path= $path ? $path  :$this->__construct();
        if (is_dir($path)) {
            $hander=opendir($path);
            while(($item=readdir($hander))!==false ){
                if($item!="." && $item!=".."){
                    if(is_file($path."\\".$item)){
                        $arr['file'][]=$item;
                    }
                    elseif(is_dir($path."\\".$item)){
                        $arr['dir'][]=$item;
                    }
                }
            }
            closedir($hander);
            return $arr;

        }

    }
}
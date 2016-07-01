<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model;


class IndexController extends Controller {


    public function index()
    {
        if (IS_AJAX) {
            switch (I('action')) {
                case 'file':
                    $this->manageFile();
                    break;
            }
        }
        $this->display();
    }

    public function manageFile(){
        $new= new \Home\Model\ManageFile\ManageFile();
        $path=I('path')?I('path'):null;
        $data=$new->getDir($path);
        $this->assign('dirTable',$data['dir']);
        $this->assign('fileTable',$data['file']);
        $content = $this->fetch("./Layout/temp_file_table" );
        $this->ajaxReturn($content, 'json');


    }
}

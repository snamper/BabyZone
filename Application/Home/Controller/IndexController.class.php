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

        echo $new->getDir();
    }
}

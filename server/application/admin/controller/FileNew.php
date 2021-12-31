<?php
namespace app\admin\controller;

use app\admin\controller\AdminBase;
use app\admin\logic\FileNewLogic;
use app\common\model\FileCate;
use app\admin\validate\FileCateNew as FileCateNewValidate;
use app\common\server\FileServer;

class FileNew extends AdminBase
{
    public function lists()
    {
        $get = $this->request->get();
        $get['type'] = $get['type'] ?? 'image';
        $get['partner_id'] = $get['partner_id'] ?? 0;
        $get['page_no'] = $get['page_no'] ?? 1;
        $get['page_size'] = $get['page_size'] ?? 20;
        $get['cate_id'] = $get['cate_id'] ?? 0;
        switch($get['type']) {
            case 'video':
                $title = '上传视频';
                break;
            case 'image':
                $title = '上传图片';
                break;
            case 'other':
                $title = '上传';
                break;
        }
        $menu = FileCate::getTreeMenu($get);
        $data = FileNewLogic::lists($get);
        $this->assign('type', $get['type']);
        $this->assign('title', $title);
        $this->assign('menu', json_encode($menu));
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function pagelists()
    {
        $get = $this->request->get();
        $get['type'] = $get['type'] ?? 'image';
        $get['partner_id'] = $get['partner_id'] ?? 0;
        $get['page_no'] = $get['page_no'] ?? 1;
        $get['page_size'] = $get['page_size'] ?? 20;
        $get['cate_id'] = $get['cate_id'] ?? 0;
        $data = FileNewLogic::pagelists($get);
        return $this->_success('', $data);
    }

    public function addCate()
    {
        if($this->request->isPost()) {
            $post = $this->request->post();
            $validate = new FileCateNewValidate;
            if(!$validate->check($post)) {
                return $this->_error($validate->getError());
            }
            $result = FileNewLogic::addCate($post);
            if($result['flag']) {
                return $this->_success($result['msg']);
            }
            return $this->_error($result['msg']);
        }
        $get = $this->request->get();
        $get['type'] = $get['type'] ?? 'image';
        $get['partner_id'] = $get['partner_id'] ?? 0;
        $menu = FileCate::getMenu($get);
        $this->assign('menu', $menu);
        $this->assign('type', $get['type']);
        return $this->fetch();
    }

    public function editCate()
    {
        if($this->request->isPost()) {
            $post = $this->request->post();
            $validate = new FileCateNewValidate;
            if(!$validate->check($post)) {
                return $this->_error($validate->getError());
            }
            $result = FileNewLogic::editCate($post);
            if($result['flag']) {
                return $this->_success($result['msg']);
            }
            return $this->_error($result['msg']);
        }

        $get = $this->request->get();
        $get['type'] = $get['type'] ?? 'image';
        $get['partner_id'] = $get['partner_id'] ?? 0;
        $cate = FileCate::getCateById($get['id']);
        $menu = FileCate::getMenu($get);
        $this->assign('menu', $menu);
        $this->assign('type', $get['type']);
        $this->assign('cate', $cate);
        return $this->fetch();
    }

    public function delCate()
    {
        $post = $this->request->post();
        $result = FileNewLogic::delCate($post);
        if($result['flag']) {
            return $this->_success($result['msg']);
        }
        return $this->_error($result['msg']);
    }

    /**
     * 新视频上传
     */
    public function videoNew(){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $result = FileServer::videoNew($post['cate_id']);
            $this->successOrError($result);
        }
    }

    public function showVideo()
    {
        $uri = $this->request->get('uri');
        $this->assign('uri', $uri);
        return $this->fetch();
    }

    public function delFile()
    {
        $post = $this->request->post();
        $result = FileNewLogic::delFile($post);
        if($result) {
            return $this->_success('删除成功');
        }
        return $this->_error('删除失败');
    }
}
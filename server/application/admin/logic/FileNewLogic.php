<?php
namespace app\admin\logic;

use app\common\model\FileCate;
use app\common\server\UrlServer;
use think\Db;

class FileNewLogic
{
    public static function lists($get)
    {
        $field = 'id,name,uri';
        $where = [
            'del' => 0,
            'partner_id' => $get['partner_id'],
            'type' => FileCate::getTypeNumber($get['type']),
            'cate_id' => $get['cate_id']
        ];
        $lists = Db::name('file')->field($field)->where($where)->page($get['page_no'], $get['page_size'])->select();
        $count = Db::name('file')->where($where)->count();
        foreach($lists as &$item) {
            $item['uri'] = UrlServer::getFileUrl($item['uri']);
        }
        return ['lists'=>$lists, 'count'=>$count];
    }

    public static function pagelists($get)
    {
        $field = 'id,name,uri';
        $where = [
            ['del', '=', 0],
            ['partner_id', '=', $get['partner_id']],
            ['type', '=', FileCate::getTypeNumber($get['type'])]
        ];
        if($get['cate_id']) {
            // 查找子分类，属于当前分类或当前分类下的子分类的文件都显示出来
            $child = self::getChildren($get['cate_id']);
            $child[] = intval($get['cate_id']);
            $where[] = ['cate_id', 'in', $child];
        }
        $lists = Db::name('file')->field($field)->where($where)->page($get['page_no'], $get['page_size'])->select();
        $count = Db::name('file')->where($where)->count();
        foreach($lists as &$item) {
            $item['uri'] = UrlServer::getFileUrl($item['uri']);
        }
        return ['lists'=>$lists, 'count'=>$count, 'page_no'=>$get['page_no'], 'page_size'=>$get['page_size']];
    }

    public static function addCate($post)
    {
        // 同级别不允许有同名分类
        $fileCate = FileCate::where([
            'del' => 0,
            'name' => $post['name'],
            'pid' => $post['pid']
        ])->select()->toArray();
        if($fileCate) {
            return ['flag'=>false, 'msg'=>'同级别下已存在同名分类'];
        }
        // 分类不允许超过3级
        if(!empty($post['pid'])) {
            $level = FileCate::where(['id'=>$post['pid']])->value('level');
            if($level > 2) {
                return ['flag'=>false, 'msg'=>'分类不允许超过3级'];
            }
            $level = $level + 1;
        }else{
            $post['pid'] = 0;
            $level = 1;
        }
        switch($post['type']) {
            case 'video':
                $post['type'] = 2;
                break;
        }
        $post['level'] = $level;
        $post['create_time'] = time();
        $result = FileCate::create($post);
        if($result) {
            return ['flag'=>true, 'msg'=>'添加成功'];
        }else{
            return ['flag'=>false, 'msg'=>'添加失败'];
        }
    }

    public static function editCate($post)
    {
        if(empty($post['pid'])) {
            $post['pid'] = 0;
            $pidLevel = 1;
        }
        // 同级分类下不允许重名
        $pidChildren = FileCate::where([
            ['pid', '=', $post['pid']],
            ['del', '=', 0],
            ['id', '<>', $post['id']],
            ['name', '=', $post['name']]
        ])->select()->toArray();
        if($pidChildren) {
            return ['flag'=>false, 'msg'=>'同级下已存在该名称的分类'];
        }
        // 上级不能是自身或自己的子分类
        $children = self::getChildren($post['id']);
        if($post['pid'] == $post['id'] || in_array($post['pid'], $children)) {
            return ['flag'=>false, 'msg'=>'上级分类不能为自身或自己的子分类'];
        }
        // 分类层级不能超过3级
        $level = self::calcLevel($post['id']);
        $pidLevel = FileCate::where('id', $post['pid'])->value('level');
        if($level + $pidLevel > 3) {
            return ['flag'=>false, 'msg'=>'分类层级不允许超过3级'];
        }
        FileCate::where('id', $post['id'])->update([
            'name'=>trim($post['name']),
            'sort' => $post['sort'],
            'pid' => $post['pid'],
            'update_time' => time()
        ]);
        self::updateLevel($post['id']);

        return ['flag'=>true, 'msg'=>'编辑成功'];
    }

    public static function delCate($post)
    {
        // 分类下还有子分类不允许删除
        $children = FileCate::where([
            'del' => 0,
            'pid' => $post['id']
        ])->select()->toArray();
        if($children) {
            return ['flag'=>false, 'msg'=>'该分类下还有子分类不允许删除'];
        }
        // 有文件正在使用该分类不允许删除
        $files = Db::name('file')->where(['del'=>0, 'cate_id'=>$post['id']])->select();
        if($files) {
            return ['flag'=>false, 'msg'=>'有文件正在使用该分类不允许删除'];
        }
        FileCate::where(['id'=>$post['id']])->update(['del'=>1, 'update_time'=>time()]);
        return ['flag'=>true, 'msg'=>'删除成功'];
    }

    public static function getChildren($id)
    {
        $child = [];
        $firstChild = FileCate::where(['del'=>0, 'pid'=>$id])->column('id');
        $child = $firstChild;
        foreach($firstChild as $firstId) {
            $secordChild = FileCate::where(['del'=>0, 'pid'=>$firstId])->column('id');
            $child = array_merge($child, $secordChild);
        }
        return $child;
    }

    public static function calcLevel($id)
    {
        $level = 1;
        $two_ids = FileCate::where(['pid' => $id, 'del' => 0])->column('id');
        if ($two_ids) {
            $level = 2;
            $three_ids = FileCate::where([
                ['del', '=', 0],
                ['pid', 'in', $two_ids]
            ])->column('id');
            if ($three_ids) $level = 3;
        }
        return $level;
    }

    /**
     * 更新自己及后代分类的level
     */
    public static function updateLevel($id)
    {
        $me = FileCate::find($id);
        if($me['pid'] == 0) { // 上级为顶级分类
            FileCate::update([
                'id' => $id,
                'level' => 1,
                'update_time' => time()
            ]);
            $two_ids = FileCate::where([
                'pid' => $id,
                'del' => 0
            ])->column('id');
            if($two_ids) {
                FileCate::where('id', 'in', $two_ids)->update([
                    'level' => 2,
                    'update_time' => time()
                ]);
                $three_ids = FileCate::where([
                    ['pid', 'in', $two_ids],
                    ['del', '=', 0]
                ])->column('id');
                if($three_ids) {
                    FileCate::where('id', 'in', $three_ids)->update([
                        'level' => 3,
                        'update_time' => time()
                    ]);
                }
            }
        }else{
            $parent = FileCate::find($me['pid']);
            if($parent['level'] == 1) {
                FileCate::update([
                    'id' => $id,
                    'level' => 2,
                    'update_time' => time()
                ]);
                $three_ids = FileCate::where([
                    'pid' => $id,
                    'del' => 0
                ])->column('id');
                if($three_ids) {
                    FileCate::where('id', 'in', $three_ids)->update([
                        'level' => 3,
                        'update_time' => time()
                    ]);
                }
            }else if($parent['level'] == 2){
                FileCate::update([
                    'id' => $id,
                    'level' => 3,
                    'update_time' => time()
                ]);
            }

        }
    }

    public static function delFile($post)
    {
        try{
            $result = Db::name('file')->where('id', 'in', $post['ids'])->update([
                'del' => 1
            ]);
            return true;
        }catch(\Exception $e) {
            return false;
        }
    }
}
<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Db;
use think\Validate;

class FileCate extends Validate
{

    protected $rule = [
        'id' => 'require',
        'name' => 'require|unique:FileCate|length:0,5',
        'pid' => 'checkAdd|checkEdit',
        'sort' => 'require|integer'
    ];

    protected $message = [
        'id.require' => 'id不可为空',
        'name.require' => '分类名称不能为空！',
        'name.unique' => '分类名称已存在',
        'name.length' => '分类名称长度为5位内',
        'sort.require' => '请填写排序',
        'sort.integer' => '请填写整数',
    ];

    protected function sceneAdd()
    {
        $this->remove('id')
            ->remove('pid', 'checkEdit');
    }

    protected function sceneEdit()
    {
        $this->remove('pid', 'checkAdd')
            ->append('pid', 'require');
    }

    protected function sceneDel()
    {
        $this->only(['id'])->append('id', 'checkCate');
    }


    protected function checkAdd($value, $rule, $data)
    {
        if ($value == 0) {
            return true;
        }

        $where = [
            ['id', '=', $value],
            ['del', '=', 0],
        ];

        $cate = Db::name('file_cate')->where($where)->find();
        if ($cate) {
            if ($cate['level'] == 2) {
                return '仅能添加二级分类';
            }
            if ($cate['name'] == $data['name']) {
                return '同级已有相同分类存在';
            }
        }
        return true;
    }


    public function checkEdit($value, $rule, $data)
    {
        $partner = Db::name('file_cate')->where(['id' => $value, 'del' => 0])->find();

        $child = Db::name('file_cate')->where(['pid' => $data['id'], 'del' => 0])->find();

        if ($child) {
            return '当前分类下有子分类,请先调整该分类下的子分类';
        }

        if ($partner['level'] == 2) {
            return '仅能添加二级分类';
        }

        if ($data['id'] == $value) {
            return '上级分类不能是自己';
        }
        return true;
    }


    protected function checkCate($value, $rule, $data)
    {
        $file = Db::name('file')->where(['del' => 0, 'cate_id' => $value])->find();

        if ($file) {
            return '分类下有图片,不可删除';
        }

        $child = Db::name('file_cate')->where(['del' => 0, 'pid' => $value])->find();

        if ($child) {
            return '分类下有子分类,不可删除';
        }

        return true;
    }

}
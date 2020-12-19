<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{

    protected $rule = [
        'id' => 'require',
        'title' => 'require|unique:article,title^del',
        'cid' => 'require|checkCid',
    ];

    protected $message = [
        'id.require' => 'id不可为空',
        'title.require' => '请输入文章标题',
        'title.unique' => '标题不能重复！',
        'cid.require' => '请选择分类！',
    ];

    protected function sceneAdd()
    {
        $this->remove('id');

    }

    protected function sceneEdit()
    {

    }

    public function sceneDel()
    {
        $this->only(['id']);
    }

    protected function checkCid($value, $rule, $data)
    {
        if (\app\admin\model\ArticleCategory::get(['id' => $value, 'del' => 0])) {
            return true;
        }
        return '请选择文章分类';
    }
}
<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

namespace app\common\model;


use think\Model;

class Express extends Model
{


    const ZHONGTONG  = 'zhongtong';
    const SHENTONG   = 'shentong';

    /**
     * @notes 获取快递100
     * @param bool $from
     * @return mixed|string
     * @author cjhao
     * @date 2022/9/29 10:46
     */
    public static function getkuaidi100code($from = true)
    {
        $desc = [
//            self::ZHONGTONG         => 'ztoOpen',
            self::SHENTONG          => '44',
        ];
        return $desc[$from] ?? '';
    }
}
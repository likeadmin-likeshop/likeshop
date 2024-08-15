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

class SelffetchVerifier extends Model
{
    //核销员状态
    const CLOSE = 0;//停用
    const OPEN = 1;//启用

    /**
     * @notes 核销员状态
     * @param bool $status
     * @return string|string[]
     * @author ljj
     * @date 2021/8/16 3:27 下午
     */
    public static function getVerifierStatus($status = true)
    {
        $desc = [
            self::CLOSE => '停用',
            self::OPEN => '启用',
        ];
        if ($status === true) {
            return $desc;
        }
        return $desc[$status] ?? '未知';
    }

    /**
     * @notes 核销员状态获取器
     * @param $value
     * @param $data
     * @return string|string[]
     * @author ljj
     * @date 2021/8/16 3:35 下午
     */
    public function getStatusDescAttr($value,$data)
    {
        return self::getVerifierStatus($data['status']);
    }

    /**
     * @notes 创建时间获取器
     * @param $value
     * @param $data
     * @return false|string
     * @author ljj
     * @date 2021/8/16 3:35 下午
     */
    public function getCreateTimeAttr($value,$data)
    {
        return date('Y-m-d H:i:s',$value);
    }
}
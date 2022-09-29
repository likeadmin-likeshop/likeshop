<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------

namespace app\admin\validate;

use app\admin\logic\UpgradeLogic;
use think\Validate;

class Upgrade extends Validate
{

    protected $rule = [
        'version_no' => 'require|checkIsAbleUpgrade',
        'package_link' => 'require'
    ];

    protected $message = [
        'version_no.require' => '参数缺失',
        'package_link.require' => '参数缺失',
    ];



    //检查是否可以更新
    protected function checkIsAbleUpgrade($value, $reule, $data)
    {

        $version_data = local_version();

        $local_version = $version_data['version'];

        //本地版本需要小于当前选中版本
        if ($local_version > $value) {
            return '当前系统无法升级到该版本，请重新选择更新版本。';
        }

        //获取远程列表
        $remote_data = UpgradeLogic::getRemoteVersion();
        if (empty($remote_data)) {
            return '获取更新数据失败';
        }

        foreach ($remote_data as $k => $item) {
            if ($item['version_no'] != $local_version) {
                continue;
            }

            if (empty($remote_data[$k-1])) {
                return '已为最新版本';
            }

            if ($remote_data[$k-1]['version_no'] != $value) {
                return '当前系统无法升级到该版本，请重新选择更新版本。';
            }
        }
        return true;
    }

}
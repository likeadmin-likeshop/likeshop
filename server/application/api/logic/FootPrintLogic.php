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

// | Author: LikeShopTeam-张无忌
// +----------------------------------------------------------------------

namespace app\api\logic;


use app\common\model\FootprintRecord;
use app\common\server\ConfigServer;

class FootPrintLogic
{
    public static function lists()
    {
        $config = ConfigServer::get('footprint',0);
        if ($config['footprint_status'] === 0) {
            return ['time'=>time(), 'lists'=>[]];
        }

        $where = [];
        if ($config['footprint_duration'] and $config['footprint_duration'] > 0) {
            $duration = ($config['footprint_duration'] * 60);
            $time = time() - $duration; //获取多少分钟前
            $where = [
                ['create_time', '>=', $time]
            ];
        }

        $model = new FootprintRecord();
        $lists = $model->field(true)->where($where)
            ->with(['user'=>function($query){
                    $query->withAttr('nickname', function ($value){
                        if (mb_strlen($value) > 4) {
                            return mb_substr($value, 0, 4).'**';
                        }
                        return $value;
                    });
            }])->order('id', 'desc')
            ->limit(50)
            ->append(['time'])->select();

        foreach ($lists as &$item) {
            $item['template'] = self::getTemplate($item);
            unset($item['user_id']);
            unset($item['foreign_id']);
        }
        return ['time'=>time(), 'lists'=>$lists];
    }

    // 获取模板
    private static function getTemplate($data)
    {
        $nickname = $data['user']['nickname'].' ';
        $time = $data['time'];
        return $nickname.$time.$data['template'];
    }
}
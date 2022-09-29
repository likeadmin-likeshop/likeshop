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

namespace app\api\logic;


use app\common\model\FootprintRecord;
use app\common\server\ConfigServer;

class FootPrintLogic
{
    public static function lists()
    {
        $config = ConfigServer::get('footprint',0);
        if (empty($config['footprint_status']) or $config['footprint_status'] === 0) {
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
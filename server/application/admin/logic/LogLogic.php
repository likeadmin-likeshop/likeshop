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


namespace app\admin\logic;


use think\Db;
use think\helper\Time;

class LogLogic
{

    /**
     * 获取日志列表
     * @param $page_no
     * @param $size
     * @param $get
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists($page_no, $size, $get)
    {

        $where[] = ['create_time', 'between', Time::today()];

        if (isset($get['start_time']) && $get['start_time'] && isset($get['end_time']) && $get['end_time']) {
            $where[] = ['create_time', 'between', [strtotime($get['start_time']), strtotime($get['end_time'])]];
        }


        if (isset($get['account']) && $get['account']) {
            $where[] = ['account', 'like', "%{$get['account']}%"];
        }
        if (isset($get['type']) && $get['type']) {
            $where[] = ['type', 'eq', $get['type']];
        }
        if (isset($get['uri']) && $get['uri']) {
            $where[] = ['uri', 'like', "%{$get['uri']}%"];
        }
        if (isset($get['ip']) && $get['ip']) {
            $where[] = ['ip', 'like', "%{$get['ip']}%"];
        }


        $lists = Db::name('system_log')
            ->where($where)
            ->page($page_no, $size)
            ->order(['id' => 'desc'])
            ->select();
        foreach ($lists as $k => $v) {
            $lists[$k]['create_time_str'] = date('Y-m-d H:i:s', $v['create_time']);
            $lists[$k]['param'] = str_replace([" ", "　", "\t", "\n", "\r"], '', $v['param']);
        }

        $count = Db::name('system_log')
            ->where($where)
            ->count();
        return ['lists' => $lists, 'count' => $count];
    }
}
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
use app\common\model\AssuranceService;
use app\common\server\UrlServer;
use think\Db;
use think\facade\Cache;

class AssuranceServiceLogic
{
    /**
     * @notes 保障服务列表
     * @param $get
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author ljj
     * @date 2024/7/12 上午10:30
     */
    public static function lists($get)
    {
        $where[] = ['del','=',0];

        $count = AssuranceService::where($where)->count();
        $lists = AssuranceService::where($where)
            ->page($get['page'],$get['limit'])
            ->order(['id'=>'desc'])
            ->select()
            ->toArray();

        return ['count' => $count,'list' => $lists];
    }

    /**
     * @notes 新增保障
     * @param $post
     * @return true
     * @author ljj
     * @date 2024/7/12 上午11:02
     */
    public static function add($post)
    {
        AssuranceService::create([
            'title' => $post['title'],
            'content' => $post['content']
        ]);
        return true;
    }

    /**
     * @notes 保障服务详情
     * @param $id
     * @return array
     * @author ljj
     * @date 2024/7/12 上午11:14
     */
    public static function detail($id)
    {
        return AssuranceService::where(['id' => $id])->find()->toArray();
    }

    /**
     * @notes 编辑保障服务
     * @param $post
     * @param $id
     * @return true
     * @author ljj
     * @date 2024/7/12 上午11:15
     */
    public static function edit($post,$id)
    {
        AssuranceService::update([
            'title' => $post['title'],
            'content' => $post['content']
        ],['id' => $id]);
        return true;
    }

    /**
     * @notes 删除保障服务
     * @param $id
     * @return true
     * @author ljj
     * @date 2024/7/12 上午11:16
     */
    public static function del($id)
    {
        AssuranceService::update([
            'del' => 1
        ],['id' => $id]);
        return true;
    }

    /**
     * @notes 获取所有列表
     * @param $get
     * @return array|array[]|\array[][]|\array[][][]|\array[][][][]
     * @author ljj
     * @date 2024/7/17 下午3:49
     */
    public static function getAllLists()
    {
        $lists = AssuranceService::where(['del'=>0])
            ->field('id,title')
            ->order(['id'=>'desc'])
            ->select()
            ->toArray();

        return $lists;
    }

}
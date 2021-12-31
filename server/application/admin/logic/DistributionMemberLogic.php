<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
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

namespace app\admin\logic;

use app\admin\model\DistributionMemberApply;
use app\admin\model\User;
use app\common\model\DistributionMember;
use app\common\model\DistributionOrder;
use app\common\model\Withdraw;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;

class DistributionMemberLogic
{
    /**
     * 分销会员列表
     * @param $get
     * @return array
     */
    public static function memberLists($get)
    {
        $where = [];
        $where[] = ['is_distribution', '=', 1];
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            if ($get['search_key'] == 'mobile') {
                $where[] = ['mobile', 'like', '%' . $keyword . '%'];
            } else {
                $where[] = [$get['search_key'], 'like', '%' . $keyword . '%'];
            }
        }
        //分销状态
        if (isset($get['freeze_distribution']) && $get['freeze_distribution'] != '') {
            $where[] = ['freeze_distribution', '=', $get['freeze_distribution']];
        }

        $user = new User();
        $count = $user->where($where)->count();

        $lists = $user
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->append(['fans', 'distribution_order'])
            ->hidden(['password,pay_password,salt'])
            ->order('id desc')
            ->select()->toArray();

        $user_level = Db::name('user_level')->where(['del' => 0])->column('name', 'id');
        $leader_ids = array_column($lists, 'first_leader');
        $leaders = Db::name('user')
            ->where('id', 'in', $leader_ids)
            ->column('sn,nickname,mobile,level', 'id');

        foreach ($lists as &$item) {
            $item['level'] = $user_level[$item['level']] ?? '无等级';
            $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
            $item['leader'] = $leaders[$item['first_leader']] ?? [];
            if (!empty($item['leader'])) {
                $leader_level = $item['leader']['level'] ?? 0;
                $item['leader']['level'] = $user_level[$leader_level] ?? '无等级';
            }
            $item['distribution_num'] = $item['distribution_order']['num'] ?? 0;//分销订单数
            $item['distribution_amount'] = $item['distribution_order']['amount'] ?? 0;//分销订单金额
            $item['distribution_money'] = $item['distribution_order']['money'] ?? 0;//分销佣金
        }
        return ['count' => $count, 'lists' => $lists];
    }


    /**
     * 分销会员审核列表
     * @param $get
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function auditLists($get)
    {
        $where = [];
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            if ($get['search_key'] == 'mobile') {
                $where[] = ['u.mobile', 'like', '%' . $keyword . '%'];
            } else {
                $where[] = [$get['search_key'], 'like', '%' . $keyword . '%'];
            }
        }
        //审核状态
        if (isset($get['status']) && $get['status'] != '') {
            $where[] = ['status', '=', $get['status']];
        }


        $field = [
            'a.*', 'u.sn', 'u.nickname', 'u.mobile', 'u.level', 'u.sex', 'a.reason',
            'u.create_time' => 'register_time', 'u.avatar', 'u.first_leader'
        ];

        $count = Db::name('distribution_member_apply a')
            ->join('user u', 'u.id = a.user_id')
            ->where($where)
            ->count();

        $lists = Db::name('distribution_member_apply a')
            ->field($field)
            ->join('user u', 'u.id = a.user_id')
            ->order('a.id desc')
            ->page($get['page'], $get['limit'])
            ->where($where)
            ->select();

        $user_level = Db::name('user_level')->where(['del' => 0])->column('name', 'id');

        $leader_ids = array_column($lists, 'first_leader');
        $leaders = Db::name('user')
            ->where('id', 'in', $leader_ids)
            ->column('sn,nickname,mobile,level', 'id');

        foreach ($lists as &$item) {
            $item['level'] = $user_level[$item['level']] ?? '无等级';
            $item['sex'] = self::getSexText($item['sex']);
            $item['register_time'] = date('Y-m-d H:i:s', $item['register_time']);
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $item['status_text'] = DistributionMember::getApplyStatus($item['status']);
            $item['leader'] = $leaders[$item['first_leader']] ?? [];
            $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
            if (!empty($item['leader'])) {
                $leader_level = $item['leader']['level'] ?? 0;
                $item['leader']['level'] = $user_level[$leader_level] ?? '无等级';
            }
        }
        return ['count' => $count, 'lists' => $lists];
    }


    public static function getSexText($value)
    {
        switch ($value) {
            case 1:
                return '男';
            case 2:
                return '女';
            default:
                return '未知';
        }
    }


    /**
     * 审核通过
     * @param $post
     * @return bool|string
     */
    public static function auditPass($post)
    {
        Db::startTrans();
        try {
            $apply = DistributionMemberApply::where('id', $post['id'])->find();
            $apply->status = DistributionMember::STATUS_AUDIT_SUCCESS;
            $apply->update_time = time();
            $apply->save();

            $user = \app\admin\model\User::where('id', $apply['user_id'])->find();
            $user->is_distribution = 1;
            $user->save();

            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }
    }

    /**
     * 审核拒绝
     * @param $post
     */
    public static function auditRefuse($post)
    {
        $apply = DistributionMemberApply::where('id', $post['id'])->find();
        $apply->status = DistributionMember::STATUS_AUDIT_ERROR;
        $apply->save();
        return true;
    }

    /**
     * 冻结/解冻分销会员资格
     * @param $post
     */
    public static function freeze($post)
    {
        $user = User::where('id', $post['id'])->find();
        $user->freeze_distribution = 1;
        if ($post['type'] == 'unfreeze'){
            $user->freeze_distribution = 0;
        }
        $user->save();
    }

    /**
     * 分销会员信息
     * @param $get
     * @return User
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getMemberInfo($get)
    {
        $user_id = $get['id'];
        $user_model = new User();
        $user = $user_model->alias('u')
            ->field('u.*,u.sn as user_sn')
            ->leftJoin('distribution_order_goods d', 'd.user_id = u.id')
            ->where('u.id', $user_id)
            ->append(['distribution_order'])
            ->hidden(['password', 'pay_password', 'salt'])
            ->find();

        $user['distribution_text'] = '否';
        if ($user['is_distribution'] == 1) {
            $user['distribution_text'] = '是';
        }

        //上级编号
        $user['first_leader_sn'] = Db::name('user')
            ->where('id', $user['first_leader'])
            ->value('sn');
        //直推会员数
        $user['first_fans'] = Db::name('user')
            ->where(['first_leader' => $user_id, 'del' => 0])
            ->count();

        $have_withdraw = Db::name('withdraw_apply')
            ->where(['status' => Withdraw::STATUS_SUCCESS, 'user_id' => $user_id])
            ->sum('money');

        $user['distribution_num'] = $user['distribution_order']['num'] ?? 0;//分销订单数
        $user['distribution_amount'] = $user['distribution_order']['amount'] ?? 0;//分销订单金额
        $user['distribution_money'] = $user['distribution_order']['money'] ?? 0;//分销佣金
        $user['have_withdraw'] = $have_withdraw;//已提现金额
        return $user;
    }


    /**
     * 粉丝列表(推广会员)
     * @param $get
     * @return array
     */
    public static function getFansLists($get)
    {
        $user_id = $get['id'];
        $where = [];
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            $where[] = [$get['search_key'], 'like', '%' . $keyword . '%'];
        }

        $fans_type = $get['type'] ?? 'all';
        if ($fans_type == 'all') {
            $where[] = ['', 'exp', Db::raw("FIND_IN_SET($user_id, ancestor_relation)")];
        } else {
            $where[] = [$fans_type, '=', $user_id];
        }

        $user = new User();
        $count = $user
            ->where($where)
            ->append(['fans', 'distribution_order'])
            ->hidden(['password,pay_password,salt'])
            ->count();

        $lists = $user
            ->where($where)
            ->append(['fans', 'distribution_order'])
            ->hidden(['password,pay_password,salt'])
            ->page($get['page'], $get['limit'])
            ->select()->toArray();

        $user_level = Db::name('user_level')->where(['del' => 0])->column('name', 'id');
        $leader_ids = array_column($lists, 'first_leader');
        $leaders = Db::name('user')
            ->where('id', 'in', $leader_ids)
            ->column('sn,nickname,mobile,level', 'id');

        foreach ($lists as &$item) {
            $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
            $item['leader'] = $leaders[$item['first_leader']] ?? [];
            if (!empty($item['leader'])) {
                $leader_level = $item['leader']['level'] ?? 0;
                $item['leader']['level'] = $user_level[$leader_level] ?? '无等级';
            }
            $item['distribution_num'] = $item['distribution_order']['num'] ?? 0;//分销订单数
            $item['distribution_amount'] = $item['distribution_order']['amount'] ?? 0;//分销订单金额
            $item['distribution_money'] = $item['distribution_order']['money'] ?? 0;//分销佣金
        }

        return ['count' => $count, 'lists' => $lists];
    }


    /**
     * 分销收入明细
     * @param $get
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getEarningsDetail($get)
    {
        $user_id = $get['id'];
        $where = [];
        $where[] = ['d.user_id', '=', $user_id];
        $where[] = ['d.status', '=', DistributionOrder::STATUS_SUCCESS];

        //记录时间
        if (isset($get['start_time']) && $get['start_time'] != '') {
            $where[] = ['d.create_time', '>=', strtotime($get['start_time'])];
        }
        if (isset($get['end_time']) && $get['end_time'] != '') {
            $where[] = ['d.create_time', '<=', strtotime($get['end_time'])];
        }

        $count = Db::name('distribution_order_goods')->alias('d')
            ->field('d.id as distribution_id, d.sn, o.order_sn, d.money, d.create_time')
            ->join('order_goods og', 'og.id = d.order_goods_id')
            ->join('order o', 'o.id = og.order_id')
            ->where($where)
            ->count();

        $lists = Db::name('distribution_order_goods')->alias('d')
            ->field('d.id as distribution_id, d.sn, o.order_sn, d.money, d.create_time')
            ->join('order_goods og', 'og.id = d.order_goods_id')
            ->join('order o', 'o.id = og.order_id')
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $item['type'] = '分销佣金';
        }

        return ['count' => $count, 'lists' => $lists];
    }


    /**
     * 获取上级名称和编号
     * @param $user_id
     * @return string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getLeaderInfo($user_id)
    {
        $first_leader = Db::name('user u')
            ->field('u1.nickname,u1.sn')
            ->join('user u1', 'u1.id = u.first_leader')
            ->where('u.id', $user_id)
            ->find();

        $leader_data = '无';
        if ($first_leader) {
            $leader_data = $first_leader['nickname'] . '(' . $first_leader['sn'] . ')';
        }
        return $leader_data;
    }


    //更新关系
    public static function updateRelation($post)
    {
        Db::startTrans();
        try{

            $user_id = $post['user_id'];//需要调整上级的user_id
            $referrer_sn =  $post['referrer_sn'];//新上级推荐人编号

            //清空上级
            $data = [
                'first_leader' => 0,
                'second_leader' => 0,
                'third_leader' => 0,
                'ancestor_relation' => '',
            ];
            $my_leader_id = 0;
            $my_first_leader = 0;
            $my_ancestor_relation = '';

            if ($post['change_type'] == 'appoint'){
                //指定上级
                $my_leader = Db::name('user')->where(['sn' => $referrer_sn])->find();

                //更新我的第一上级、第二上级、第三上级、关系链
                $my_leader_id = $my_leader['id'];
                $my_first_leader = $my_leader['first_leader'];
                $my_third_leader = $my_leader['second_leader'];
                $my_ancestor_relation = trim("{$my_leader_id},{$my_leader['ancestor_relation']}", ',');
                $data = [
                    'first_leader' => $my_leader_id,
                    'second_leader' => $my_first_leader,
                    'third_leader' => $my_third_leader,
                    'ancestor_relation' => $my_ancestor_relation,
                ];
            }

            Db::name('user')->where(['id' => $user_id])->update($data);

            //更新我向下一级的第二上级、第三上级
            $data = [
                'second_leader' => $my_leader_id,
                'third_leader' => $my_first_leader,
            ];
            Db::name('user')->where(['first_leader' => $user_id])->update($data);

            //更新我向下二级的第三级
            $data = [
                'third_leader' => $my_leader_id,
            ];
            Db::name('user')->where(['second_leader' => $user_id])->update($data);


            //更新与我相关的所有关系链
            Db::name('user')
                ->where("find_in_set({$user_id},ancestor_relation)")
                ->exp('ancestor_relation', "replace(ancestor_relation,'{$user_id}','" . trim("{$user_id},{$my_ancestor_relation}", ',') . "')")
                ->update();

            Db::commit();
            return true;
        } catch (Exception $e){
            Db::rollback();
            return $e->getMessage();
        }
    }

    /**
     * Notes: 添加分销会员
     * @author 张无忌(2021/1/11 16:49)
     * @param $post
     * @return bool|string
     */
    public static function addMember($post)
    {
        $userModel = new User();
        // 根据会员编号查询用户
        $user = $userModel->field('id,sn,is_distribution,distribution_add_remarks,del')
            ->where(['sn'=>$post['sn']])->find();
        // 校验用户
        if (!$user) { return '该用户不存在!'; }
        if ($user['del'] === 1) { return '该用户已被删除!'; }
        if ($user['is_distribution']) { return '该用户已是分销会员,无需重复添加'; }
        try {
            // 更新用户为分销会员
            $result = $userModel->where(['id' => (int)$user['id']])->update([
                'is_distribution'          => 1,
                'distribution_add_remarks' => $post['remarks']
            ]);
            return $result ? true : '添加失败';
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
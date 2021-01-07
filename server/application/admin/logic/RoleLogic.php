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


namespace app\admin\logic;


use think\Db;
use think\Exception;

class RoleLogic
{

    /**
     * 角色列表
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists()
    {
        $result = Db::name('role_dev_auth_index r')
            ->join('dev_auth m', 'r.menu_auth_id=m.id')
            ->where(['m.del' => 0])
            ->order(['sort' => 'desc'])
            ->field(['m.name' => 'name', 'r.role_id' => 'role_id'])
            ->select();
        $role_id_menu_auth_names = [];

        foreach ($result as $k => $v) {
            if (isset($role_id_menu_auth_names[$v['role_id']])) {
                $role_id_menu_auth_names[$v['role_id']] .= $v['name'] . ',';
            } else {
                $role_id_menu_auth_names[$v['role_id']] = $v['name'] . ',';
            }
        }

        $lists = Db::name('role')
            ->where(['del' => 0])
            ->select();

        foreach ($lists as $k => $v) {
            $lists[$k]['auth_str'] = isset($role_id_menu_auth_names[$v['id']]) ? $role_id_menu_auth_names[$v['id']] : '';
            $lists[$k]['auth_str'] = rtrim($lists[$k]['auth_str'], ',');
            $lists[$k]['create_time_str'] = date('Y-m-d H:i:s', $v['create_time']);
        }
        return $lists;
    }

    public static function roleInfo($role_id)
    {
        return Db::name('role')->where(['id' => $role_id])->field(['id', 'name', 'desc'])->find();
    }

    /**
     * 添加角色
     * @param $post
     * @return int|string
     */
    public static function addRole($post)
    {
        $data = [
            'name' => $post['name'],
            'desc' => $post['desc'],
            'create_time' => time(),
        ];

        try {
            Db::startTrans();
            $role_id = Db::name('role')->insertGetId($data);
            $data = [];
            $post['auth_ids'] = empty($post['auth_ids'])?[]:$post['auth_ids'];
            foreach ($post['auth_ids'] as $k => $v) {
                $data[] = [
                    'role_id' => $role_id,
                    'menu_auth_id' => $v,
                ];
            }
            Db::name('role_dev_auth_index')
                ->insertAll($data);
            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }
    }

    /**
     * 添加角色
     * @param $post
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function editRole($post)
    {
        $data = [
            'name' => $post['name'],
            'desc' => $post['desc'],
            'update_time' => time(),
        ];
        try {
            Db::startTrans();
            Db::name('role')
                ->where(['del' => 0, 'id' => $post['id']])
                ->update($data);
            $data = [];
            Db::name('role_dev_auth_index')
                ->where(['role_id' => $post['id']])
                ->delete();
            $post['auth_ids'] = empty($post['auth_ids'])?[]:$post['auth_ids'];
            foreach ($post['auth_ids'] as $k => $v) {
                $data[] = [
                    'role_id' => $post['id'],
                    'menu_auth_id' => $v,
                ];
            }
            Db::name('role_dev_auth_index')
                ->insertAll($data);
            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }
    }

    /**
     * 删除成功
     * @param $role_id
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function delRole($role_id)
    {
        $data = [
            'del' => 1,
            'update_time' => time(),
        ];
        return Db::name('role')->where(['del' => 0, 'id' => $role_id])->update($data);
    }


    /**
     * 获取菜单权限树
     * @param string $role_id
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function authTree($role_id = '')
    {

        $lists = Db::name('dev_auth')
            ->where(['disable' => 0, 'del' => 0])
            ->select();
        $pids = Db::name('dev_auth')
            ->where(['disable' => 0, 'type' => 1, 'del' => 0])
            ->column('pid');
        foreach ($lists as $k => $v) {
            $lists[$k]['spread'] = in_array($v['id'], $pids) ? true : false;
        }
        $menu_auth_ids = [];
        if ($role_id) {
            $menu_auth_ids = Db::name('role_dev_auth_index')
                ->where(['role_id' => $role_id])
                ->column('menu_auth_id');
        }
        return self::authListToTree($lists, 0, $menu_auth_ids);
    }

    /**
     * 列表结构转换成树形结构
     * @param $lists
     * @param int $pid
     * @param array $menu_auth_ids
     * @return array
     */
    public static function authListToTree($lists, $pid = 0, $menu_auth_ids = [])
    {
        $tree = [];
        foreach ($lists as $k => $v) {
            if ($v['pid'] == $pid) {
                $temp['id'] = $v['id'];
                $temp['field'] = 'auth_ids[' . $v['id'] . ']';
                $temp['title'] = $v['name'];
                $temp['children'] = self::authListToTree($lists, $v['id'], $menu_auth_ids);
                $temp['checked'] = in_array($v['id'], $menu_auth_ids) && empty($temp['children']) ? true : false;
                $temp['spread'] = $v['spread'];
                $tree[] = $temp;
            }
        }
        return $tree;


    }

}
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


namespace app\admin\controller;


use app\common\server\ConfigServer;

class StorageConfig extends AdminBase
{
    /**
     * Notes: 存储引擎列表
     * @author 张无忌(2021/2/22 11:43)
     * @return mixed
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $default = ConfigServer::get('storage', 'default', '');
            $data = [
                [
                    'name'   => '本地存储',
                    'path'   => '存储在本地服务器',
                    'engine' => 'local',
                    'status' => $default == 'local' ? 1 : 0
                ]
            ];
            $this->_success('获取成功', $data);
        }

        return $this->fetch();
    }

    /**
     * Notes: 编辑存储引擎
     * @author 张无忌(2021/2/22 11:43)
     * @return mixed
     */
    public function edit()
    {
        $engine = $this->request->get('engine');
        $this->assign('engine', $engine);
        return $this->fetch();
    }

    /**
     * Notes: 切换存储引擎
     * @author 张无忌(2021/2/22 11:43)
     */
    public function changeEngine()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            try {
                ConfigServer::set('storage', 'default', $post['engine']);
            } catch (\Exception $e) {
                $this->_error('切换失败: ' . $e->getMessage());
            }
            $this->_success('切换成功');
        }
    }
}
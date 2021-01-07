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

namespace app\admin\controller;

use app\admin\logic\SignDailyLogic;

/**
 * 天天签到
 * Class SignDaily
 * @package app\admin\controller
 */
class SignDaily extends AdminBase
{

    /**
     * 连续签到奖励列表
     * @return mixed
     */
    public function lists()
    {
        if ($this->request->isAjax()){
            $get = $this->request->get();
            $list = SignDailyLogic::lists($get);
            $this->_success('',$list);


        }

        $config = SignDailyLogic::getSignRule();

        $this->assign('config',$config);
        return $this->fetch();

    }

    /**
     * 签到记录列表
     */
    public function record()
    {
        if ($this->request->isAjax()){
            $get = $this->request->get();

            $this->_success('',SignDailyLogic::record($get));
        }

        return $this->fetch();

    }


    /**
     * 添加连续签到奖励
     * @return mixed
     */
    public function add()
    {
        if ($this->request->isAjax()){
            $post = $this->request->post();
            $result =$this->validate($post,'app\admin\validate\SignDaily.add');
            if ($result === true){
            $post['integral_status'] = isset($post['integral_status']) && $post['integral_status'] =='on'?1:0;
            $post['growth_status'] = isset($post['growth_status']) && $post['growth_status'] =='on'?1:0;
            SignDailyLogic::add($post);
            $this ->success('添加成功');
            }
            $this->_error($result);


        }
        return $this->fetch();
    }

    /**
     * 编辑连续签到奖励
     * @return mixed
     */
    public function edit($id)
    {
        if ($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\SignDaily.edit');
            if ($result === true){
            $post['integral_status'] = isset($post['integral_status']) && $post['integral_status'] == 'on'?1:0;
            $post['growth_status'] = isset($post['growth_status']) && $post['growth_status'] == 'on'?1:0;
            SignDailyLogic::edit($post,$id);
            $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $info = SignDailyLogic::getSignDaily($id);
        $this->assign('info',$info);
        return $this->fetch();
    }

    /**
     * 删除连续签到奖励
     * @return mixed
     */
    public function del($id)
    {
        if ($this->request->isAjax()){
            SignDailyLogic::del($id);
            $this->_success('删除成功');
        }
        return $this->fetch();
    }


    /**
     * 签到规则说明设置
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function signRule()
    {
        if ($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\SignDaily.sign');
            if ($result === true){
            $post['integral_status'] = isset($post['integral_status']) && $post['integral_status'] =='on'?1:0;
            $post['growth_status'] = isset($post['growth_status']) && $post['growth_status'] =='on'?1:0;
            SignDailyLogic::setSignRule($post);
            $this ->success('保存成功');
            }
            $this->_error($result);
        }

    }

}
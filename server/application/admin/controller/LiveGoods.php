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

namespace app\admin\controller;


use app\admin\logic\LiveGoodsLogic;

/**
 * 直播商品控制器
 * Class LiveGoods
 * @package app\admin\controller
 */
class LiveGoods extends AdminBase
{
    /**
     * @notes 获取直播商品列表
     * @return mixed|void
     * @throws @\EasyWeChat\Kernel\Exceptions\HttpException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws @\EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws @\Psr\SimpleCache\InvalidArgumentException
     * @author heshihu
     * @date 2021/9/17 11:42
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = LiveGoodsLogic::lists($get);
            if (is_string($lists)) {
                return $this->_error($lists);
            }
            $this->_success('获取成功', $lists);
        }

        return $this->fetch();
    }


    /**
     * @notes 添加直播商品
     * @return mixed|void
     * @throws @\EasyWeChat\Kernel\Exceptions\HttpException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws @\EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws @\Psr\SimpleCache\InvalidArgumentException
     * @author heshihu
     * @date 2021/9/17 15:26
     */
    public function add()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post, 'app\admin\validate\LiveGoods');
            if ($result !== true) {
                $this->_error($result);
            }
            $result = LiveGoodsLogic::add($post);
            if ($result !== true) {
                return $this->_error($result);
            }
            $this->_success('添加成功');
        }

        return $this->fetch();
    }

    public function addUploadImage()
    {
        if ($this->request->isPost()) {
            $goods_image = $this->request->post('goods_image');
            $result = LiveGoodsLogic::addUploadImage($goods_image);
            if (is_string($result)) {
                return $this->_error($result);
            }
            return $this->_success('上传成功', $result);
        }
    }


    /**
     * @notes 删除商品
     * @return false|void
     * @throws @\EasyWeChat\Kernel\Exceptions\HttpException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws @\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws @\EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws @\Psr\SimpleCache\InvalidArgumentException
     * @author heshihu
     * @date 2021/9/17 18:38
     */
    public function del()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->post('id');
            $result = LiveGoodsLogic::del($id);
            if ($result !== true) {
                return $this->_error($result);
            }
            $this->_success('删除成功');
        }

        return false;
    }

}
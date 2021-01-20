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
use app\admin\logic\{GoodsBrandLogic, GoodsCategoryLogic, GoodsLogic, SupplierLogic,FreightLogic,CommonLogic};

class Goods extends AdminBase
{
//    TODO 商品发布
//    TODO 编辑
//    TODO 复制

    /**
     * 商品列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function lists()
    {

        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->_success('', GoodsLogic::lists($get));
        }
        $this->assign('statistics',GoodsLogic::statistics());
        $this->assign('category_list', GoodsCategoryLogic::categoryTreeeTree());
        $this->assign('supplier_list',SupplierLogic::getSupplierList());
        return $this->fetch();
    }

    /**
     * Notes: 获取Tab统计数据
     * @author 张无忌(2021/1/19 18:49)
     */
    public function totalCount()
    {
        if ($this->request->isAjax()) {
            $this->_success('获取成功', GoodsLogic::statistics());
        }
    }

    /**
     * 添加商品
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function add()
    {
        if ($this->request->isAjax() && $this->request->isPost()) {

            $post = $this->request->post();
            $post['del'] = 0;

            //主表验证
            $result = $this->validate($post, 'app\admin\validate\Goods.add');
            if ($result !== true) {
                $this->_error($result);
            }

            //单规格验证
            if ($post['spec_type'] == 1) {
                $result = $this->validate($post, 'app\admin\validate\GoodsOneSpec');
                if ($result !== true) {
                    $this->_error($result);
                }
            }

            //多规格验证
            $spec_lists = [];
            if ($post['spec_type'] == 2) {
                $spec_lists = $post;
                unset($spec_lists['goods_image']);
                unset($spec_lists['spec_name']);
                unset($spec_lists['spec_values']);
                unset($spec_lists['spec_id']);
                unset($spec_lists['spec_value_ids']);
                $spec_lists = form_to_linear($spec_lists);

                //规格验证
                if (empty($spec_lists)) {
                    $this->_error('至少添加一个规格');
                }
                $result = $this->validate($post, 'app\admin\validate\GoodsMoreSpec');
                if ($result !== true) {
                    $this->_error($result);
                }

                //规格商品列表验证
                foreach ($spec_lists as $v) {
                    $result = $this->validate($v, 'app\admin\validate\GoodsMoreSpecLists');
                    if ($result !== true) {
                        $this->_error($result);
                    }
                }
            }

            //添加商品
            $result = GoodsLogic::add($post, $spec_lists);
            if ($result !== true) {
                $this->_error('添加失败:' . $result);
            }
            $this->_success('添加成功');
        }
        $this->assign('category_lists', json_encode(GoodsCategoryLogic::getAllTree(), JSON_UNESCAPED_UNICODE));
        $this->assign('brand_lists',json_encode(GoodsBrandLogic::getGoodsBrandList(),JSON_UNESCAPED_UNICODE));
        $this->assign('supplier_lists',json_encode(SupplierLogic::getSupplierList(),JSON_UNESCAPED_UNICODE));
        $this->assign('freight_lists',json_encode(FreightLogic::getFreightList(),JSON_UNESCAPED_UNICODE));
        return $this->fetch();
    }


    public function edit($goods_id)
    {
        if ($this->request->isAjax() && $this->request->isPost()) {

            $post = $this->request->post();

            $post['del'] = 0;
            $post['id'] = $post['goods_id'];


            //主表验证
            $result = $this->validate($post, 'app\admin\validate\Goods');
            
            if ($result !== true) {
                $this->_error($result);
            }

            //单规格验证
            if ($post['spec_type'] == 1) {
                $result = $this->validate($post, 'app\admin\validate\GoodsOneSpec');
                if ($result !== true) {
                    $this->_error($result);
                }
            }

            //多规格验证
            $spec_lists = [];
            if ($post['spec_type'] == 2) {
                $spec_lists = $post;
                unset($spec_lists['goods_image']);
                unset($spec_lists['spec_name']);
                unset($spec_lists['spec_values']);
                unset($spec_lists['spec_id']);
                unset($spec_lists['spec_value_ids']);
                $spec_lists = form_to_linear($spec_lists);

                //规格验证
                if (empty($spec_lists)) {
                    $this->_error('至少添加一个规格');
                }
                $result = $this->validate($post, 'app\admin\validate\GoodsMoreSpec');
                if ($result !== true) {
                    $this->_error($result);
                }

                //规格商品列表验证
                foreach ($spec_lists as $v) {
                    $result = $this->validate($v, 'app\admin\validate\GoodsMoreSpecLists');
                    if ($result !== true) {
                        $this->_error($result);
                    }
                }
            }

            //添加商品
            $result = GoodsLogic::edit($post, $spec_lists);
            if ($result !== true) {
                $this->_error('添加失败:' . $result);
            }
            $this->_success('修改成功');
        }

        $this->assign('category_lists', json_encode(GoodsCategoryLogic::getAllTree(), JSON_UNESCAPED_UNICODE));
        $this->assign('info', json_encode(GoodsLogic::info($goods_id),JSON_UNESCAPED_UNICODE));
        $this->assign('brand_lists',json_encode(GoodsBrandLogic::getGoodsBrandList(),JSON_UNESCAPED_UNICODE));
        $this->assign('supplier_lists',json_encode(SupplierLogic::getSupplierList(),JSON_UNESCAPED_UNICODE));
        $this->assign('freight_lists',json_encode(FreightLogic::getFreightList(),JSON_UNESCAPED_UNICODE));
        return $this->fetch('goods/add');
    }

    public function del($id)
    {
        if ($this->request->isAjax()) {
            //todo 商品删除验证
            $result = GoodsLogic::del($id); //逻辑层处理删除信息
            if ($result) {
                $this->_success('删除成功');
            }
            $this->_error('删除失败');
        }
    }

    public function changeFields(){
        $table = $this->request->controller();

        $pk_name = 'id';
        $pk_value = $this->request->get('id');

        $field = $this->request->get('field');
        $field_value = $this->request->get('value');
        $result = CommonLogic::changeTableValue($table,$pk_name,$pk_value,$field,$field_value);
        if($result){
            $this->_success('修改成功');
        }
        $this->_error('修改失败');
    }

    /**
     * Notes: 下架商品
     * @author 张无忌(2021/1/11 14:33)
     */
    public function lowerStatus()
    {
        if ($this->request->isAjax()) {
            $ids = $this->request->post('ids', []);
            $result = GoodsLogic::upperOrLower($ids, 0);
            if ($result) {
                $this->_success('下架成功');
            }
            $this->_error('下架失败');
        }
    }

    /**
     * Notes: 上架商品
     * @author 张无忌(2021/1/11 14:33)
     */
    public function upperStatus()
    {
        if ($this->request->isAjax()) {
            $ids = $this->request->post('ids', []);
            $result = GoodsLogic::upperOrLower($ids, 1);
            if ($result) {
                $this->_success('上架成功');
            }
            $this->_error('上架失败');
        }
    }

}
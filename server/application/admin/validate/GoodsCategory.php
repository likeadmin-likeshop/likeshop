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

namespace app\admin\validate;
use think\Db;
use think\Validate;
use app\admin\logic\GoodsCategoryLogic;

class GoodsCategory extends Validate
{

    protected $rule = [
        'id'    => 'require|checkCategory',
        'name'  => 'require|checkName',
        'pid'   => 'addPid|editPid',
        'image' => 'require',
    ];

    protected $message = [
        'id.require'    => 'id不可为空',
        'name.require'  => '分类名称不能为空！',
        'name.unique'   => '分类名称已存在',
        'image.require' => '请上传分类图标',
    ];
    protected function sceneAdd()
    {
        $this->remove('id')
             ->remove('pid','editPid');
    }

    protected function sceneEdit()
    {
        $this->remove('pid','addPid')
             ->remove('id','checkCategory');
    }

    protected function sceneDel()
    {
        $this->only(['id']);
    }

    /*
     * 验证分类名称
     */
    protected function checkName($value,$rule,$data){
        $where[] = ['del','=',0];
        if(isset($data['id'])){
            $where[] = ['id','<>',$data['id']];
        }
        $where[] = ['name','=',$data['name']];
        if($data['pid']){
            $level = Db::name('goods_category')->where(['id' => $data['pid']], ['del' => 0])->value('level');
            $where[] = ['level','=',$level+1];
        }
        $name = Db::name('goods_category')->where($where)->value('name');
        if($name){
            return '分类名称已存在';
        }
        return true;


    }
    /*
     * 新增时验证上级
     */
    protected function addPid($value, $rule, $data){
        if($value == 0) return true;

        $where['id'] = $value;
        $where['del'] = 0;
        $goods_category = Db::name('goods_category')->where($where)->find();

        if($goods_category)  return true;
        return '父级分类不存在，请重新选择';

    }

    /*
     * 编辑时验证上级
     */
    protected function editPid($value, $rule, $data){
        if($value == 0 ) return true;
        //验证的分类
        $category = Db::name('goods_category')->where(['id'=>$data['id'],'del'=>0])->find();
        //分类的父级
        $partner = Db::name('goods_category')->where(['id'=>$value,'del'=>0])->find();
        //获取该分类有多少级子类
        $level = GoodsCategoryLogic::GetCategoryLevel($category);

        if($category['id'] == $partner['id']) return '父级分类不能是自己';
        if($level == 3 && $partner) return '该分类有完整的子分类，不可修改父级';
        if($partner['level'] == 2 && $level != 1) return '该分类下有子分类,请先调整该分类下的子分类';
        if($partner['level'] == 3) return '父级分类不能是第三级';

        return true;
    }
    /*
     * 验证分类
     */
    protected function checkCategory($value,$rule,$data){

        $goods_list = Db::name('goods')->where(['del'=>0])->column('id,name','third_category_id');
        $goods_category_list = Db::name('goods_category')->where([['del','=',0],['id','not in',$value]])->column('name','pid');

        foreach ($value as $item){
            if(isset($goods_category_list[$item])){
                $name = Db::name('goods_category')->where(['id'=>$item])->value('name');
                return $name.'该分类下有子级，不能删除';
            }
            if(isset($goods_list[$item])){
                $name = Db::name('goods_category')->where(['id'=>$item])->value('name');
                return $name.'已经有商品绑定了该分类，不能删除';
            }
        }
        return true;
    }

}
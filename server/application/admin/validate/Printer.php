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
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
namespace app\admin\validate;
use think\Db;
use think\Validate;

class Printer extends Validate{
    protected $rule = [
        'id'            => 'require',
        'type'          => 'require|checkType',
        'name'          => 'require',
        'machine_code'  => 'require|unique:printer,machine_code^del^type',
        'private_key'   => 'require',
        'print_number'  => 'require',
    ];
    public function sceneAdd()
    {
        return $this->remove('id');
    }

    public function sceneDel()
    {
        return $this->only(['id']);
    }

    public function sceneConfig(){
        return $this->only(['id'])->append('id','checkPrinter');
    }

    protected $message = [
        'id.require'            => '请选择打印机',
        'type.require'          => '请选择打印机类型',
        'name.require'          => '请输入打印机名称',
        'machine_code.require'  => '请输入终端号',
        'machine_code.unique'   => '终端号重复',
        'private_key.require'   => '请输入秘钥',
        'print_number.require'  => '请输入打印联数',

    ];


    protected function checkType($value,$rule,$data){
        $type = Db::name('printer_config')->where(['id'=>$value])->find();
        if(!$type){
            return '打印机配置错误';
        }
        if(!$type['client_id'] || !$type['client_secret']){
            return '请先设置'.$type['name'].'的配置';
        }

        return true;

    }

    protected function checkPrinter($value,$rule,$data){
        $printer = Db::name('printer')->where(['id'=>$value])->find();
        if(!$printer || !$printer['machine_code']){
            return '打印机配置错误';
        }

        $type = Db::name('printer_config')->where(['id'=>$printer['type']])->find();

        if(!$type){
            return '打印配置错误';
        }
        if(!$type['client_id'] || !$type['client_secret']){
            return '请先设置'.$type['name'].'的配置';
        }
        return true;
    }
}
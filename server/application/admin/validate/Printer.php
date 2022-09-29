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
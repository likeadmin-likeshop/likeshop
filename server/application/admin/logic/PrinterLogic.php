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
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use app\common\server\YlyPrinter;
use think\Db;
use think\Exception;
use think\facade\Cache;
use think\facade\Hook;

class PrinterLogic{

    /**
     * Notes:打印机列表
     * @param $get
     * @return array
     * @author: cjhao 2021/4/24 14:45
     */
    public static function lists($get){

        switch ($get['type']){
            case 1:
                $list = Db::name('printer')
                    ->where(['del'=>0])
                    ->order('id desc')
                    ->select();
                foreach ($list as $key => $value){
                    $list[$key]['type_name'] = Db::name('printer_config')->where(['id'=>$value['type']])->value('name');
                    $list[$key]['status'] = $value['status'] ? '开启' : '关闭';
                    $list[$key]['auto_print'] = $value['auto_print'] ? '开启' : '关闭';
                }
                break;
            case 2:
                $list = Db::name('printer_config')
                        ->where(['del'=>0])
                        ->select();
                break;

            case 3:
                $list = ConfigServer::get('printer', 'yly_template', []);
                $list['file_url'] = UrlServer::getFileUrl('');
                break;
        }

        return['lists'  => $list];

    }




    /**
     * Notes:设置添加打印机
     * @param $post
     * @return bool|string
     * @author: cjhao 2021/4/24 14:45
     */
    public static function add($post){
        Db::startTrans();
        try {

            $now = time();
            $data = [
                'type'          => $post['type'],
                'name'          => $post['name'],
                'machine_code'  => $post['machine_code'],
                'private_key'   => $post['private_key'],
                'print_number'  => $post['print_number'],
                'auto_print'    => $post['auto_print'],
                'status'        => $post['status'],
                'create_time'   => $now,
                'update_time'   => $now,
                'del'           => 0,
            ];
            Db::name('printer')->insert($data);

            $printer_config = Db::name('printer_config')->where(['id'=>$post['type']])->field('client_id,client_secret')->find();
            $yly_print = new YlyPrinter($printer_config['client_id'],$printer_config['client_secret']);

            //调用易联云添加打印机
            $yly_print->addPrinter($post['machine_code'],$post['private_key'],$post['name']);

            //获取打印机状态，设置logo
            $response = $yly_print->getPrintStatus($post['machine_code']);
            //打印机在线时，设置logo
            $yly_template = ConfigServer::get('printer', 'yly_template', []);
            if(1 == $response->body->state && isset($yly_template['logo'])){

                $yly_print->setIcon($post['machine_code'],UrlServer::getFileUrl($yly_template['logo']));
            }

            Db::commit();
            return true;


        }catch (\Exception $e){


            $msg = json_decode($e->getMessage(),true);
            if($msg && isset($msg['error'])){
                return '易联云：'.$msg['error_description'];
            }
            if(18 === $e->getCode()){
                //todo token过期重新拿
                Cache::rm('yly_access_token');
                Cache::rm('yly_refresh_token');
            };
            Db::rollback();
            return '易联云：'.$e->getMessage();
        }
    }
    /**
     * Notes:编辑打印机
     * @param $post
     * @return bool|string
     * @author: cjhao 2021/4/24 14:44
     */
    public static function edit($post){
        Db::startTrans();
        try {

            $now = time();
            $data = [
                'name'          => $post['name'],
                'print_number'  => $post['print_number'],
                'status'        => $post['status'],
                'auto_print'    => $post['auto_print'],
                'update_time'   => $now,
            ];
            Db::name('printer')->where(['id'=>$post['id']])->update($data);

            //调用易联云，更新打印机
            $printer_config = Db::name('printer_config')->where(['id'=>$post['type']])->field('client_id,client_secret')->find();
            $yly_print = new YlyPrinter($printer_config['client_id'],$printer_config['client_secret']);

            $yly_print->addPrinter($post['machine_code'],$post['private_key'],$post['name']);

            //获取打印机状态，设置logo
            $response = $yly_print->getPrintStatus($post['machine_code']);
            //打印机在线时，设置logo
            $yly_template = ConfigServer::get('printer', 'yly_template', []);

            if(1 == $response->body->state && isset($yly_template['logo'])){
                $yly_print->setIcon($post['machine_code'],UrlServer::getFileUrl($yly_template['logo']));
            }
            Db::commit();
            return true;

        }catch (\Exception $e){


            $msg = json_decode($e->getMessage(),true);

            if($msg && isset($msg['error'])){
                return '易联云：'.$msg['error_description'];
            }
            if(18 === $e->getCode()){
                //todo token过期重新拿
                Cache::rm('yly_access_token');
                Cache::rm('yly_refresh_token');
            };
            Db::rollback();
            return '易联云：'.$e->getMessage();
        }
    }


    /**
     * Notes:获取打印机配置
     * @param $id
     * @return array|\PDOStatement|string|\think\Model|null
     * @author: cjhao 2021/4/24 14:44
     */
    public static function getPrinter($id){
        return Db::name('printer')->where(['del'=>0,'id'=>$id])->find();
    }

    /**
     * Notes:设置配置
     * @param $post
     * @return int|string
     * @author: cjhao 2021/4/24 14:44
     */
    public static function setConfig($post){
        $post['status'] = isset($post['status']) && $post['status'] == 'on' ? 1 : 0;
        if($post['status']){
            Db::name('printer_config')->where(['status'=>1])->update(['status'=>0]);
        }
        $update_data = [
            'client_id'     => $post['client_id'],
            'client_secret' => $post['client_secret'],
            'update_time'   => time(),
            'status'        => $post['status'],
        ];
        return Db::name('printer_config')->where(['id'=>$post['id']])->update($update_data);
    }

    /**
     * Notes:获取配置
     * @param $id
     * @return array|\PDOStatement|string|\think\Model|null
     * @author: cjhao 2021/4/24 14:45
     */
    public static function getConfig($id){
        return Db::name('printer_config')->where(['id'=>$id])->find();
    }

    /***
     * Notes:获取打印配置类型
     * @return array|\PDOStatement|string|\think\Collection
     * @author: cjhao 2021/4/24 14:44
     */
    public static function getTypeList(){
        return Db::name('printer_config')->where(['del'=>0])->field('id,name')->select();
    }

    /**
     * Notes:设置打印模板
     * @param $post
     * @return bool|string
     * @author: cjhao 2021/4/24 14:44
     */
    public static function setTemplate($post){
        try{

            $printer_config = Db::name('printer_config')->where(['id'=>$post['type']])->field('client_id,client_secret')->find();
            
            if($post['logo'] && $printer_config){
                $yly_print = new YlyPrinter($printer_config['client_id'],$printer_config['client_secret']);
                $printer_list = self::getPrinterList(0);
                //调用易联云，更新打印机
                $logo = UrlServer::getFileUrl($post['logo']);

                foreach ($printer_list as $printer){

                    //获取打印机状态，设置logo
                    $response = $yly_print->getPrintStatus($printer['machine_code']);

                    if(1 == $response->body->state){
                        $yly_print->setIcon($printer['machine_code'],$logo);
                    }

                }

            }
            ConfigServer::set('printer', 'yly_template', $post);
            return true;
        }catch (\Exception $e){
            return $e->getMessage();
        }


    }

    /**
     * Notes:获取打印机列表
     * @param bool $status
     * @return array
     * @author: cjhao 2021/4/24 14:43
     */
    public static function getPrinterList($status = false){
        $where[] = ['del','=',0];
        $where[] = ['type','=',1];
        $status && $where[] = ['status','=',1];
        return Db::name('printer')
                ->where($where)
                ->column('machine_code,private_key,print_number','machine_code');
    }

    /**
     * Notes:测试打印
     * @param $post
     * @return bool|string
     * @author: cjhao 2021/4/24 14:43
     */
    public static function testPrint($post){
        try {

            $printer = Db::name('printer')->where(['id'=>$post['id'],'del'=>0])->find();

            $printer_config = Db::name('printer_config')->where(['id'=>$post['type']])->field('client_id,client_secret')->find();
            $yly_print = new YlyPrinter($printer_config['client_id'],$printer_config['client_secret']);

            //获取打印机状态
            $response = $yly_print->getPrintStatus($printer['machine_code']);

            if(1 == $response->body->state){
                $data = static::testData();
                $template_config = ConfigServer::get('printer', 'yly_template', []);
                $yly_print->ylyPrint([['machine_code'=>$printer['machine_code'],'print_number'=>$printer['print_number']]],$data,$template_config);
                return true;
            }
            $msg = '打印机离线';

            if(2 == $response->body->state){
                $msg = '打印机缺纸';
            }
            throw new Exception($msg);
        }catch (\Exception $e){


            $msg = json_decode($e->getMessage(),true);
            if($msg && isset($msg['error'])){
                return '易联云：'.$msg['error_description'];
            }
            if(18 === $e->getCode()){
                //todo token过期重新拿
                Cache::rm('yly_access_token');
                Cache::rm('yly_refresh_token');
            };
            return '易联云：'.$e->getMessage();
        }


    }

    /**
     * Notes:测试打印数据
     * @return array
     * @author: cjhao 2021/4/24 14:45
     */
    public static function testData(){
        $order = [
            'order_sn'          => date("Ymd").'88888888888',
            'create_time'       => date('Y-m-d H:i:s'),
            'consignee'         => '张先生',
            'mobile'            => '138888888888',
            'delivery_address'  => '广东省广州市天河区XXXX科技园',
            'user_remark'       => '这是用户备注',
            'order_goods'       => [
                [
                    'name'          => 'iPhone 11',
                    'spec_value_str'=> '全网通256G，银色',
                    'goods_num'     => '88',
                    'goods_price'   => '3689',
                    'total_price'   => '88888',
                ],
                [
                    'name'          => '小米手机Plus',
                    'spec_value_str'=> '全网通256G，黑色',
                    'goods_num'     => '88',
                    'goods_price'   => '3689',
                    'total_price'   => '88888',
                ],
                [
                    'name'          => '华为 P40',
                    'spec_value_str'=> '全网通256G，黑色',
                    'goods_num'     => '88',
                    'goods_price'   => '3689',
                    'total_price'   => '88888',
                ],
            ],
            'total_amount'      => '888888',  //商品总价
            'discount_amount'   => '80',      //优惠金额
            'shipping_price'    => '12',      //应付
            'order_amount'      => '222'      //应付金额
        ];
        return $order;
    }

    /**
     * Notes:删除打印机
     * @param $id
     * @return bool|string
     * @author: cjhao 2021/4/24 14:45
     */
    public static function del($id){
        Db::startTrans();
        try {

            Db::name('printer')->where(['id'=>$id])->update(['del'=>1,'update_time'=>time()]);
            $printer = Db::name('printer')->where(['id'=>$id])->find();
            $printer_config = Db::name('printer_config')->where(['id'=>$printer['type']])->field('client_id,client_secret')->find();
            //调用易联云接口，删除打印机
            $yly_print = new YlyPrinter($printer_config['client_id'],$printer_config['client_secret']);
            $yly_print->deletePrinter($printer['machine_code']);

            Db::commit();
            return true;

        }catch (\Exception $e){

            $msg = json_decode($e->getMessage(),true);
            if($msg && isset($msg['error'])){
                return '易联云：'.$msg['error_description'];
            }
            if(18 === $e->getCode()){
                //todo token过期重新拿
                Cache::rm('yly_access_token');
                Cache::rm('yly_refresh_token');
            };
            Db::rollback();
            return '易联云：'.$e->getMessage();
        }
    }

}
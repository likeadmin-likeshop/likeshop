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

namespace app\admin\logic;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;

class GoodsLogic
{
    /*
     * 商品统计
     */
    public static function statistics(){
        $goods_list = Db::name('goods')
                    ->where(['del'=>0])
                    ->field('id,status,stock,stock_warn')
                    ->select();
        $goods = [
            'sell'      => 0,       //销售中
            'warehouse' => 0,       //仓库中
            'warn'      => 0,       //库存预警
            'recycle'   => 0,       //回收站
        ];
        foreach ($goods_list as $item){
            //库存预警
            if($item['stock_warn'] && $item['stock_warn'] > $item['stock']) $goods['warn'] ++;

            switch ($item['status']){
                case 1://销售中
                    $goods['sell']++;
                    break;
                case 0://仓库中
                    $goods['warehouse']++;
                    break;
                case -1://库存预警
                    $goods['recycle']++;
            }
        }
        return $goods;
    }

    /*
     * 商品列表
     */
    public static function lists($get)
    {
        $where = [];
        $where[] = ['del', '=', '0'];
        if($get['type']){
            switch ($get['type']){
                case 1:     //销售中
                    $where[] = ['status','=',1];
                    break;
                case 2:     //仓库中
                    $where[] = ['status','=',0];
                    break;
                case 3:     //库存预警
                    $where[] = ['stock_warn','>',0];
                    $where[] = ['stock','exp', Db::raw('<stock_warn')];
                    break;
                case 4:     //回收站
                    $where[] = ['status','=',-1];
                    break;
            }
        }

        if (isset($get['keyword']) && $get['keyword']) {
            $where[] = ['name', 'like', '%' . $get['keyword'] . '%'];
        }
        if(isset($get['code']) && $get['code']){
            $where[] = ['code','like','%'.$get['code'].'%'];
        }
        if(isset($get['supplier_id']) && $get['supplier_id']){
            $where[] = ['supplier_id','=',$get['supplier_id']];
        }
        if(isset($get['category_id']) && $get['category_id']){
            $where[] = ['first_category_id|second_category_id|third_category_id','=',$get['category_id']];
        }

        $goods_count = Db::name('goods')
                ->where($where)
                ->count();

        $goods_list = Db::name('goods')
                ->where($where)
                ->page($get['page'], $get['limit'])
                ->field('*,virtual_sales_sum+sales_sum as total_sales_sum')
                ->order('id desc')
                ->select();

        $goods_category_list = Db::name('goods_category')->where(['del'=>0,'level'=>3])->column('name','id');

        foreach ($goods_list as &$item) {

            $item['type'] = $get['type'];
            $item['cat_name'] = '';
            $item['commission_status'] = '关闭';
            if($item['is_commission']){
                $item['commission_status'] = '开启';
            }
            $item['price'] = '￥'.$item['min_price'];
            if(isset($goods_category_list[$item['third_category_id']])){
                $item['cat_name'] = $goods_category_list[$item['third_category_id']];
            }
            if($item['spec_type'] == 2 && $item['max_price'] !== $item['min_price']){
                $item['price'] = '￥'.$item['min_price'].'~'.'￥'.$item['max_price'];
            }
            $item['create_time_desc'] = date('Y-m-d H:i:s',$item['create_time']);
            $item['first_ratio_desc'] = 0;
            $item['second_ratio_desc'] = 0;
            $item['three_ratio_desc'] = 0;
            $item['region_ratio_desc'] = 0;
            $item['shareholder_ratio_desc'] = 0;

            if($item['first_ratio'] > 0) $item['first_ratio_desc'] = $item['first_ratio']  .'%';
            if($item['second_ratio'] > 0) $item['second_ratio_desc'] = $item['second_ratio']  .'%';
            if($item['three_ratio'] > 0) $item['three_ratio_desc'] = $item['three_ratio']  .'%';
            if($item['region_ratio'] > 0) $item['region_ratio_desc'] = $item['region_ratio']  .'%';
            if($item['shareholder_ratio'] > 0) $item['shareholder_ratio_desc'] = $item['shareholder_ratio'] /100 .'%';

            $item['image'] = UrlServer::getFileUrl($item['image']);
        }

        return ['count' => $goods_count, 'list' => $goods_list];
    }

    /*
     * 删除商品
     */
    public static function del($id)
    {

        $data = [
            'del' => 1,
            'update_time' => time()
        ];
        return Db::name('goods')->where(['del' => 0, 'id' => $id])->update($data);
    }
    /**
     * 添加商品
     * @param $post
     * @param $spec_lists
     * @return bool
     */
    public static function add($post, $spec_lists)
    {

        try {
            Db::startTrans();
            $time = time();

            //算出最大最小价格
            if ($post['spec_type'] == 1) {
                $max_price = $post['one_price'];
                $min_price = $post['one_price'];
                $market_price = $post['one_market_price'];
                $total_stock = $post['one_stock'];
            } else {
                $max_price = max($post['price']);
                $min_price = min($post['price']);
                $market_price = max($post['market_price']);
                $total_stock = array_sum($post['stock']);
            }
            $free_shipping = $post['free_shipping_type'] == 2 ? $post['free_shipping']: '';
            $free_shipping_template_id = $post['free_shipping_type'] == 3 ? $post['free_shipping_template_id']: '';

            // 替换内容中图片地址
            $domain = UrlServer::getFileUrl('/');
            $post['content'] = str_replace($domain, '/', $post['content']);

            //赠送积分类型
            $give_integral_type = $post['give_integral_type'] ?? 0;
            switch ($give_integral_type){
                case 1:
                    $give_integral = $post['give_integral_num'];
                    break;
                case 2:
                    $give_integral = $post['give_integral_ratio'];
                    break;
                default:
                    $give_integral = 0;
            }

            //写入主表
            $data = [
                'name'                      => $post['name'],
                'code'                      => $post['code'],
                'first_category_id'         => $post['first_category_id'],
                'second_category_id'        => $post['second_category_id'],
                'third_category_id'         => $post['third_category_id'],
                'brand_id'                  => $post['brand_id'],
                'supplier_id'               => $post['supplier_id'],
                'image'                     => $post['image'],
                'video'                     => $post['video'] ?? '',
                'poster'                    => $post['poster'] ?? '',
                'remark'                    => $post['remark'],
                'content'                   => $post['content'],
                'max_price'                 => $max_price,
                'min_price'                 => $min_price,
                'market_price'              => $market_price,
                'stock'                     => $total_stock,
                'status'                    => $post['status'],
                'virtual_sales_sum'         => $post['virtual_sales_sum'],
                'stock_warn'                => $post['stock_warn'],
                'is_show_stock'             => $post['is_show_stock'],
                'free_shipping_type'        => $post['free_shipping_type'],
                'free_shipping'             => $free_shipping,
                'free_shipping_template_id' => $free_shipping_template_id,
                'is_commission'             => $post['is_commission'],
                'first_ratio'               => $post['first_ratio'],
                'second_ratio'              => $post['second_ratio'],
                'three_ratio'               => $post['three_ratio'],
                'is_new'                    => isset($post['is_new']) && $post['is_new'] == 'on' ? 1 : 0,
                'is_best'                   => isset($post['is_best']) && $post['is_best'] == 'on' ? 1 : 0,
                'is_like'                   => isset($post['is_like']) && $post['is_like'] == 'on' ? 1 : 0,
//                'is_share_bouns'            => $post['is_share_bouns'],
//                'region_ratio'              => $post['region_ratio'],
//                'shareholder_ratio'         => $post['shareholder_ratio'],
                'is_integral'               => $post['is_integral'],
                'is_member'                 => $post['is_member'],
                'give_integral_type'        => $give_integral_type,
                'give_integral'             => $give_integral,
                'spec_type'                 => $post['spec_type'],
                'create_time'               => $time
            ];
            $goods_id = Db::name('goods')->insertGetId($data);

            //写入图片表
            $data = [];
            foreach ($post['goods_image'] as $k => $v) {
                $data[] = [
                    'goods_id' => $goods_id,
                    'uri' => $v,
                ];
            }
            Db::name('goods_image')->insertAll($data);


            //写入规格表
            if ($post['spec_type'] == 1) {
                //单规格写入
                $goods_spec_id = Db::name('goods_spec')
                    ->insertGetId(['goods_id' => $goods_id, 'name' => '默认']);
                $goods_spec_value_id = Db::name('goods_spec_value')
                    ->insertGetId(['spec_id' => $goods_spec_id, 'goods_id' => $goods_id, 'value' => '默认']);

                $data = [
                    'image'             => $post['one_spec_image'],
                    'goods_id'          => $goods_id,
                    'spec_value_ids'    => $goods_spec_value_id,
                    'spec_value_str'    => '默认',
                    'market_price'      => $post['one_market_price'],
                    'price'             => $post['one_price'],
                    'cost_price'        => $post['one_cost_price'],
                    'stock'             => $post['one_stock'],
                    'volume'            => $post['one_volume'],
                    'weight'            => $post['one_weight'],
                    'bar_code'          => $post['one_bar_code'],
                ];
                Db::name('goods_item')
                    ->insert($data);
            } else {
                //多规格写入
                $goods_specs = [];
                foreach ($post['spec_name'] as $k => $v) {
                    $temp = ['goods_id' => $goods_id, 'name' => $v];
                    $goods_specs[] = $temp;
                }
                Db::name('goods_spec')->insertAll($goods_specs);
                $goods_spec_name_key_id = Db::name('goods_spec')
                    ->where(['goods_id' => $goods_id])
                    ->where('name', 'in', $post['spec_name'])
                    ->column('id', 'name');

                $data = [];
                foreach ($post['spec_values'] as $k => $v) {
                    $row = explode(',', $v);
                    foreach ($row as $k2 => $v2) {
                        $temp = [
                            'goods_id' => $goods_id,
                            'spec_id' => $goods_spec_name_key_id[$post['spec_name'][$k]],
                            'value' => $v2,
                        ];
                        $data[] = $temp;
                    }
                }

                Db::name('goods_spec_value')->insertAll($data);
                $goods_spec_name_value_id = Db::name('goods_spec_value')
                    ->where(['goods_id' => $goods_id])
                    ->column('id', 'value');

                foreach ($spec_lists as $k => $v) {
                    $spec_lists[$k]['spec_value_ids'] = '';
                    $temp = explode(',', $v['spec_value_str']);

                    foreach ($temp as $k2 => $v2) {
                        $spec_lists[$k]['spec_value_ids'] .= $goods_spec_name_value_id[$v2] . ',';
                    }
                    $spec_lists[$k]['spec_value_ids'] = trim($spec_lists[$k]['spec_value_ids'], ',');
                    $spec_lists[$k]['image'] = $spec_lists[$k]['spec_image'];
                    $spec_lists[$k]['goods_id'] = $goods_id;
                    unset($spec_lists[$k]['spec_image']);
                    unset($spec_lists[$k]['spec_id']);
                    unset($spec_lists[$k]['item_id']);
                }
                Db::name('goods_item')->insertAll($spec_lists);
            }
            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }
    }


    /**
     * 编辑商品
     * @param $post
     * @param $spec_lists
     * @return bool
     */
    public static function edit($post, $spec_lists)
    {

        try {
            Db::startTrans();
            $time = time();

            //算出最大最小价格
            if ($post['spec_type'] == 1) {
                $max_price = $post['one_price'];
                $min_price = $post['one_price'];
                $market_price = $post['one_market_price'];
                $total_stock = $post['one_stock'];
            } else {
                $max_price = max($post['price']);
                $min_price = min($post['price']);
                $market_price = max($post['market_price']);
                $total_stock = array_sum($post['stock']);
            }


            $free_shipping = $post['free_shipping_type'] == 2 ? $post['free_shipping']: '';
            $free_shipping_template_id = $post['free_shipping_type'] == 3 ? $post['free_shipping_template_id']: '';

            $old_spec_type = Db::name('goods')
                ->where('id', $post['goods_id'])
                ->value('spec_type');

            // 替换内容中图片地址
            $domain = UrlServer::getFileUrl('/');
            $post['content'] = str_replace($domain, '/', $post['content']);

            //赠送积分
            $give_integral_type = $post['give_integral_type'] ?? 0;
            switch ($give_integral_type){
                case 1:
                    $give_integral = $post['give_integral_num'];
                    break;
                case 2:
                    $give_integral = $post['give_integral_ratio'];
                    break;
                default:
                    $give_integral = 0;
            }

            //写入主表
            $data = [
                'name'                      => $post['name'],
                'code'                      => $post['code'],
                'first_category_id'         => $post['first_category_id'],
                'second_category_id'        => $post['second_category_id'],
                'third_category_id'         => $post['third_category_id'],
                'brand_id'                  => $post['brand_id'],
                'supplier_id'               => $post['supplier_id'],
                'image'                     => $post['image'],
                'video'                     => $post['video'] ?? '',
                'poster'                    => $post['poster'] ?? '',
                'remark'                    => $post['remark'],
                'content'                   => $post['content'],
                'max_price'                 => $max_price,
                'min_price'                 => $min_price,
                'market_price'              => $market_price,
                'stock'                     => $total_stock,
                'status'                    => $post['status'],
                'virtual_sales_sum'         => $post['virtual_sales_sum'],
                'stock_warn'                => $post['stock_warn'],
                'is_show_stock'             => $post['is_show_stock'],
                'free_shipping_type'        => $post['free_shipping_type'],
                'free_shipping'             => $free_shipping,
                'free_shipping_template_id' => $free_shipping_template_id,
                'is_commission'             => $post['is_commission'],
                'first_ratio'               => $post['first_ratio'],
                'second_ratio'              => $post['second_ratio'],
                'three_ratio'               => $post['three_ratio'],
                'is_new'                    => isset($post['is_new']) && $post['is_new'] == 'on' ? 1 : 0,
                'is_best'                   => isset($post['is_best']) && $post['is_best'] == 'on' ? 1 : 0,
                'is_like'                   => isset($post['is_like']) && $post['is_like'] == 'on' ? 1 : 0,
//                'is_share_bouns'            => $post['is_share_bouns'],
//                'region_ratio'              => $post['region_ratio'],
//                'shareholder_ratio'         => $post['shareholder_ratio'],
                'is_integral'               => $post['is_integral'],
                'is_member'                 => $post['is_member'],
                'give_integral_type'        => $give_integral_type,
                'give_integral'             => $give_integral,
                'spec_type'                 => $post['spec_type'],
                'update_time'               => $time
            ];

            Db::name('goods')
                ->where(['id' => $post['goods_id']])
                ->update($data);

            //重新更新图片表
            Db::name('goods_image')
                ->where(['goods_id' => $post['goods_id']])
                ->delete();
            $data = [];
            foreach ($post['goods_image'] as $k => $v) {
                $data[] = [
                    'goods_id' => $post['goods_id'],
                    'uri' => $v,
                ];
            }
            Db::name('goods_image')->insertAll($data);

            //写入规格表
            if ($post['spec_type'] == 1) {

                //单规格写入
                if ($old_spec_type == 1) {
                    //原来是单规格
                    $data = [
                        'image'             => $post['one_spec_image'],
                        'price'             => $post['one_price'],
                        'market_price'      => $post['one_market_price'],
                        'price'             => $post['one_price'],
                        'cost_price'        => $post['one_cost_price'],
                        'stock'             => $post['one_stock'],
                        'volume'            => $post['one_volume'],
                        'weight'            => $post['one_weight'],
                        'bar_code'          => $post['one_bar_code'],
                    ];
                    Db::name('goods_item')
                        ->where(['goods_id' => $post['goods_id']])
                        ->update($data);
                } else {
                    //原来非单规格
                    //删除多规格
                    Db::name('goods_spec')
                        ->where('goods_id', $post['goods_id'])
                        ->delete();
                    Db::name('goods_spec_value')
                        ->where('goods_id', $post['goods_id'])
                        ->delete();
                    Db::name('goods_item')
                        ->where('goods_id', $post['goods_id'])
                        ->delete();
                    $goods_spec_id = Db::name('goods_spec')
                        ->insertGetId(['goods_id' => $post['goods_id'], 'name' => '默认']);
                    $goods_spec_value_id = Db::name('goods_spec_value')
                        ->insertGetId(['spec_id' => $goods_spec_id, 'goods_id' => $post['goods_id'], 'value' => '默认']);
                    $data = [
                        'image'             => $post['one_spec_image'],
                        'goods_id'          => $post['goods_id'],
                        'spec_value_ids'    => $goods_spec_value_id,
                        'spec_value_str'    => '默认',
                        'market_price'      => $post['one_market_price'],
                        'price'             => $post['one_price'],
                        'stock'             => $post['one_stock'],
                        'volume'            => $post['one_volume'],
                        'weight'            => $post['one_weight'],
                        'bar_code'          => $post['one_bar_code'],
                    ];
                    Db::name('goods_item')
                        ->insert($data);
                }

            } else {

                $goods_specs = [];
                foreach ($post['spec_name'] as $k => $v) {
                    $temp = ['goods_id' => $post['goods_id'], 'name' => $v, 'spec_id' => $post['spec_id'][$k]];
                    $goods_specs[] = $temp;
                }
                $new_spec_name_ids = [];
                foreach ($goods_specs as $k => $v) {
                    if ($v['spec_id']) {
                        //更新规格名
                        Db::name('goods_spec')
                            ->where(['goods_id' => $post['goods_id'], 'id' => $v['spec_id']])
                            ->update(['name' => $v['name']]);
                        $new_spec_name_ids[] = $v['spec_id'];
                    } else {
                        //添加规格名
                        $new_spec_name_ids[] = Db::name('goods_spec')
                            ->insertGetId(['goods_id' => $post['goods_id'], 'name' => $v['name']]);
                    }
                }
                //删除规格名
                $all_spec_ids = Db::name('goods_spec')
                    ->where('goods_id', $post['goods_id'])
                    ->column('id');
                $del_spec_name_ids = array_diff($all_spec_ids, $new_spec_name_ids);
                if (!empty($del_spec_name_ids)) {
                    Db::name('goods_spec')
                        ->where('goods_id', $post['goods_id'])
                        ->where('id', 'in', $del_spec_name_ids)
                        ->delete();
                }


                $new_spec_value_ids = [];
                $goods_spec_name_key_id = Db::name('goods_spec')
                    ->where(['goods_id' => $post['goods_id']])
                    ->where('name', 'in', $post['spec_name'])
                    ->column('id', 'name');
                foreach ($post['spec_values'] as $k => $v) {
                    $value_id_row = explode(',', $post['spec_value_ids'][$k]);
                    $value_row = explode(',', $v);
                    foreach ($value_row as $k2 => $v2) {
                        $temp = [
                            'goods_id' => $post['goods_id'],
                            'spec_id' => $goods_spec_name_key_id[$post['spec_name'][$k]],
                            'value' => $v2,
                        ];
                        if ($value_id_row[$k2]) {
                            //更新规格值
                            Db::name('goods_spec_value')
                                ->where(['id' => $value_id_row[$k2]])
                                ->update($temp);
                            $new_spec_value_ids[] = $value_id_row[$k2];
                        } else {
                            //添加规格值
                            $new_spec_value_ids[] = Db::name('goods_spec_value')
                                ->insertGetId($temp);
                        }
                    }
                }
                $all_spec_value_ids = Db::name('goods_spec_value')
                    ->where('goods_id', $post['goods_id'])
                    ->column('id');
                $del_spec_value_ids = array_diff($all_spec_value_ids, $new_spec_value_ids);
                if (!empty($del_spec_value_ids)) {
                    //删除规格值
                    Db::name('goods_spec_value')
                        ->where('goods_id', $post['goods_id'])
                        ->where('id', 'in', $del_spec_value_ids)
                        ->delete();
                }

                $new_item_id = [];
                $goods_spec_name_value_id = Db::name('goods_spec_value')
                    ->where(['goods_id' => $post['goods_id']])
                    ->column('id', 'value');
                foreach ($spec_lists as $k => $v) {
                    $spec_lists[$k]['spec_value_ids'] = '';
                    $temp = explode(',', $v['spec_value_str']);
                    foreach ($temp as $k2 => $v2) {
                        $spec_lists[$k]['spec_value_ids'] .= $goods_spec_name_value_id[$v2] . ',';
                    }
                    $spec_lists[$k]['spec_value_ids'] = trim($spec_lists[$k]['spec_value_ids'], ',');
                    $spec_lists[$k]['image'] = str_replace(UrlServer::getFileUrl('/'), '', $spec_lists[$k]['spec_image']);
                    unset($spec_lists[$k]['spec_image']);
                    $spec_lists[$k]['goods_id'] = $post['goods_id'];
                    unset($spec_lists[$k]['spec_id']);
                    $item_id = $spec_lists[$k]['item_id'];
                    unset($spec_lists[$k]['item_id']);
                    if ($item_id) {
                        Db::name('goods_item')
                            ->where(['id' => $item_id])
                            ->update($spec_lists[$k]);
                        $new_item_id[] = $item_id;
                    } else {
                        $new_item_id[] = Db::name('goods_item')
                            ->insertGetId($spec_lists[$k]);
                    }
                }
                $all_item_id = Db::name('goods_item')
                    ->where('goods_id', $post['goods_id'])
                    ->column('id');
                $del_item_ids = array_diff($all_item_id, $new_item_id);
                if (!empty($del_item_ids)) {
                    //删除规格值
                    Db::name('goods_item')
                        ->where('goods_id', $post['goods_id'])
                        ->where('id', 'in', $del_item_ids)
                        ->delete();
                }
            }
            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }
    }
    /*
     * 商品信息
     */
    /**
     * 获取商品信息
     * @param $goods_id
     * @return array
     */
    public static function info($goods_id)
    {

        $info['base'] = Db::name('goods')
            ->where(['id' => $goods_id])
            ->withAttr('abs_image', function ($value, $data) {
                return UrlServer::getFileUrl($data['image']);
            })
            ->withAttr('content', function ($value){
                $preg = '/(<img .*?src=")[^https|^http](.*?)(".*?>)/is';
                $local_url = UrlServer::getFileUrl('/');
                return  preg_replace($preg, "\${1}$local_url\${2}\${3}",$value);
            })
            ->withAttr('abs_video',function ($value,$data){
                if($data['video']){
                    return UrlServer::getFileUrl($data['video']);
                }
                return '';
            })
            ->withAttr('abs_poster',function ($value,$data){
                if($data['poster']){
                    return UrlServer::getFileUrl($data['poster']);
                }
                return '';
            })
            ->append(['abs_image','abs_video'])->find();
        $info['base']['goods_image'] = Db::name('goods_image')
            ->where(['goods_id' => $goods_id])
            ->withAttr('abs_image', function ($value, $data) {
                return UrlServer::getFileUrl($data['uri']);})
            ->append(['abs_image'])
            ->select();

        $info['item'] = Db::name('goods_item')
            ->where(['goods_id' => $goods_id])
            ->withAttr('abs_image', function ($value, $data) {
                return UrlServer::getFileUrl($data['image']);
            })->append(['abs_image'])
            ->select();

        $info['spec'] = Db::name('goods_spec')
            ->where(['goods_id' => $goods_id])
            ->select();

        $spec_value = Db::name('goods_spec_value')
            ->where(['goods_id' => $goods_id])
            ->select();

        $data = [];
        foreach ($spec_value as $k => $v) {
            $data[$v['spec_id']][] = $v;
        }
        foreach ($info['spec'] as $k => $v) {
            $info['spec'][$k]['values'] = isset($data[$v['id']]) ? $data[$v['id']] : [];
        }
        return $info;
    }

    /**
     * Notes: 上架 / 下架 商品
     * @author 张无忌(2021/1/11 14:35)
     * @param array $ids (要更新的数据ID)
     * @param int $type (类型[0=下架, 1=上架])
     * @return bool
     */
    public static function upperOrLower(array $ids, int $type=0)
    {
        if (empty($ids)) {
            return false;
        }

        try {
            $result = Db::name('goods')->whereIn('id', $ids)->update([
                'status'      => $type,
                'update_time' => time()
            ]);
            return $result ? true : false;
        } catch (\Exception $e) {
            return false;
        }
    }
}
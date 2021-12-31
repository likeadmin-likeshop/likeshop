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
namespace app\api\logic;
use app\api\model\User;
use app\common\logic\LogicBase;
use app\common\logic\NoticeLogic;
use app\common\model\AccountLog;
use app\common\model\AfterSale;
use app\common\model\DistributionOrder;
use app\common\model\Order;
use app\common\model\TeamFollow;
use app\common\server\ConfigServer;
use app\common\server\storage\Driver as StorageDriver;
use app\common\server\UrlServer;
use app\common\server\WeChatServer;
use EasyWeChat\Factory;
use EasyWeChat\Kernel\Exceptions\Exception;
use think\Db;
use app\common\logic\AccountLogLogic;

class UserLogic extends LogicBase {
    public static function center($user_id){
        $user = User::get($user_id);
        //待支付
        $user->wait_pay = Db::name('order')->where(['del'=>0,'user_id'=>$user_id,'order_status'=>Order::STATUS_WAIT_PAY,'pay_status'=>0])->count();
        //待发货
        $user->wait_delivery = Db::name('order')->where(['del'=>0,'user_id'=>$user_id,'order_status'=>[Order::STATUS_WAIT_DELIVERY],'pay_status'=>1])->count();
        //待收货
        $user->wait_take = Db::name('order')->where(['del'=>0,'user_id'=>$user_id,'order_status'=>[Order::STATUS_WAIT_RECEIVE],'pay_status'=>1])->count();
        //待评论
        $user->wait_comment = Db::name('order o')
            ->join('order_goods og','o.id = og.order_id')
            ->where(['del'=>0,'user_id'=>$user_id,'order_status'=>Order::STATUS_FINISH,'is_comment'=>0])
            ->count('og.id');
        //售后中
        $user->after_sale = Db::name('after_sale')
            ->where(['del'=>0,'user_id'=>$user_id])
            ->where('status','<>',AfterSale::STATUS_SUCCESS_REFUND)
            ->count();
        $user->coupon = Db::name('coupon_list')->where(['user_id'=>$user_id,'del'=>0,'status'=>0])->count();
        //分销开关
        $user->distribution_setting = ConfigServer::get('distribution', 'is_open',1);
        //消息数量
        $user->notice_num = NoticeLogic::unRead($user_id) ? 1 : 0;
        //下个会员等级提示
        $user_level = Db::name('user_level')
            ->where([
                ['id','>',$user->getData('level')],
                ['del','=',0]
            ])->order('growth_value asc')
            ->find();
        $user['next_level_tips'] = '';
        if($user_level){
            $user['next_level_tips'] = '距离升级还差'.intval($user_level['growth_value'] - $user['user_growth']);
        }
        // 是否设置支付密码
        $user['hasPayPassword'] = $user['pay_password'] ? 1: 0;
        $user->visible(['id','nickname','sn','avatar', 'mobile', 'hasPayPassword','next_level_tips','user_money','total_order_amount','total_recharge_amount',
            'coupon','user_integral','level','wait_pay','wait_take','wait_delivery',
            'wait_comment','after_sale', 'distribution_setting', 'distribution_code', 'notice_num']);

        return $user;
    }

    public static function accountLog($user_id,$source,$type,$page,$size){
        $source_type = '';
        $where[] = ['user_id','=',$user_id];
        switch ($source){
            case 1:
                $source_type = AccountLog::money_change;
                break;
            case 2:
                $source_type = AccountLog::integral_change;
                break;
            case 3:
                $source_type = AccountLog::growth_change;

        }
        $where[] = ['source_type','in',$source_type];
        if($type){
            $where[] = ['change_type','=',$type];
        }
        $accountLog = new AccountLog();
        $count = $accountLog
            ->where($where)
            ->count();
        $list = $accountLog
            ->where($where)
            ->page($page,$size)
            ->order('id desc')
            ->field('id,change_amount,source_type,change_type,create_time')
            ->select();
        $more = is_more($count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $list,
            'page_no'       => $page,
            'page_size'     => $size,
            'count'         => $count,
            'more'          => $more
        ];
        return $data;
    }
    //获取用户信息
    public static function getUserInfo($user_id)
    {
        $info = User::where(['id' => $user_id])
            ->field('id,sn,nickname,avatar,mobile,sex,create_time')
            ->find();
        $info['create_time'] = date('Y-m-d H:i:s');
        return $info;
    }

    //设置个人信息
    public static function setUserInfo($user_id, $data)
    {
        $field = $data['field'];
        $value = $data['value'];
        $res = Db::name('user')
            ->where(['id'=> $user_id])
            ->update([$field => $value]);
        return $res;
    }


    //修改手机号
    public static function changeMobile($user_id, $data)
    {
        $user = User::get($user_id);
        $user->mobile = $data['new_mobile'];
        $user->save();
        return $user;
    }


    //获取微信手机号
    public static function getMobileByMnp($post)
    {
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $response = $app->auth->session($post['code']);
            if (!isset($response['session_key'])) {
                throw new Exception();
            }
            $response = $app->encryptor->decryptData($response['session_key'], $post['iv'], $post['encrypted_data']);
            return self::dataSuccess('', $response);
        } catch (Exception $e) {
            return self::dataError('失败:' . $e->getMessage());
        }
    }


    //我的粉丝列表
    public static function fans($user_id, $get, $page, $size)
    {
        $where = [];
        if (isset($get['keyword']) && $get['keyword'] != ''){
            $where[] = ['nickname|mobile','like','%'.$get['keyword'].'%'];
        }

        //查询条件
        $type = $get['type'] ?? 'all';
        switch ($type){
            case 'first':
                $where[] = ['first_leader', '=', $user_id];
                break;
            case 'second':
                $where[] = ['second_leader', '=', $user_id];
                break;
            default:
                $where[] = ['first_leader|second_leader', '=', $user_id];
        }

        $field = 'u.id, avatar, nickname, mobile, u.create_time, order_num as fans_order,
                  order_amount as fans_money, fans as fans_team';

        $count = Db::name('user u')
            ->field($field)
            ->leftJoin('user_distribution d', 'd.user_id = u.id')
            ->where($where)
            ->count();

        $lists = Db::name('user u')
            ->field($field)
            ->leftJoin('user_distribution d', 'd.user_id = u.id')
            ->where($where)
            ->page($page, $size)
            ->order(self::fansListsSort($get))
            ->select();

        foreach ($lists as &$item) {
            $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
            $item['fans_team'] = $item['fans_team'] ?? 0;
            $item['fans_order'] = $item['fans_order'] ?? 0;
            $item['fans_money'] = $item['fans_money'] ?? 0;
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            unset($item['fans'], $item['distribution_order_num'], $item['distribution_money']);
        }

        $data = [
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => is_more($count, $page, $size)
        ];
        return $data;
    }


    //粉丝列表排序
    public static function fansListsSort($get)
    {
        if (isset($get['fans']) && $get['fans'] != ''){
            return ['fans_team' =>  $get['fans'], 'u.id' => 'desc'];
        }

        if (isset($get['money']) && $get['money'] != ''){
            return ['fans_money' =>  $get['money'], 'u.id' => 'desc'];
        }

        if (isset($get['order']) && $get['order'] != ''){
            return ['fans_order' =>  $get['order'], 'u.id' => 'desc'];
        }

        return ['u.id' =>  'desc'];
    }


    public static function myWallet($user_id){
        $info = Db::name('user')
                ->where(['id'=>$user_id])
                ->field('user_money,total_order_amount,total_recharge_amount,user_growth')
                ->find();
        $info['open_racharge'] = ConfigServer::get('recharge','open_racharge',0);
        return $info;


    }

    public static function myTeam($user_id, $status, $page, $size)
    {
        $where = [
            ['follow_user_id', '=', (int)$user_id]
        ];

        if ($status !== -1 and $status !== '-1') {
            $where[] = ['f.status', '=', (int)$status];
        }

        $teamFollowModel = new TeamFollow();
        $count = $teamFollowModel->where($where)->alias('f')->count();
        $lists = $teamFollowModel->alias('f')
            ->field('g.name,g.image,gi.image as spec_image,gi.spec_value_str,gi.goods_id,og.goods_price, 
                o.total_amount,o.order_amount,o.total_num,o.pay_status,a.start_time,a.end_time,
                tf.need,tf.found_time,tf.found_end_time,tf.team_end_time,f.follow_time, 
                f.id,f.order_id,f.type,f.status')
            ->where($where)
            ->order('id', 'desc')
            ->join('order o', 'o.id = f.order_id')
            ->join('order_goods og', 'og.order_id = o.id')
            ->join('goods g', 'g.id = og.goods_id')
            ->join('goods_item gi', 'gi.id = og.item_id')
            ->join('team_found tf', 'tf.id = f.found_id')
            ->join('team_activity a', 'a.team_id = f.team_id')
            ->page($page, $size)
            ->select();

        $status_text = ['拼团中', '拼团成功', '拼团失败'];
        foreach ($lists as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
            $item['spec_image'] = $item['spec_image'] ? UrlServer::getFileUrl($item['spec_image']) : $item['image'];
            $item['type_text'] = $item['type'] ? '团长' : '团员';
            $item['status_text'] = $status_text[$item['status']];
            $item['team_end_time'] = $item['team_end_time'] ?  date('Y-m-d H:i:s', $item['team_end_time']) : '';
            $item['follow_time'] = date('Y-m-d H:i:s', $item['follow_time']);
        }

        return [
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' => is_more($count, $page, $size)
        ];
    }


    //更新微信信息
    public static function updateWechatInfo($user_id, $post)
    {
        Db::startTrans();
        try{
            $time = time();
            $avatar_url = $post['avatar'];
            $nickanme  = $post['nickname'];
            $sex = $post['sex'];

            $config = [
                'default' => ConfigServer::get('storage', 'default', 'local'),
                'engine'  => ConfigServer::get('storage_engine')
            ];

            $avatar = ''; //头像路径
            if ($config['default'] == 'local') {
                $file_name = md5($user_id . $time. rand(10000, 99999)) . '.jpeg';
                $avatar = download_file($avatar_url, 'uploads/user/avatar/', $file_name);
            } else {
                $avatar = 'uploads/user/avatar/' . md5($user_id . $time. rand(10000, 99999)) . '.jpeg';
                $StorageDriver = new StorageDriver($config);
                if (!$StorageDriver->fetch($avatar_url, $avatar)) {
                    throw new Exception( '头像保存失败:'. $StorageDriver->getError());
                }
            }

            $user = new User;
            $user->save([
                'nickname'  => $nickanme,
                'avatar' => $avatar,
                'sex' => $sex
            ],['id' => $user_id]);

            Db::commit();
            return true;

        } catch(\Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }
    }

    /**
     * 设置支付密码
     */
    public static function setPassword($data)
    {
      return Db::name('user')->where('id', $data['user_id'])->update([
        'pay_password' => $data['pay_password'],
        'update_time' => time()
      ]);
    }

    /**
     * 分销会员转账
     */
    public static function transfer($data)
    {
      $transferFrom = Db::name('user')->where('id', $data['user_id'])->find();

      // 判断余额是否充足
      if($transferFrom['user_money'] < $data['money']) {
        return [
          'code' => 0,
          'msg' => '余额不足'
        ];
      }
      // 判断支付密码是否正确
      if($transferFrom['pay_password'] != md5(trim($data['pay_password']))) {
        return [
          'code' => 0,
          'msg' => '支付密码错误'
        ];
      }
      // 收款人是否存在
      $transferTo = Db::name('user')->where('sn', $data['transferTo'])->find();
      if(!$transferTo) {
        $transferTo  = Db::name('user')->where('mobile', $data['transferTo'])->find();
      }
      if(!$transferTo) {
        return [
          'code' => 0,
          'msg' => '收款用户不存在'
        ];
      }
      // 不能自己转账给自己
      if($transferFrom['id'] == $transferTo['id']) {
        return [
          'code' => 0,
          'msg' => '不能自己转账给自己'
        ];
      }
      Db::startTrans();
      try{
        // 生成转账记录
        $transferId = Db::name('user_transfer')->insertGetId([
          'transfer_sn' => createSn('user_transfer', 'transfer_sn'),
          'transfer_from_id' => $transferFrom['id'],
          'transfer_to_id' => $transferTo['id'],
          'money' => $data['money'],
          'create_time' => time()
        ]);
        // 减 转账人 余额
        Db::name('user')->where('id', $transferFrom['id'])->setDec('user_money', $data['money']);
        // 记录 转账人 余额变动
        AccountLogLogic::AccountRecord($transferFrom['id'], $data['money'], 2, AccountLog::user_transfer_dec_balance, '会员转账支出', $transferId);
        // 加 收款人 余额
        Db::name('user')->where('id', $transferTo['id'])->setInc('user_money', $data['money']);
        // 记录 收款人 余额变动
        AccountLogLogic::AccountRecord($transferTo['id'], $data['money'], 1, AccountLog::user_transfer_inc_balance, '会员转账收入', $transferId);

        Db::commit();
        return [
          'code' => 1,
          'msg' => '转账成功'
        ];
      }catch(\Exception $e){
        Db::rollback();
        return [
          'code' => 0,
          'msg' => '转账失败'
        ];
      }
    }

    /**
     * 转账记录
     */
    public static function transferRecord($get)
    {
      switch($get['type']) {
        case 'all': // 全部(用户信息单独获取)
          $list = Db::name('user_transfer')
          ->where('transfer_from_id', $get['user_id'])
          ->whereOr('transfer_to_id', $get['user_id'])
          ->page($get['page_no'], $get['page_size'])
          ->order('create_time', 'desc')
          ->select();
          $count = Db::name('user_transfer')
          ->where('transfer_from_id', $get['user_id'])
          ->whereOr('transfer_to_id', $get['user_id'])
          ->count();
          break;
        case 'in': // 收入
          $list = Db::name('user_transfer')->alias('ut')
          ->field('ut.*, u.nickname, u.avatar, u.sn')
          ->leftJoin('user u', 'ut.transfer_from_id = u.id') // 转账人信息
          ->where('ut.transfer_to_id', $get['user_id'])
          ->page($get['page_no'], $get['page_size'])
          ->order('ut.create_time', 'desc')
          ->select();
          $count = Db::name('user_transfer')
          ->where('transfer_to_id', $get['user_id'])
          ->count();
          break;
        case 'out': // 支出
          $list = Db::name('user_transfer')->alias('ut')
          ->field('ut.*, u.nickname, u.avatar, u.sn')
          ->leftJoin('user u', 'ut.transfer_to_id = u.id') // 收款人信息
          ->where('ut.transfer_from_id', $get['user_id'])
          ->page($get['page_no'], $get['page_size'])
          ->order('ut.create_time', 'desc')
          ->select();
          $count = Db::name('user_transfer')
          ->where('transfer_from_id', $get['user_id'])
          ->count();
          break;
      }

      // 全部(获取用户信息)
      if($get['type'] == 'all'){
        foreach($list as &$item) {
          if($item['transfer_from_id'] == $get['user_id']) {
            // 自己为转账人，需获得收款人信息
            $user = Db::name('user')->where('id', $item['transfer_to_id'])->find();
            $item['nickname'] = $user['nickname'];
            $item['avatar'] = $user['avatar'];
            $item['sn'] = $user['sn'];
          }else if($item['transfer_to_id'] == $get['user_id']){
            // 自己为收款人，需获得转款人信息
            $user = Db::name('user')->where('id', $item['transfer_from_id'])->find();
            $item['nickname'] = $user['nickname'];
            $item['avatar'] = $user['avatar'];
            $item['sn'] = $user['sn'];
          }
        }
      }

      // 格式化数据
      foreach($list as &$item){
        $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
        $item['create_time'] = date('Y-m-d h:i:s', $item['create_time']);
        if($item['transfer_from_id'] == $get['user_id']) {
          $item['type'] = 0;
          $item['typeDesc'] = '支出';
        }else{
          $item['type'] = 1;
          $item['typeDesc'] = '收入';
        }
      }

      $result = [
        'count' => $count,
        'list' => $list,
        'more' => is_more($count, $get['page_no'], $get['page_size']),
        'page_no' => $get['page_no'],
        'page_size' => $get['page_size']
      ];
      return $result;
    }

}
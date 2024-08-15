<?php

namespace app\api\logic;


use app\api\model\Coupon;
use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\model\Luckdraw;
use app\common\model\LuckdrawRecord;
use app\common\model\User;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\helper\Time;

class LuckdrawLogic
{
    protected static $error; //错误信息

    /**
     * Notes: 错误错误信息
     * @author 张无忌(2021/1/12 16:01)
     * @return mixed
     */
    public static function getError()
    {
        return self::$error;
    }

    /**
     * Notes: 获取抽奖的奖品
     * @author 张无忌(2021/1/26 15:12)
     * @param $user_id
     * @return array
     */
    public static function getPrize($user_id)
    {
        $where = [
            ['is_delete', '=', 0],
            ['status', '=', 1]
        ];

        // 获取配置信息
        $config = [
            'need' => ConfigServer::get('luckdraw', 'need', 0),
            'limit' => ConfigServer::get('luckdraw', 'limit', 0),
            'status' => ConfigServer::get('luckdraw', 'status', ''),
            'rule' => ConfigServer::get('luckdraw', 'rule', 0),
            'show_win' => ConfigServer::get('luckdraw', 'show_win', 0)
        ];

        // 计算用户剩余抽奖次数
        list($startDay, $endDay) = Time::today();
        $recordCount = LuckdrawRecord::where([
            ['user_id', '=', $user_id],
            ['create_time', '>=', $startDay],
            ['create_time', '<', $endDay]
        ])->count('id');
        $surplus = $config['limit'] - $recordCount;
        $surplus = $surplus <= 0 ? 0 : $surplus;

        // 获取历史抽奖记录列表
        $record = LuckdrawRecord::order('id', 'desc')
            ->where('prize_type', '<>', Luckdraw::PRIZE_NOT_WIN)
            ->with('user')
            ->append(['prize_name'])
            ->limit(20)->select();

        $recordData = [];

        foreach ($record as $item) {
            $nickname = self::hideStar($item['user']['nickname']);
            $recordData[] = [
                'id' => $item['id'],
                'text' => '恭喜'.$nickname.'抽中了'.Luckdraw::getPrizeNameDesc($item['prize_type'], $item['number']),
                'create_time' => $item['create_time'],
            ];
        }

        $model = new Luckdraw();
        $lists =  $model->field('id,prize_type,name,image,number')
            ->order(['sort'=>'desc'])
            ->where($where)->limit(8)
            ->select();

        foreach ($lists as &$item) {
            $item['url'] = $item['image'] ? UrlServer::getFileUrl($item['image']) : '';
            if ($item['prize_type'] == 1) {
                $item['name'] = $item['number'].$item['name'];
            }
            unset($item['image']);
            unset($item['prize_type']);
        }

        $prizeData = [];
        for ($i=0; $i<8; $i++) {
            if (!empty($lists[$i])) {
                if ($i == 4) {
                    $prizeData[] = ['name' => self::getPrizeBtn($config['need'])];
                }
                $prizeData[] = $lists[$i];
            } else {
                $prizeData[] = json_decode("{}");
            }
        }

        $user = User::findOrEmpty($user_id);

        return [
            'user_integral' => $user['user_integral'],
            'config' => $config,
            'surplus' => $surplus,
            'record' => $recordData,
            'list' => $prizeData
        ];
    }

    /**
     * Notes: 获取用户抽奖记录
     * @param $user_id
     * @param $page
     * @param $size
     * @author 张无忌(2021/1/26 16:13)
     * @return array
     */
    public static function getUserRecord($user_id, $page, $size)
    {
        $count = LuckdrawRecord::where(['user_id'=>(int)$user_id])->count();
        $record = LuckdrawRecord::order('id', 'desc')
            ->where(['user_id'=>(int)$user_id])
            ->order('id', 'desc')
            ->page($page, $size)
            ->select();

        foreach ($record as &$item) {
            $item['prize_image'] = $item['prize_image'] ? UrlServer::getFileUrl($item['prize_image']) : '';
            $item['send_tips'] = !$item['is_send'] && $item['prize_type'] != Luckdraw::PRIZE_NOT_WIN ? '自动领取失败，请联系客服人员' : '';
            $item['need_tips'] = !empty($item['need_integral']) ? '-'.$item['need_integral'].'积分': '';
        }

        return [
            'list'      => $record,
            'count'     => $count,
            'page_no'   => $page,
            'page_size' => $size,
            'more'      => is_more($count, $page, $size)
        ];
    }

    /**
     * Notes: 抽奖逻辑开始
     * @author 张无忌(2021/1/26 17:00)
     * @param $user_id
     * @return array|bool
     */
    public static function draw($user_id)
    {
        Db::startTrans();
        try {
            // 每次抽奖需要消耗积分
            $need = ConfigServer::get('luckdraw', 'need', 0);

            // 扣减积分
            if ($need > 0) {
                User::where(['id' => $user_id])->setDec('user_integral', $need);
                AccountLogLogic::AccountRecord(
                    $user_id, $need, 2,
                    AccountLog::luck_draw_dec_integral,
                    AccountLog::getAcccountDesc(AccountLog::luck_draw_dec_integral)
                );
            }

            // 中奖奖品
            $inPrize = self::randomLottery();

            // 分析奖品类型,如(积分,优惠券,余额等),给用户增加对应获得的奖品
            $sendPrizeInfo = self::sendPrize($inPrize, $user_id);

            // 记录获得奖品信息
            LuckdrawRecord::create([
                'user_id'     => $user_id,
                'prize_id'    => $inPrize['id'],
                'prize_type'  => $inPrize['prize_type'],
                'prize_name'  => $inPrize['name'],
                'prize_image' => $inPrize['image'],
                'number'      => $inPrize['number'],
                'is_send'     => $sendPrizeInfo['flag'] ? 1 : 0,
                'remark'      => $sendPrizeInfo['tips'] ?? '',
                'need_integral' => $need,
                'create_time' => time(),
            ]);

            Db::commit();

            $text = '恭喜您获得' . Luckdraw::getPrizeNameDesc($inPrize['prize_type'], $inPrize['number']);

            // 返回抽奖结果
            return [
                'id'          => $inPrize['id'],
                'name'        => $inPrize['name'],
                'image'       => UrlServer::getFileUrl($inPrize['image']),
                'number'      => $inPrize['number'],
                'text'        => $text,
                'create_time' => date('Y-m-d H:i:s', time()),
                'error'       => $sendPrizeInfo['flag'] ? '' : '自动领取失败,请联系客服'
            ];

        } catch (\Exception $e) {
            Db::rollback();
            static::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * Notes: 取出中奖的奖品
     * @param $prize_arr
     * @author 张无忌(2021/1/26 18:37)
     * @return int|mixed
     */
    public static function getPrizeRange($prize_arr)
    {
        $rid = 0; //中奖的产品ID
        $weight = 0; //中奖几率 (所有商品累计)
        foreach ($prize_arr as $val) {
            $weight += $val['probability']; //概率数组的总概率精度
        }

        shuffle($prize_arr);
        foreach ($prize_arr as $key => $value) {
            $randNum = mt_rand(1, $weight);
            if ($randNum <= $value['probability']) {      // 1    2   3   200
                $rid = $value['id'];
                break;
            } else {
                $weight -= $value['probability'];
            }
        }
        return $rid; //中奖项
    }

    // 截取字符串
    private static function hideStar($str)
    {
        if (mb_strlen($str) >= 3) {
            return '**' . mb_substr($str, 2);
        }
        if (mb_strlen($str) == 1) {
            return '**' . $str;
        }
        if (mb_strlen($str) == 2) {
            return '**' . mb_substr($str, 1);
        }
        return $str;
    }


    /**
     * @notes 随机抽奖
     * @return array|mixed
     * @author 段誉
     * @date 2022/2/15 18:11
     */
    public static function randomLottery()
    {
        // 获取正在进行抽奖的商品 (倒叙获取 8个 与api接口保持一致)
        $model = new Luckdraw();
        $prize =  $model->field('id,prize_type,name,image,number,probability')
            ->order(['sort'=>'desc'])
            ->where(['is_delete'=>0, 'status'=>1])->limit(8)
            ->select()->toArray();

        // 获得中奖ID
        $rid = self::getPrizeRange($prize);

        // 根据ID获得中奖信息
        $inPrize = [];
        foreach ($prize as $item) {
            if ($item['id'] == $rid) {
                $inPrize = $item;
                break;
            }
        }
        return $inPrize;
    }


    /**
     * @notes 发送奖品
     * @param $inPrize
     * @param $user_id
     * @return array
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author 段誉
     * @date 2022/2/15 17:45
     */
    public static function sendPrize($inPrize, $user_id)
    {
        $flag = true;
        $tips = '发奖成功';

        // 中奖积分
        if ($inPrize['prize_type'] == Luckdraw::PRIZE_INTEGRAL) {
            User::where(['id' => $user_id])->setInc('user_integral', $inPrize['number']);
            AccountLogLogic::AccountRecord(
                $user_id, $inPrize['number'], 1,
                AccountLog::luck_draw_integral,
                AccountLog::getAcccountDesc(AccountLog::luck_draw_integral)
            );
        }

        // 中奖余额
        if ($inPrize['prize_type'] == Luckdraw::PRIZE_BALANCE) {
            User::where(['id' => $user_id])->setInc('user_money', $inPrize['number']);
            AccountLogLogic::AccountRecord(
                $user_id, $inPrize['number'], 1,
                AccountLog::luck_draw_inc_balance,
                AccountLog::getAcccountDesc(AccountLog::luck_draw_inc_balance)
            );
        }

        // 中奖优惠券
        if ($inPrize['prize_type'] == Luckdraw::PRIZE_COUPON) {
            $coupon = Coupon::findOrEmpty($inPrize['number'])->toArray();
            $res = self::sendCoupon($user_id, $coupon);
            if (true !== $res) {
                $flag = false;
                $tips = $res;
            }
        }
        return ['flag' => $flag, 'tips' => $tips];
    }


    /**
     * @notes 发送优惠券奖品
     * @param $user_id
     * @param $coupon
     * @return bool|string
     * @author 段誉
     * @date 2022/2/15 17:45
     */
    public static function sendCoupon($user_id, $coupon)
    {
        if ($coupon['status'] == 0) {
            return '优惠券已失效，不能发放';
        }
        // send_total_type 发送总量类型：1-不限制；2-限制张数
        if ($coupon['send_total_type'] == 2) {
            if ($coupon['send_total'] < 1) {
                return '优惠券发放总数量,超出库存数量,不能发放';
            } else {
                Coupon::update(['send_total' => ['dec', 1]], ['id' => $coupon['id']]);
            }
        }
        // 指定用户发放
        Db::name('coupon_list')->insert([
            'user_id' => $user_id,
            'coupon_id' => $coupon['id'],
            'status' => 0,
            'coupon_code' => create_coupon_code(),
            'create_time' => time(),
        ]);
        return true;
    }

    /**
     * @notes 抽奖按钮
     * @param $need_integral
     * @return string
     * @author 段誉
     * @date 2022/2/15 18:47
     */
    public static function getPrizeBtn($need_integral)
    {
        $btn = '开始抽奖';
        if ($need_integral > 0) {
            $btn = '消耗' . $need_integral . '积分';
        }
        return $btn;
    }


    /**
     * @notes 中奖列表
     * @param $params
     * @param $page
     * @param $size
     * @return array
     * @author 段誉
     * @date 2022/2/17 15:23
     */
    public static function getWinList($page, $size)
    {
        $where = [
            ['prize_type', '<>', Luckdraw::PRIZE_NOT_WIN],
        ];

        $count = LuckdrawRecord::where($where)->count();
        $lists = LuckdrawRecord::where($where)
            ->order('id', 'desc')
            ->page($page, $size)
            ->select()
            ->toArray();

        foreach ($lists as &$item) {
            $item['title'] = self::formatTitleWin($item);
            $item['prize_image'] = !empty($item['prize_image']) ? UrlServer::getFileUrl($item['prize_image']) : '';
        }

        $data = [
            'list' => $lists,
            'count' => $count,
            'page_no' => $page,
            'page_size' => $size,
            'more' => is_more($count, $page, $size)
        ];
        return $data;
    }


    /**
     * @notes 格式化中奖名单标题
     * @param $item
     * @return string
     * @author 段誉
     * @date 2022/2/17 15:23
     */
    private static function formatTitleWin($item)
    {
        $title = "恭喜";
        $userName = User::where('id', $item['user_id'])->value('nickname');
        // 隐私处理
        $userName = '**' . mb_substr($userName, -1 , 1);
        $title .= $userName . '抽中了';
        if ($item['prize_type'] == Luckdraw::PRIZE_INTEGRAL) {
            $title .= $item['number'] . '积分';
        }
        if ($item['prize_type'] == Luckdraw::PRIZE_COUPON) {
            $couponName = Coupon::where('id', $item['number'])->value('name');
            $title .= empty($couponName) ? '优惠券' : $couponName;
        }
        if ($item['prize_type'] == Luckdraw::PRIZE_BALANCE) {
            $title .= $item['number'] . '元';
        }
        return $title;
    }

}
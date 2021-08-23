<?php

namespace app\api\logic;


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
            'limit' => ConfigServer::get('luckdraw', 'limit', 0),
            'status' => ConfigServer::get('luckdraw', 'status', ''),
            'rule' => ConfigServer::get('luckdraw', 'rule', 0),
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
            ->where('prize_type', '=', 1)
            ->with('user')
            ->limit(20)->select();
        foreach ($record as &$item) {
            $nickname = self::hideStar($item['user']['nickname']);
            $item['text'] = '恭喜'.$nickname.'抽中了'.$item['number'].$item['prize_name'];
            unset($item['user_id']);
            unset($item['prize_id']);
            unset($item['prize_type']);
            unset($item['prize_name']);
            unset($item['prize_image']);
            unset($item['number']);
            unset($item['user']);
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
                    $prizeData[] = json_decode("{}");
                }
                $prizeData[] = $lists[$i];
            } else {
                $prizeData[] = json_decode("{}");
            }
        }

        return ['config'=>$config, 'surplus'=>$surplus, 'record'=>$record, 'list'=>$prizeData];
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
            if ($item['prize_type'] === 1) {
                $item['prize_name'] = $item['prize_name'].'('.$item['number'].')';
            }
        }

        $more = is_more($count, $page, $size);
        return [
            'list'      => $record,
            'count'     => $count,
            'page_no'   => $page,
            'page_size' => $size,
            'more'      => $more
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
        if (!$user_id) { static::$error = '请先登录后操作'; return false; }

        $status = ConfigServer::get('luckdraw', 'status', 0);
        if ($status == 0) {
            static::$error = '抽奖活动已结束';
            return false;
        }

        Db::startTrans();
        try {
            // 取得该用户今天抽奖次数
            // 计算用户剩余抽奖次数
            list($startDay, $endDay) = Time::today();
            $recordCount = LuckdrawRecord::where([
                ['user_id', '=', $user_id],
                ['create_time', '>=', $startDay],
                ['create_time', '<', $endDay]
            ])->count('id');
            $limit = ConfigServer::get('luckdraw', 'limit', 0);
            $surplus = $limit - $recordCount;
            $surplus = $surplus <= 0 ? 0 : $surplus;

            if ($surplus <= 0) {
                static::$error = '今天抽奖次数已用完';
                return false;
            }

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

            // 记录获得奖品信息
            LuckdrawRecord::create([
                'user_id'     => $user_id,
                'prize_id'    => $inPrize['id'],
                'prize_type'  => $inPrize['prize_type'],
                'prize_name'  => $inPrize['name'],
                'prize_image' => $inPrize['image'],
                'number'      => $inPrize['number'],
                'create_time' => time(),
            ]);

            // 分析奖品类型,如(积分, 优惠券等),给用户怎加对应获得的奖品
            if ($inPrize['prize_type'] == 1) {
                User::where(['id' => $user_id])->setInc('user_integral', $inPrize['number']);
                AccountLogLogic::AccountRecord(
                    $user_id, $inPrize['number'], 1,
                    AccountLog::luck_draw_integral,
                    AccountLog::getAcccountDesc(AccountLog::luck_draw_integral));
            }

            Db::commit();

            $text = ['', '恭喜您获得'.$inPrize['number'].'积分', '谢谢惠顾'];
            // 返回抽奖结果
            return [
                'id'          => $inPrize['id'],
                'name'        => $inPrize['name'],
                'image'       => UrlServer::getFileUrl($inPrize['image']),
                'number'      => $inPrize['number'],
                'text'        => $text[$inPrize['prize_type']],
                'create_time' => date('Y-m-d H:i:s', time())
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
}
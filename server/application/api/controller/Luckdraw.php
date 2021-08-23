<?php

namespace app\api\controller;


use app\api\logic\LuckdrawLogic;

class Luckdraw extends ApiBase
{
    /**
     * Notes: 抽奖奖品
     * @author 张无忌(2021/1/26 16:07)
     */
    public function prize()
    {
        $lists = LuckdrawLogic::getPrize($this->user_id);
        $this->_success('OK', $lists);
    }

    /**
     * Notes: 用户抽奖记录
     * @author 张无忌(2021/1/26 16:14)
     */
    public function record()
    {
        $lists = LuckdrawLogic::getUserRecord($this->user_id, $this->page_no, $this->page_size);
        $this->_success('OK', $lists);
    }

    /**
     * Notes: 抽奖 start
     * @author 张无忌(2021/1/26 17:00)
     */
    public function draw()
    {
        $result = LuckdrawLogic::draw($this->user_id);
        if ($result) {
            $this->_success('OK', $result);
        }
        $error = LuckdrawLogic::getError() ?: '抽奖失败';
        $this->_error($error);
    }
}
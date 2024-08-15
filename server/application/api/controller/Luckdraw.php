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
        $check = $this->validate(['user_id' => $this->user_id],'app\api\validate\Luckdraw');
        if (true !== $check) {
            $this->_error($check);
        }
        $result = LuckdrawLogic::draw($this->user_id);
        if ($result) {
            $this->_success('OK', $result);
        }
        $error = LuckdrawLogic::getError() ?: '抽奖失败';
        $this->_error($error);
    }



    /**
     * @notes 中奖列表
     * @author 段誉
     * @date 2022/2/17 15:41
     */
    public function winList()
    {
        $result = LuckdrawLogic::getWinList($this->page_no, $this->page_size);
        $this->_success('OK', $result);
    }
}
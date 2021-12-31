<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaOperData方法 拦截情况type = 2 返回的数据结构
 *
 * @method string getDateKey() 获取时间
 * @method void setDateKey(string $DateKey) 设置时间
 * @method float getAllStopCnt() 获取停止验证数量
 * @method void setAllStopCnt(float $AllStopCnt) 设置停止验证数量
 * @method float getPicStopCnt() 获取图片停止加载数量
 * @method void setPicStopCnt(float $PicStopCnt) 设置图片停止加载数量
 * @method float getStrategyStopCnt() 获取策略拦截数量
 * @method void setStrategyStopCnt(float $StrategyStopCnt) 设置策略拦截数量
 */
class CaptchaOperDataInterceptUnit extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $DateKey;

    /**
     * @var float 停止验证数量
     */
    public $AllStopCnt;

    /**
     * @var float 图片停止加载数量
     */
    public $PicStopCnt;

    /**
     * @var float 策略拦截数量
     */
    public $StrategyStopCnt;

    /**
     * @param string $DateKey 时间
     * @param float $AllStopCnt 停止验证数量
     * @param float $PicStopCnt 图片停止加载数量
     * @param float $StrategyStopCnt 策略拦截数量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DateKey",$param) and $param["DateKey"] !== null) {
            $this->DateKey = $param["DateKey"];
        }

        if (array_key_exists("AllStopCnt",$param) and $param["AllStopCnt"] !== null) {
            $this->AllStopCnt = $param["AllStopCnt"];
        }

        if (array_key_exists("PicStopCnt",$param) and $param["PicStopCnt"] !== null) {
            $this->PicStopCnt = $param["PicStopCnt"];
        }

        if (array_key_exists("StrategyStopCnt",$param) and $param["StrategyStopCnt"] !== null) {
            $this->StrategyStopCnt = $param["StrategyStopCnt"];
        }
    }
}

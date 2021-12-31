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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvLimit返回参数结构体
 *
 * @method integer getMaxEnvNum() 获取环境总数上限
 * @method void setMaxEnvNum(integer $MaxEnvNum) 设置环境总数上限
 * @method integer getCurrentEnvNum() 获取目前环境总数
 * @method void setCurrentEnvNum(integer $CurrentEnvNum) 设置目前环境总数
 * @method integer getMaxFreeEnvNum() 获取免费环境数量上限
 * @method void setMaxFreeEnvNum(integer $MaxFreeEnvNum) 设置免费环境数量上限
 * @method integer getCurrentFreeEnvNum() 获取目前免费环境数量
 * @method void setCurrentFreeEnvNum(integer $CurrentFreeEnvNum) 设置目前免费环境数量
 * @method integer getMaxDeleteTotal() 获取总计允许销毁环境次数上限
 * @method void setMaxDeleteTotal(integer $MaxDeleteTotal) 设置总计允许销毁环境次数上限
 * @method integer getCurrentDeleteTotal() 获取目前已销毁环境次数
 * @method void setCurrentDeleteTotal(integer $CurrentDeleteTotal) 设置目前已销毁环境次数
 * @method integer getMaxDeleteMonthly() 获取每月允许销毁环境次数上限
 * @method void setMaxDeleteMonthly(integer $MaxDeleteMonthly) 设置每月允许销毁环境次数上限
 * @method integer getCurrentDeleteMonthly() 获取本月已销毁环境次数
 * @method void setCurrentDeleteMonthly(integer $CurrentDeleteMonthly) 设置本月已销毁环境次数
 * @method integer getMaxFreeTrialNum() 获取微信网关体验版可购买月份数
 * @method void setMaxFreeTrialNum(integer $MaxFreeTrialNum) 设置微信网关体验版可购买月份数
 * @method integer getCurrentFreeTrialNum() 获取微信网关体验版已购买月份数
 * @method void setCurrentFreeTrialNum(integer $CurrentFreeTrialNum) 设置微信网关体验版已购买月份数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEnvLimitResponse extends AbstractModel
{
    /**
     * @var integer 环境总数上限
     */
    public $MaxEnvNum;

    /**
     * @var integer 目前环境总数
     */
    public $CurrentEnvNum;

    /**
     * @var integer 免费环境数量上限
     */
    public $MaxFreeEnvNum;

    /**
     * @var integer 目前免费环境数量
     */
    public $CurrentFreeEnvNum;

    /**
     * @var integer 总计允许销毁环境次数上限
     */
    public $MaxDeleteTotal;

    /**
     * @var integer 目前已销毁环境次数
     */
    public $CurrentDeleteTotal;

    /**
     * @var integer 每月允许销毁环境次数上限
     */
    public $MaxDeleteMonthly;

    /**
     * @var integer 本月已销毁环境次数
     */
    public $CurrentDeleteMonthly;

    /**
     * @var integer 微信网关体验版可购买月份数
     */
    public $MaxFreeTrialNum;

    /**
     * @var integer 微信网关体验版已购买月份数
     */
    public $CurrentFreeTrialNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MaxEnvNum 环境总数上限
     * @param integer $CurrentEnvNum 目前环境总数
     * @param integer $MaxFreeEnvNum 免费环境数量上限
     * @param integer $CurrentFreeEnvNum 目前免费环境数量
     * @param integer $MaxDeleteTotal 总计允许销毁环境次数上限
     * @param integer $CurrentDeleteTotal 目前已销毁环境次数
     * @param integer $MaxDeleteMonthly 每月允许销毁环境次数上限
     * @param integer $CurrentDeleteMonthly 本月已销毁环境次数
     * @param integer $MaxFreeTrialNum 微信网关体验版可购买月份数
     * @param integer $CurrentFreeTrialNum 微信网关体验版已购买月份数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MaxEnvNum",$param) and $param["MaxEnvNum"] !== null) {
            $this->MaxEnvNum = $param["MaxEnvNum"];
        }

        if (array_key_exists("CurrentEnvNum",$param) and $param["CurrentEnvNum"] !== null) {
            $this->CurrentEnvNum = $param["CurrentEnvNum"];
        }

        if (array_key_exists("MaxFreeEnvNum",$param) and $param["MaxFreeEnvNum"] !== null) {
            $this->MaxFreeEnvNum = $param["MaxFreeEnvNum"];
        }

        if (array_key_exists("CurrentFreeEnvNum",$param) and $param["CurrentFreeEnvNum"] !== null) {
            $this->CurrentFreeEnvNum = $param["CurrentFreeEnvNum"];
        }

        if (array_key_exists("MaxDeleteTotal",$param) and $param["MaxDeleteTotal"] !== null) {
            $this->MaxDeleteTotal = $param["MaxDeleteTotal"];
        }

        if (array_key_exists("CurrentDeleteTotal",$param) and $param["CurrentDeleteTotal"] !== null) {
            $this->CurrentDeleteTotal = $param["CurrentDeleteTotal"];
        }

        if (array_key_exists("MaxDeleteMonthly",$param) and $param["MaxDeleteMonthly"] !== null) {
            $this->MaxDeleteMonthly = $param["MaxDeleteMonthly"];
        }

        if (array_key_exists("CurrentDeleteMonthly",$param) and $param["CurrentDeleteMonthly"] !== null) {
            $this->CurrentDeleteMonthly = $param["CurrentDeleteMonthly"];
        }

        if (array_key_exists("MaxFreeTrialNum",$param) and $param["MaxFreeTrialNum"] !== null) {
            $this->MaxFreeTrialNum = $param["MaxFreeTrialNum"];
        }

        if (array_key_exists("CurrentFreeTrialNum",$param) and $param["CurrentFreeTrialNum"] !== null) {
            $this->CurrentFreeTrialNum = $param["CurrentFreeTrialNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

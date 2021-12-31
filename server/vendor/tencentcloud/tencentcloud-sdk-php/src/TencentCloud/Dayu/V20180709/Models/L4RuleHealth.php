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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则健康检查参数
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method integer getEnable() 获取=1表示开启；=0表示关闭
 * @method void setEnable(integer $Enable) 设置=1表示开启；=0表示关闭
 * @method integer getTimeOut() 获取响应超时时间，单位秒
 * @method void setTimeOut(integer $TimeOut) 设置响应超时时间，单位秒
 * @method integer getInterval() 获取检测间隔时间，单位秒，必须要大于响应超时时间
 * @method void setInterval(integer $Interval) 设置检测间隔时间，单位秒，必须要大于响应超时时间
 * @method integer getKickNum() 获取不健康阈值，单位次
 * @method void setKickNum(integer $KickNum) 设置不健康阈值，单位次
 * @method integer getAliveNum() 获取健康阈值，单位次
 * @method void setAliveNum(integer $AliveNum) 设置健康阈值，单位次
 */
class L4RuleHealth extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var integer =1表示开启；=0表示关闭
     */
    public $Enable;

    /**
     * @var integer 响应超时时间，单位秒
     */
    public $TimeOut;

    /**
     * @var integer 检测间隔时间，单位秒，必须要大于响应超时时间
     */
    public $Interval;

    /**
     * @var integer 不健康阈值，单位次
     */
    public $KickNum;

    /**
     * @var integer 健康阈值，单位次
     */
    public $AliveNum;

    /**
     * @param string $RuleId 规则ID
     * @param integer $Enable =1表示开启；=0表示关闭
     * @param integer $TimeOut 响应超时时间，单位秒
     * @param integer $Interval 检测间隔时间，单位秒，必须要大于响应超时时间
     * @param integer $KickNum 不健康阈值，单位次
     * @param integer $AliveNum 健康阈值，单位次
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("KickNum",$param) and $param["KickNum"] !== null) {
            $this->KickNum = $param["KickNum"];
        }

        if (array_key_exists("AliveNum",$param) and $param["AliveNum"] !== null) {
            $this->AliveNum = $param["AliveNum"];
        }
    }
}

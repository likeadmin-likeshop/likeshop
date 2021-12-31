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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知接收者信息
 *
 * @method string getReceiverType() 获取接受者类型。可选值：
<br><li> Uin - 用户ID
<br><li> Group - 用户组ID
暂不支持其余接收者类型。
 * @method void setReceiverType(string $ReceiverType) 设置接受者类型。可选值：
<br><li> Uin - 用户ID
<br><li> Group - 用户组ID
暂不支持其余接收者类型。
 * @method array getReceiverIds() 获取接收者。
 * @method void setReceiverIds(array $ReceiverIds) 设置接收者。
 * @method array getReceiverChannels() 获取通知接收渠道。
<br><li> Email - 邮件
<br><li> Sms - 短信
<br><li> WeChat - 微信
<br><li> Phone - 电话
 * @method void setReceiverChannels(array $ReceiverChannels) 设置通知接收渠道。
<br><li> Email - 邮件
<br><li> Sms - 短信
<br><li> WeChat - 微信
<br><li> Phone - 电话
 * @method string getStartTime() 获取允许接收信息的开始时间。
 * @method void setStartTime(string $StartTime) 设置允许接收信息的开始时间。
 * @method string getEndTime() 获取允许接收信息的结束时间。
 * @method void setEndTime(string $EndTime) 设置允许接收信息的结束时间。
 * @method integer getIndex() 获取位序
 * @method void setIndex(integer $Index) 设置位序
 */
class NoticeReceiver extends AbstractModel
{
    /**
     * @var string 接受者类型。可选值：
<br><li> Uin - 用户ID
<br><li> Group - 用户组ID
暂不支持其余接收者类型。
     */
    public $ReceiverType;

    /**
     * @var array 接收者。
     */
    public $ReceiverIds;

    /**
     * @var array 通知接收渠道。
<br><li> Email - 邮件
<br><li> Sms - 短信
<br><li> WeChat - 微信
<br><li> Phone - 电话
     */
    public $ReceiverChannels;

    /**
     * @var string 允许接收信息的开始时间。
     */
    public $StartTime;

    /**
     * @var string 允许接收信息的结束时间。
     */
    public $EndTime;

    /**
     * @var integer 位序
     */
    public $Index;

    /**
     * @param string $ReceiverType 接受者类型。可选值：
<br><li> Uin - 用户ID
<br><li> Group - 用户组ID
暂不支持其余接收者类型。
     * @param array $ReceiverIds 接收者。
     * @param array $ReceiverChannels 通知接收渠道。
<br><li> Email - 邮件
<br><li> Sms - 短信
<br><li> WeChat - 微信
<br><li> Phone - 电话
     * @param string $StartTime 允许接收信息的开始时间。
     * @param string $EndTime 允许接收信息的结束时间。
     * @param integer $Index 位序
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("ReceiverIds",$param) and $param["ReceiverIds"] !== null) {
            $this->ReceiverIds = $param["ReceiverIds"];
        }

        if (array_key_exists("ReceiverChannels",$param) and $param["ReceiverChannels"] !== null) {
            $this->ReceiverChannels = $param["ReceiverChannels"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}

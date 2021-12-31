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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息类输出公共参数
 *
 * @method integer getAppID() 获取接入业务的唯一ID
 * @method void setAppID(integer $AppID) 设置接入业务的唯一ID
 * @method integer getBUCtrlID() 获取接口唯一ID，旁路调用接口返回有该字段，标识唯一接口
 * @method void setBUCtrlID(integer $BUCtrlID) 设置接口唯一ID，旁路调用接口返回有该字段，标识唯一接口
 * @method integer getSendTime() 获取消息发送时间
 * @method void setSendTime(integer $SendTime) 设置消息发送时间
 * @method integer getUin() 获取请求字段里的Common.Uin
 * @method void setUin(integer $Uin) 设置请求字段里的Common.Uin
 */
class TextOutputComm extends AbstractModel
{
    /**
     * @var integer 接入业务的唯一ID
     */
    public $AppID;

    /**
     * @var integer 接口唯一ID，旁路调用接口返回有该字段，标识唯一接口
     */
    public $BUCtrlID;

    /**
     * @var integer 消息发送时间
     */
    public $SendTime;

    /**
     * @var integer 请求字段里的Common.Uin
     */
    public $Uin;

    /**
     * @param integer $AppID 接入业务的唯一ID
     * @param integer $BUCtrlID 接口唯一ID，旁路调用接口返回有该字段，标识唯一接口
     * @param integer $SendTime 消息发送时间
     * @param integer $Uin 请求字段里的Common.Uin
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("BUCtrlID",$param) and $param["BUCtrlID"] !== null) {
            $this->BUCtrlID = $param["BUCtrlID"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}

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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendOnlineMsg请求参数结构体
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method boolean getWakeup() 获取如果设备处于休眠状态，是否唤醒设备
 * @method void setWakeup(boolean $Wakeup) 设置如果设备处于休眠状态，是否唤醒设备
 * @method integer getWaitResp() 获取等待回应类型
0：不等待设备回应直接响应请求;
1：要求设备确认消息已接收,或等待超时后返回;
2：要求设备进行响应处理,收到设备的响应数据后,将设备响应数据回应给请求方;
 * @method void setWaitResp(integer $WaitResp) 设置等待回应类型
0：不等待设备回应直接响应请求;
1：要求设备确认消息已接收,或等待超时后返回;
2：要求设备进行响应处理,收到设备的响应数据后,将设备响应数据回应给请求方;
 * @method string getMsgTopic() 获取消息主题
 * @method void setMsgTopic(string $MsgTopic) 设置消息主题
 * @method string getMsgContent() 获取消息内容，最大长度不超过8k字节
 * @method void setMsgContent(string $MsgContent) 设置消息内容，最大长度不超过8k字节
 */
class SendOnlineMsgRequest extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var boolean 如果设备处于休眠状态，是否唤醒设备
     */
    public $Wakeup;

    /**
     * @var integer 等待回应类型
0：不等待设备回应直接响应请求;
1：要求设备确认消息已接收,或等待超时后返回;
2：要求设备进行响应处理,收到设备的响应数据后,将设备响应数据回应给请求方;
     */
    public $WaitResp;

    /**
     * @var string 消息主题
     */
    public $MsgTopic;

    /**
     * @var string 消息内容，最大长度不超过8k字节
     */
    public $MsgContent;

    /**
     * @param string $Tid 设备TID
     * @param boolean $Wakeup 如果设备处于休眠状态，是否唤醒设备
     * @param integer $WaitResp 等待回应类型
0：不等待设备回应直接响应请求;
1：要求设备确认消息已接收,或等待超时后返回;
2：要求设备进行响应处理,收到设备的响应数据后,将设备响应数据回应给请求方;
     * @param string $MsgTopic 消息主题
     * @param string $MsgContent 消息内容，最大长度不超过8k字节
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("Wakeup",$param) and $param["Wakeup"] !== null) {
            $this->Wakeup = $param["Wakeup"];
        }

        if (array_key_exists("WaitResp",$param) and $param["WaitResp"] !== null) {
            $this->WaitResp = $param["WaitResp"];
        }

        if (array_key_exists("MsgTopic",$param) and $param["MsgTopic"] !== null) {
            $this->MsgTopic = $param["MsgTopic"];
        }

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }
    }
}

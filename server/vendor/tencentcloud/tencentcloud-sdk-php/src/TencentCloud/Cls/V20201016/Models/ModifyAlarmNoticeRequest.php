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
 * ModifyAlarmNotice请求参数结构体
 *
 * @method string getAlarmNoticeId() 获取告警通知模板ID。
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置告警通知模板ID。
 * @method string getName() 获取告警模板名称。
 * @method void setName(string $Name) 设置告警模板名称。
 * @method string getType() 获取告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
 * @method void setType(string $Type) 设置告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
 * @method array getNoticeReceivers() 获取告警模板接收者信息。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置告警模板接收者信息。
 * @method array getWebCallbacks() 获取告警模板回调信息。
 * @method void setWebCallbacks(array $WebCallbacks) 设置告警模板回调信息。
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string 告警通知模板ID。
     */
    public $AlarmNoticeId;

    /**
     * @var string 告警模板名称。
     */
    public $Name;

    /**
     * @var string 告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
     */
    public $Type;

    /**
     * @var array 告警模板接收者信息。
     */
    public $NoticeReceivers;

    /**
     * @var array 告警模板回调信息。
     */
    public $WebCallbacks;

    /**
     * @param string $AlarmNoticeId 告警通知模板ID。
     * @param string $Name 告警模板名称。
     * @param string $Type 告警模板的类型。可选值：
<br><li> Trigger - 告警触发
<br><li> Recovery - 告警恢复
<br><li> All - 告警触发和告警恢复
     * @param array $NoticeReceivers 告警模板接收者信息。
     * @param array $WebCallbacks 告警模板回调信息。
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }
    }
}

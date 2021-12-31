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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmReceivers请求参数结构体
 *
 * @method integer getGroupId() 获取需要修改接收人的策略组Id
 * @method void setGroupId(integer $GroupId) 设置需要修改接收人的策略组Id
 * @method string getModule() 获取必填。固定为“monitor”
 * @method void setModule(string $Module) 设置必填。固定为“monitor”
 * @method array getReceiverInfos() 获取新接收人信息, 没有填写则删除所有接收人
 * @method void setReceiverInfos(array $ReceiverInfos) 设置新接收人信息, 没有填写则删除所有接收人
 */
class ModifyAlarmReceiversRequest extends AbstractModel
{
    /**
     * @var integer 需要修改接收人的策略组Id
     */
    public $GroupId;

    /**
     * @var string 必填。固定为“monitor”
     */
    public $Module;

    /**
     * @var array 新接收人信息, 没有填写则删除所有接收人
     */
    public $ReceiverInfos;

    /**
     * @param integer $GroupId 需要修改接收人的策略组Id
     * @param string $Module 必填。固定为“monitor”
     * @param array $ReceiverInfos 新接收人信息, 没有填写则删除所有接收人
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new ReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }
    }
}

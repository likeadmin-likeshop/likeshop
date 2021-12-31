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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstanceVersion请求参数结构体
 *
 * @method string getTargetInstanceType() 获取目标实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type，即实例要变更的目标类型
 * @method void setTargetInstanceType(string $TargetInstanceType) 设置目标实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type，即实例要变更的目标类型
 * @method integer getSwitchOption() 获取切换模式：1-维护时间窗切换，2-立即切换
 * @method void setSwitchOption(integer $SwitchOption) 设置切换模式：1-维护时间窗切换，2-立即切换
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class UpgradeInstanceVersionRequest extends AbstractModel
{
    /**
     * @var string 目标实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type，即实例要变更的目标类型
     */
    public $TargetInstanceType;

    /**
     * @var integer 切换模式：1-维护时间窗切换，2-立即切换
     */
    public $SwitchOption;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param string $TargetInstanceType 目标实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type，即实例要变更的目标类型
     * @param integer $SwitchOption 切换模式：1-维护时间窗切换，2-立即切换
     * @param string $InstanceId 实例ID
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
        if (array_key_exists("TargetInstanceType",$param) and $param["TargetInstanceType"] !== null) {
            $this->TargetInstanceType = $param["TargetInstanceType"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}

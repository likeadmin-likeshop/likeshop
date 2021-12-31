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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopInstances请求参数结构体
 *
 * @method array getInstanceIdSet() 获取需要关机的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置需要关机的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
 * @method boolean getForceStop() 获取是否在正常关闭失败后选择强制关闭实例，默认为false，即否。
 * @method void setForceStop(boolean $ForceStop) 设置是否在正常关闭失败后选择强制关闭实例，默认为false，即否。
 * @method string getStopType() 获取实例的关闭模式。取值范围：
SOFT_FIRST：表示在正常关闭失败后进行强制关闭;
HARD：直接强制关闭;
SOFT：仅软关机；
默认为SOFT。
 * @method void setStopType(string $StopType) 设置实例的关闭模式。取值范围：
SOFT_FIRST：表示在正常关闭失败后进行强制关闭;
HARD：直接强制关闭;
SOFT：仅软关机；
默认为SOFT。
 */
class StopInstancesRequest extends AbstractModel
{
    /**
     * @var array 需要关机的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
     */
    public $InstanceIdSet;

    /**
     * @var boolean 是否在正常关闭失败后选择强制关闭实例，默认为false，即否。
     */
    public $ForceStop;

    /**
     * @var string 实例的关闭模式。取值范围：
SOFT_FIRST：表示在正常关闭失败后进行强制关闭;
HARD：直接强制关闭;
SOFT：仅软关机；
默认为SOFT。
     */
    public $StopType;

    /**
     * @param array $InstanceIdSet 需要关机的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
     * @param boolean $ForceStop 是否在正常关闭失败后选择强制关闭实例，默认为false，即否。
     * @param string $StopType 实例的关闭模式。取值范围：
SOFT_FIRST：表示在正常关闭失败后进行强制关闭;
HARD：直接强制关闭;
SOFT：仅软关机；
默认为SOFT。
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }

        if (array_key_exists("StopType",$param) and $param["StopType"] !== null) {
            $this->StopType = $param["StopType"];
        }
    }
}

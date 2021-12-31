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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReadOnlyGroupDetails请求参数结构体
 *
 * @method string getInstanceId() 获取主实例ID，格式如：mssql-3l3fgqn7
 * @method void setInstanceId(string $InstanceId) 设置主实例ID，格式如：mssql-3l3fgqn7
 * @method string getReadOnlyGroupId() 获取只读组ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组ID
 * @method string getReadOnlyGroupName() 获取只读组名称，不填此参数，则不修改
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) 设置只读组名称，不填此参数，则不修改
 * @method integer getIsOfflineDelay() 获取是否启动超时剔除功能,0-不开启剔除功能，1-开启剔除功能，不填此参数，则不修改
 * @method void setIsOfflineDelay(integer $IsOfflineDelay) 设置是否启动超时剔除功能,0-不开启剔除功能，1-开启剔除功能，不填此参数，则不修改
 * @method integer getReadOnlyMaxDelayTime() 获取启动超时剔除功能后，使用的超时阈值，不填此参数，则不修改
 * @method void setReadOnlyMaxDelayTime(integer $ReadOnlyMaxDelayTime) 设置启动超时剔除功能后，使用的超时阈值，不填此参数，则不修改
 * @method integer getMinReadOnlyInGroup() 获取启动超时剔除功能后，只读组至少保留的只读副本数，不填此参数，则不修改
 * @method void setMinReadOnlyInGroup(integer $MinReadOnlyInGroup) 设置启动超时剔除功能后，只读组至少保留的只读副本数，不填此参数，则不修改
 * @method array getWeightPairs() 获取只读组实例权重修改集合，不填此参数，则不修改
 * @method void setWeightPairs(array $WeightPairs) 设置只读组实例权重修改集合，不填此参数，则不修改
 * @method integer getAutoWeight() 获取0-用户自定义权重（根据WeightPairs调整）,1-系统自动分配权重(WeightPairs无效)， 默认为0
 * @method void setAutoWeight(integer $AutoWeight) 设置0-用户自定义权重（根据WeightPairs调整）,1-系统自动分配权重(WeightPairs无效)， 默认为0
 * @method integer getBalanceWeight() 获取0-不重新均衡负载，1-重新均衡负载，默认为0
 * @method void setBalanceWeight(integer $BalanceWeight) 设置0-不重新均衡负载，1-重新均衡负载，默认为0
 */
class ModifyReadOnlyGroupDetailsRequest extends AbstractModel
{
    /**
     * @var string 主实例ID，格式如：mssql-3l3fgqn7
     */
    public $InstanceId;

    /**
     * @var string 只读组ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var string 只读组名称，不填此参数，则不修改
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer 是否启动超时剔除功能,0-不开启剔除功能，1-开启剔除功能，不填此参数，则不修改
     */
    public $IsOfflineDelay;

    /**
     * @var integer 启动超时剔除功能后，使用的超时阈值，不填此参数，则不修改
     */
    public $ReadOnlyMaxDelayTime;

    /**
     * @var integer 启动超时剔除功能后，只读组至少保留的只读副本数，不填此参数，则不修改
     */
    public $MinReadOnlyInGroup;

    /**
     * @var array 只读组实例权重修改集合，不填此参数，则不修改
     */
    public $WeightPairs;

    /**
     * @var integer 0-用户自定义权重（根据WeightPairs调整）,1-系统自动分配权重(WeightPairs无效)， 默认为0
     */
    public $AutoWeight;

    /**
     * @var integer 0-不重新均衡负载，1-重新均衡负载，默认为0
     */
    public $BalanceWeight;

    /**
     * @param string $InstanceId 主实例ID，格式如：mssql-3l3fgqn7
     * @param string $ReadOnlyGroupId 只读组ID
     * @param string $ReadOnlyGroupName 只读组名称，不填此参数，则不修改
     * @param integer $IsOfflineDelay 是否启动超时剔除功能,0-不开启剔除功能，1-开启剔除功能，不填此参数，则不修改
     * @param integer $ReadOnlyMaxDelayTime 启动超时剔除功能后，使用的超时阈值，不填此参数，则不修改
     * @param integer $MinReadOnlyInGroup 启动超时剔除功能后，只读组至少保留的只读副本数，不填此参数，则不修改
     * @param array $WeightPairs 只读组实例权重修改集合，不填此参数，则不修改
     * @param integer $AutoWeight 0-用户自定义权重（根据WeightPairs调整）,1-系统自动分配权重(WeightPairs无效)， 默认为0
     * @param integer $BalanceWeight 0-不重新均衡负载，1-重新均衡负载，默认为0
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("IsOfflineDelay",$param) and $param["IsOfflineDelay"] !== null) {
            $this->IsOfflineDelay = $param["IsOfflineDelay"];
        }

        if (array_key_exists("ReadOnlyMaxDelayTime",$param) and $param["ReadOnlyMaxDelayTime"] !== null) {
            $this->ReadOnlyMaxDelayTime = $param["ReadOnlyMaxDelayTime"];
        }

        if (array_key_exists("MinReadOnlyInGroup",$param) and $param["MinReadOnlyInGroup"] !== null) {
            $this->MinReadOnlyInGroup = $param["MinReadOnlyInGroup"];
        }

        if (array_key_exists("WeightPairs",$param) and $param["WeightPairs"] !== null) {
            $this->WeightPairs = [];
            foreach ($param["WeightPairs"] as $key => $value){
                $obj = new ReadOnlyInstanceWeightPair();
                $obj->deserialize($value);
                array_push($this->WeightPairs, $obj);
            }
        }

        if (array_key_exists("AutoWeight",$param) and $param["AutoWeight"] !== null) {
            $this->AutoWeight = $param["AutoWeight"];
        }

        if (array_key_exists("BalanceWeight",$param) and $param["BalanceWeight"] !== null) {
            $this->BalanceWeight = $param["BalanceWeight"];
        }
    }
}

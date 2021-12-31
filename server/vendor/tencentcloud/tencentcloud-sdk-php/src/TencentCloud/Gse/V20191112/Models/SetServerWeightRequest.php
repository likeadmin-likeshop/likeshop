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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetServerWeight请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置服务器舰队ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getWeight() 获取权重，最小值0，最大值10，默认值5
 * @method void setWeight(integer $Weight) 设置权重，最小值0，最大值10，默认值5
 */
class SetServerWeightRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队ID
     */
    public $FleetId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 权重，最小值0，最大值10，默认值5
     */
    public $Weight;

    /**
     * @param string $FleetId 服务器舰队ID
     * @param string $InstanceId 实例ID
     * @param integer $Weight 权重，最小值0，最大值10，默认值5
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}

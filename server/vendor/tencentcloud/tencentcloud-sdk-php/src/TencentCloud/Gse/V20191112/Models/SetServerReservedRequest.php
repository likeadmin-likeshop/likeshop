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
 * SetServerReserved请求参数结构体
 *
 * @method string getFleetId() 获取扩缩容配置服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置扩缩容配置服务器舰队ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getReserveValue() 获取实例是否保留, 1-保留，0-不保留,默认
 * @method void setReserveValue(integer $ReserveValue) 设置实例是否保留, 1-保留，0-不保留,默认
 */
class SetServerReservedRequest extends AbstractModel
{
    /**
     * @var string 扩缩容配置服务器舰队ID
     */
    public $FleetId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 实例是否保留, 1-保留，0-不保留,默认
     */
    public $ReserveValue;

    /**
     * @param string $FleetId 扩缩容配置服务器舰队ID
     * @param string $InstanceId 实例ID
     * @param integer $ReserveValue 实例是否保留, 1-保留，0-不保留,默认
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

        if (array_key_exists("ReserveValue",$param) and $param["ReserveValue"] !== null) {
            $this->ReserveValue = $param["ReserveValue"];
        }
    }
}

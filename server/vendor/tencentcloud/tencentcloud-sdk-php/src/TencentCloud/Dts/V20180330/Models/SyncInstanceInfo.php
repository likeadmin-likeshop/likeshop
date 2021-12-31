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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灾备同步的实例信息，记录主实例或灾备实例的信息
 *
 * @method string getRegion() 获取地域英文名，如：ap-guangzhou
 * @method void setRegion(string $Region) 设置地域英文名，如：ap-guangzhou
 * @method string getInstanceId() 获取实例短ID
 * @method void setInstanceId(string $InstanceId) 设置实例短ID
 */
class SyncInstanceInfo extends AbstractModel
{
    /**
     * @var string 地域英文名，如：ap-guangzhou
     */
    public $Region;

    /**
     * @var string 实例短ID
     */
    public $InstanceId;

    /**
     * @param string $Region 地域英文名，如：ap-guangzhou
     * @param string $InstanceId 实例短ID
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}

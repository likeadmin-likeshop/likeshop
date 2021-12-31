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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网（CCN）关联实例（Instance）对象。
 *
 * @method string getInstanceId() 获取关联实例ID。
 * @method void setInstanceId(string $InstanceId) 设置关联实例ID。
 * @method string getInstanceRegion() 获取关联实例ID所属大区，例如：ap-guangzhou。
 * @method void setInstanceRegion(string $InstanceRegion) 设置关联实例ID所属大区，例如：ap-guangzhou。
 * @method string getInstanceType() 获取关联实例类型，可选值：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
<li>`VPNGW`：VPNGW类型</li>
 * @method void setInstanceType(string $InstanceType) 设置关联实例类型，可选值：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
<li>`VPNGW`：VPNGW类型</li>
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class CcnInstance extends AbstractModel
{
    /**
     * @var string 关联实例ID。
     */
    public $InstanceId;

    /**
     * @var string 关联实例ID所属大区，例如：ap-guangzhou。
     */
    public $InstanceRegion;

    /**
     * @var string 关联实例类型，可选值：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
<li>`VPNGW`：VPNGW类型</li>
     */
    public $InstanceType;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $InstanceId 关联实例ID。
     * @param string $InstanceRegion 关联实例ID所属大区，例如：ap-guangzhou。
     * @param string $InstanceType 关联实例类型，可选值：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
<li>`VPNGW`：VPNGW类型</li>
     * @param string $Description 备注
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

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

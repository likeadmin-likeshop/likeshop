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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEipName请求参数结构体
 *
 * @method string getEipId() 获取Eip实例ID，可通过/v2/DescribeEip 接口返回字段中的 eipId获取
 * @method void setEipId(string $EipId) 设置Eip实例ID，可通过/v2/DescribeEip 接口返回字段中的 eipId获取
 * @method string getEipName() 获取EIP 实例别名
 * @method void setEipName(string $EipName) 设置EIP 实例别名
 */
class ModifyEipNameRequest extends AbstractModel
{
    /**
     * @var string Eip实例ID，可通过/v2/DescribeEip 接口返回字段中的 eipId获取
     */
    public $EipId;

    /**
     * @var string EIP 实例别名
     */
    public $EipName;

    /**
     * @param string $EipId Eip实例ID，可通过/v2/DescribeEip 接口返回字段中的 eipId获取
     * @param string $EipName EIP 实例别名
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
        if (array_key_exists("EipId",$param) and $param["EipId"] !== null) {
            $this->EipId = $param["EipId"];
        }

        if (array_key_exists("EipName",$param) and $param["EipName"] !== null) {
            $this->EipName = $param["EipName"];
        }
    }
}

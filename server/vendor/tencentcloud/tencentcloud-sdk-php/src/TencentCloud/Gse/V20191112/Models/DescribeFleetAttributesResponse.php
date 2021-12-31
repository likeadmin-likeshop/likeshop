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
 * DescribeFleetAttributes返回参数结构体
 *
 * @method array getFleetAttributes() 获取服务器舰队属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetAttributes(array $FleetAttributes) 设置服务器舰队属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取服务器舰队总数，最小值0
 * @method void setTotalCount(integer $TotalCount) 设置服务器舰队总数，最小值0
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFleetAttributesResponse extends AbstractModel
{
    /**
     * @var array 服务器舰队属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetAttributes;

    /**
     * @var integer 服务器舰队总数，最小值0
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FleetAttributes 服务器舰队属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 服务器舰队总数，最小值0
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FleetAttributes",$param) and $param["FleetAttributes"] !== null) {
            $this->FleetAttributes = [];
            foreach ($param["FleetAttributes"] as $key => $value){
                $obj = new FleetAttributes();
                $obj->deserialize($value);
                array_push($this->FleetAttributes, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

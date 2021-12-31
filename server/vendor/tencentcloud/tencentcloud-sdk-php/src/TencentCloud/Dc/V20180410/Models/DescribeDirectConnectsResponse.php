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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDirectConnects返回参数结构体
 *
 * @method array getDirectConnectSet() 获取物理专线列表。
 * @method void setDirectConnectSet(array $DirectConnectSet) 设置物理专线列表。
 * @method integer getTotalCount() 获取符合物理专线列表数量。
 * @method void setTotalCount(integer $TotalCount) 设置符合物理专线列表数量。
 * @method boolean getAllSignLaw() 获取用户名下物理专线是否都签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllSignLaw(boolean $AllSignLaw) 设置用户名下物理专线是否都签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDirectConnectsResponse extends AbstractModel
{
    /**
     * @var array 物理专线列表。
     */
    public $DirectConnectSet;

    /**
     * @var integer 符合物理专线列表数量。
     */
    public $TotalCount;

    /**
     * @var boolean 用户名下物理专线是否都签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllSignLaw;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DirectConnectSet 物理专线列表。
     * @param integer $TotalCount 符合物理专线列表数量。
     * @param boolean $AllSignLaw 用户名下物理专线是否都签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DirectConnectSet",$param) and $param["DirectConnectSet"] !== null) {
            $this->DirectConnectSet = [];
            foreach ($param["DirectConnectSet"] as $key => $value){
                $obj = new DirectConnect();
                $obj->deserialize($value);
                array_push($this->DirectConnectSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AllSignLaw",$param) and $param["AllSignLaw"] !== null) {
            $this->AllSignLaw = $param["AllSignLaw"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

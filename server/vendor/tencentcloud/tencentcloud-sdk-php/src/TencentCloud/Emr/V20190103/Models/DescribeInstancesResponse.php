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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances返回参数结构体
 *
 * @method integer getTotalCnt() 获取符合条件的实例总数。
 * @method void setTotalCnt(integer $TotalCnt) 设置符合条件的实例总数。
 * @method array getClusterList() 获取EMR实例详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterList(array $ClusterList) 设置EMR实例详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagKeys() 获取实例关联的标签键列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagKeys(array $TagKeys) 设置实例关联的标签键列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstancesResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的实例总数。
     */
    public $TotalCnt;

    /**
     * @var array EMR实例详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterList;

    /**
     * @var array 实例关联的标签键列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagKeys;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt 符合条件的实例总数。
     * @param array $ClusterList EMR实例详细信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagKeys 实例关联的标签键列表。
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("ClusterList",$param) and $param["ClusterList"] !== null) {
            $this->ClusterList = [];
            foreach ($param["ClusterList"] as $key => $value){
                $obj = new ClusterInstancesInfo();
                $obj->deserialize($value);
                array_push($this->ClusterList, $obj);
            }
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

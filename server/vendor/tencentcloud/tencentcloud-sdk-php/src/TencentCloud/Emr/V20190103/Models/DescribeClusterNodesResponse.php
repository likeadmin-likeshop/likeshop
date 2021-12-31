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
 * DescribeClusterNodes返回参数结构体
 *
 * @method integer getTotalCnt() 获取查询到的节点总数
 * @method void setTotalCnt(integer $TotalCnt) 设置查询到的节点总数
 * @method array getNodeList() 获取节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeList(array $NodeList) 设置节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagKeys() 获取用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagKeys(array $TagKeys) 设置用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHardwareResourceTypeList() 获取资源类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHardwareResourceTypeList(array $HardwareResourceTypeList) 设置资源类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterNodesResponse extends AbstractModel
{
    /**
     * @var integer 查询到的节点总数
     */
    public $TotalCnt;

    /**
     * @var array 节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeList;

    /**
     * @var array 用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagKeys;

    /**
     * @var array 资源类型列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HardwareResourceTypeList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt 查询到的节点总数
     * @param array $NodeList 节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagKeys 用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HardwareResourceTypeList 资源类型列表
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

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new NodeHardwareInfo();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("HardwareResourceTypeList",$param) and $param["HardwareResourceTypeList"] !== null) {
            $this->HardwareResourceTypeList = $param["HardwareResourceTypeList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

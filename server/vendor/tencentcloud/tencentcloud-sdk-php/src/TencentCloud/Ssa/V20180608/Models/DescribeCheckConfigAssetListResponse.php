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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCheckConfigAssetList返回参数结构体
 *
 * @method integer getTotal() 获取资产列表总数
 * @method void setTotal(integer $Total) 设置资产列表总数
 * @method array getCheckAssetsList() 获取资产列表项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckAssetsList(array $CheckAssetsList) 设置资产列表项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCheckConfigAssetListResponse extends AbstractModel
{
    /**
     * @var integer 资产列表总数
     */
    public $Total;

    /**
     * @var array 资产列表项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckAssetsList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 资产列表总数
     * @param array $CheckAssetsList 资产列表项
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CheckAssetsList",$param) and $param["CheckAssetsList"] !== null) {
            $this->CheckAssetsList = [];
            foreach ($param["CheckAssetsList"] as $key => $value){
                $obj = new CheckAssetItem();
                $obj->deserialize($value);
                array_push($this->CheckAssetsList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

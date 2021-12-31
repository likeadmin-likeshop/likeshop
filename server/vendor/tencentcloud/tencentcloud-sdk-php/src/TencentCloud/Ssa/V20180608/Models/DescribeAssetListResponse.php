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
 * DescribeAssetList返回参数结构体
 *
 * @method AssetList getAssetList() 获取资产列表
 * @method void setAssetList(AssetList $AssetList) 设置资产列表
 * @method array getAggregationData() 获取聚合数据
 * @method void setAggregationData(array $AggregationData) 设置聚合数据
 * @method array getNamespaceData() 获取命名空间数据
 * @method void setNamespaceData(array $NamespaceData) 设置命名空间数据
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetListResponse extends AbstractModel
{
    /**
     * @var AssetList 资产列表
     */
    public $AssetList;

    /**
     * @var array 聚合数据
     */
    public $AggregationData;

    /**
     * @var array 命名空间数据
     */
    public $NamespaceData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AssetList $AssetList 资产列表
     * @param array $AggregationData 聚合数据
     * @param array $NamespaceData 命名空间数据
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
        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = new AssetList();
            $this->AssetList->deserialize($param["AssetList"]);
        }

        if (array_key_exists("AggregationData",$param) and $param["AggregationData"] !== null) {
            $this->AggregationData = [];
            foreach ($param["AggregationData"] as $key => $value){
                $obj = new AggregationObj();
                $obj->deserialize($value);
                array_push($this->AggregationData, $obj);
            }
        }

        if (array_key_exists("NamespaceData",$param) and $param["NamespaceData"] !== null) {
            $this->NamespaceData = $param["NamespaceData"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

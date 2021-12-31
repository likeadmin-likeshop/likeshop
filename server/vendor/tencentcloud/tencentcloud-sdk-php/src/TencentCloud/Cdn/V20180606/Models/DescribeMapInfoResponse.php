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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMapInfo返回参数结构体
 *
 * @method array getMapInfoList() 获取映射关系数组。
 * @method void setMapInfoList(array $MapInfoList) 设置映射关系数组。
 * @method array getServerRegionRelation() 获取服务端区域id和子区域id的映射关系。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerRegionRelation(array $ServerRegionRelation) 设置服务端区域id和子区域id的映射关系。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClientRegionRelation() 获取客户端区域id和子区域id的映射关系。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientRegionRelation(array $ClientRegionRelation) 设置客户端区域id和子区域id的映射关系。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMapInfoResponse extends AbstractModel
{
    /**
     * @var array 映射关系数组。
     */
    public $MapInfoList;

    /**
     * @var array 服务端区域id和子区域id的映射关系。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerRegionRelation;

    /**
     * @var array 客户端区域id和子区域id的映射关系。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientRegionRelation;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MapInfoList 映射关系数组。
     * @param array $ServerRegionRelation 服务端区域id和子区域id的映射关系。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClientRegionRelation 客户端区域id和子区域id的映射关系。
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
        if (array_key_exists("MapInfoList",$param) and $param["MapInfoList"] !== null) {
            $this->MapInfoList = [];
            foreach ($param["MapInfoList"] as $key => $value){
                $obj = new MapInfo();
                $obj->deserialize($value);
                array_push($this->MapInfoList, $obj);
            }
        }

        if (array_key_exists("ServerRegionRelation",$param) and $param["ServerRegionRelation"] !== null) {
            $this->ServerRegionRelation = [];
            foreach ($param["ServerRegionRelation"] as $key => $value){
                $obj = new RegionMapRelation();
                $obj->deserialize($value);
                array_push($this->ServerRegionRelation, $obj);
            }
        }

        if (array_key_exists("ClientRegionRelation",$param) and $param["ClientRegionRelation"] !== null) {
            $this->ClientRegionRelation = [];
            foreach ($param["ClientRegionRelation"] as $key => $value){
                $obj = new RegionMapRelation();
                $obj->deserialize($value);
                array_push($this->ClientRegionRelation, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

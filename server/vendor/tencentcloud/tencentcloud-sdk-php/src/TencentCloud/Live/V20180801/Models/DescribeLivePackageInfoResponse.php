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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLivePackageInfo返回参数结构体
 *
 * @method array getLivePackageInfoList() 获取套餐包信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivePackageInfoList(array $LivePackageInfoList) 设置套餐包信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPackageBillMode() 获取套餐包当前计费方式:
-1: 无计费方式或获取失败
0: 无计费方式
201: 月结带宽
202: 月结流量
203: 日结带宽
204: 日结流量
205: 日结时长
206: 月结时长
304: 日结流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageBillMode(integer $PackageBillMode) 设置套餐包当前计费方式:
-1: 无计费方式或获取失败
0: 无计费方式
201: 月结带宽
202: 月结流量
203: 日结带宽
204: 日结流量
205: 日结时长
206: 月结时长
304: 日结流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPage() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPage(integer $TotalPage) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalNum() 获取数据总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(integer $TotalNum) 设置数据总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNum() 获取当前页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNum(integer $PageNum) 设置当前页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取当前每页数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置当前每页数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLivePackageInfoResponse extends AbstractModel
{
    /**
     * @var array 套餐包信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivePackageInfoList;

    /**
     * @var integer 套餐包当前计费方式:
-1: 无计费方式或获取失败
0: 无计费方式
201: 月结带宽
202: 月结流量
203: 日结带宽
204: 日结流量
205: 日结时长
206: 月结时长
304: 日结流量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageBillMode;

    /**
     * @var integer 总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPage;

    /**
     * @var integer 数据总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var integer 当前页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNum;

    /**
     * @var integer 当前每页数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LivePackageInfoList 套餐包信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PackageBillMode 套餐包当前计费方式:
-1: 无计费方式或获取失败
0: 无计费方式
201: 月结带宽
202: 月结流量
203: 日结带宽
204: 日结流量
205: 日结时长
206: 月结时长
304: 日结流量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPage 总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalNum 数据总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNum 当前页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 当前每页数量
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
        if (array_key_exists("LivePackageInfoList",$param) and $param["LivePackageInfoList"] !== null) {
            $this->LivePackageInfoList = [];
            foreach ($param["LivePackageInfoList"] as $key => $value){
                $obj = new LivePackageInfo();
                $obj->deserialize($value);
                array_push($this->LivePackageInfoList, $obj);
            }
        }

        if (array_key_exists("PackageBillMode",$param) and $param["PackageBillMode"] !== null) {
            $this->PackageBillMode = $param["PackageBillMode"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

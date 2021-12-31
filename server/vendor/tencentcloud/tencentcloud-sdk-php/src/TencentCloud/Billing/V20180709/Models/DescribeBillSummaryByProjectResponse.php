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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummaryByProject返回参数结构体
 *
 * @method integer getReady() 获取数据是否准备好，0未准备好，1准备好
 * @method void setReady(integer $Ready) 设置数据是否准备好，0未准备好，1准备好
 * @method array getSummaryOverview() 获取各项目花费分布详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummaryOverview(array $SummaryOverview) 设置各项目花费分布详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBillSummaryByProjectResponse extends AbstractModel
{
    /**
     * @var integer 数据是否准备好，0未准备好，1准备好
     */
    public $Ready;

    /**
     * @var array 各项目花费分布详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SummaryOverview;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Ready 数据是否准备好，0未准备好，1准备好
     * @param array $SummaryOverview 各项目花费分布详情
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
        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("SummaryOverview",$param) and $param["SummaryOverview"] !== null) {
            $this->SummaryOverview = [];
            foreach ($param["SummaryOverview"] as $key => $value){
                $obj = new ProjectSummaryOverviewItem();
                $obj->deserialize($value);
                array_push($this->SummaryOverview, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

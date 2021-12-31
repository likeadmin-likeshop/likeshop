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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceTags返回参数结构体
 *
 * @method integer getTotalCount() 获取结果总数
 * @method void setTotalCount(integer $TotalCount) 设置结果总数
 * @method integer getOffset() 获取数据位移偏量
 * @method void setOffset(integer $Offset) 设置数据位移偏量
 * @method integer getLimit() 获取每页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimit(integer $Limit) 设置每页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRows() 获取资源标签
 * @method void setRows(array $Rows) 设置资源标签
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceTagsResponse extends AbstractModel
{
    /**
     * @var integer 结果总数
     */
    public $TotalCount;

    /**
     * @var integer 数据位移偏量
     */
    public $Offset;

    /**
     * @var integer 每页大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limit;

    /**
     * @var array 资源标签
     */
    public $Rows;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 结果总数
     * @param integer $Offset 数据位移偏量
     * @param integer $Limit 每页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rows 资源标签
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new TagResource();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

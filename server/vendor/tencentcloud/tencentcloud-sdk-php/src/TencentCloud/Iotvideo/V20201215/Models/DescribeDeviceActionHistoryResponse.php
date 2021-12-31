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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceActionHistory返回参数结构体
 *
 * @method integer getTotalCounts() 获取总条数
 * @method void setTotalCounts(integer $TotalCounts) 设置总条数
 * @method array getActionHistories() 获取动作历史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionHistories(array $ActionHistories) 设置动作历史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContext() 获取用于标识查询结果的上下文，翻页用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContext(string $Context) 设置用于标识查询结果的上下文，翻页用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getListover() 获取搜索结果是否已经结束。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListover(boolean $Listover) 设置搜索结果是否已经结束。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceActionHistoryResponse extends AbstractModel
{
    /**
     * @var integer 总条数
     */
    public $TotalCounts;

    /**
     * @var array 动作历史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionHistories;

    /**
     * @var string 用于标识查询结果的上下文，翻页用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Context;

    /**
     * @var boolean 搜索结果是否已经结束。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Listover;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCounts 总条数
     * @param array $ActionHistories 动作历史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Context 用于标识查询结果的上下文，翻页用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Listover 搜索结果是否已经结束。
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
        if (array_key_exists("TotalCounts",$param) and $param["TotalCounts"] !== null) {
            $this->TotalCounts = $param["TotalCounts"];
        }

        if (array_key_exists("ActionHistories",$param) and $param["ActionHistories"] !== null) {
            $this->ActionHistories = [];
            foreach ($param["ActionHistories"] as $key => $value){
                $obj = new ActionHistory();
                $obj->deserialize($value);
                array_push($this->ActionHistories, $obj);
            }
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Listover",$param) and $param["Listover"] !== null) {
            $this->Listover = $param["Listover"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

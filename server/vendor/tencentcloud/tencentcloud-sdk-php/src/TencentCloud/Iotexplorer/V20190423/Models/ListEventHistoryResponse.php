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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEventHistory返回参数结构体
 *
 * @method string getContext() 获取搜索上下文, 用作查询游标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContext(string $Context) 设置搜索上下文, 用作查询游标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取搜索结果数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置搜索结果数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getListover() 获取搜索结果是否已经结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListover(boolean $Listover) 设置搜索结果是否已经结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventHistory() 获取搜集结果集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventHistory(array $EventHistory) 设置搜集结果集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListEventHistoryResponse extends AbstractModel
{
    /**
     * @var string 搜索上下文, 用作查询游标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Context;

    /**
     * @var integer 搜索结果数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var boolean 搜索结果是否已经结束
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Listover;

    /**
     * @var array 搜集结果集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventHistory;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context 搜索上下文, 用作查询游标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 搜索结果数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Listover 搜索结果是否已经结束
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventHistory 搜集结果集
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Listover",$param) and $param["Listover"] !== null) {
            $this->Listover = $param["Listover"];
        }

        if (array_key_exists("EventHistory",$param) and $param["EventHistory"] !== null) {
            $this->EventHistory = [];
            foreach ($param["EventHistory"] as $key => $value){
                $obj = new EventHistoryItem();
                $obj->deserialize($value);
                array_push($this->EventHistory, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标准输出日志列表
 *
 * @method integer getTotalCount() 获取总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContent() 获取标准输出日志列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(array $Content) 设置标准输出日志列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScrollId() 获取游标ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScrollId(string $ScrollId) 设置游标ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取查询状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置查询状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class TsfPageStdoutLogV2 extends AbstractModel
{
    /**
     * @var integer 总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 标准输出日志列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 游标ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScrollId;

    /**
     * @var string 查询状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param integer $TotalCount 总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Content 标准输出日志列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScrollId 游标ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 查询状态
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new StdoutLogV2();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("ScrollId",$param) and $param["ScrollId"] !== null) {
            $this->ScrollId = $param["ScrollId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

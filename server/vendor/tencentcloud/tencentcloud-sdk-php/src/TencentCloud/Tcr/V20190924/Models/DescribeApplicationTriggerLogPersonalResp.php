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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询应用更新触发器触发日志返回值
 *
 * @method integer getTotalCount() 获取返回总数
 * @method void setTotalCount(integer $TotalCount) 设置返回总数
 * @method array getLogInfo() 获取触发日志列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogInfo(array $LogInfo) 设置触发日志列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeApplicationTriggerLogPersonalResp extends AbstractModel
{
    /**
     * @var integer 返回总数
     */
    public $TotalCount;

    /**
     * @var array 触发日志列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogInfo;

    /**
     * @param integer $TotalCount 返回总数
     * @param array $LogInfo 触发日志列表
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

        if (array_key_exists("LogInfo",$param) and $param["LogInfo"] !== null) {
            $this->LogInfo = [];
            foreach ($param["LogInfo"] as $key => $value){
                $obj = new TriggerLogResp();
                $obj->deserialize($value);
                array_push($this->LogInfo, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateOperateLogs返回参数结构体
 *
 * @method integer getAllTotal() 获取当前查询条件日志总数。
 * @method void setAllTotal(integer $AllTotal) 设置当前查询条件日志总数。
 * @method integer getTotalCount() 获取本次请求返回的日志数量。
 * @method void setTotalCount(integer $TotalCount) 设置本次请求返回的日志数量。
 * @method array getOperateLogs() 获取证书操作日志列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateLogs(array $OperateLogs) 设置证书操作日志列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateOperateLogsResponse extends AbstractModel
{
    /**
     * @var integer 当前查询条件日志总数。
     */
    public $AllTotal;

    /**
     * @var integer 本次请求返回的日志数量。
     */
    public $TotalCount;

    /**
     * @var array 证书操作日志列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateLogs;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AllTotal 当前查询条件日志总数。
     * @param integer $TotalCount 本次请求返回的日志数量。
     * @param array $OperateLogs 证书操作日志列表。
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
        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("OperateLogs",$param) and $param["OperateLogs"] !== null) {
            $this->OperateLogs = [];
            foreach ($param["OperateLogs"] as $key => $value){
                $obj = new OperationLog();
                $obj->deserialize($value);
                array_push($this->OperateLogs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryBalance返回参数结构体
 *
 * @method string getResultCount() 获取本次交易返回查询结果记录数
 * @method void setResultCount(string $ResultCount) 设置本次交易返回查询结果记录数
 * @method string getStartRecordOffset() 获取起始记录号
 * @method void setStartRecordOffset(string $StartRecordOffset) 设置起始记录号
 * @method string getEndFlag() 获取结束标志
 * @method void setEndFlag(string $EndFlag) 设置结束标志
 * @method string getTotalCount() 获取符合业务查询条件的记录总数
 * @method void setTotalCount(string $TotalCount) 设置符合业务查询条件的记录总数
 * @method array getQueryItems() 获取查询结果项
 * @method void setQueryItems(array $QueryItems) 设置查询结果项
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryBalanceResponse extends AbstractModel
{
    /**
     * @var string 本次交易返回查询结果记录数
     */
    public $ResultCount;

    /**
     * @var string 起始记录号
     */
    public $StartRecordOffset;

    /**
     * @var string 结束标志
     */
    public $EndFlag;

    /**
     * @var string 符合业务查询条件的记录总数
     */
    public $TotalCount;

    /**
     * @var array 查询结果项
     */
    public $QueryItems;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResultCount 本次交易返回查询结果记录数
     * @param string $StartRecordOffset 起始记录号
     * @param string $EndFlag 结束标志
     * @param string $TotalCount 符合业务查询条件的记录总数
     * @param array $QueryItems 查询结果项
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
        if (array_key_exists("ResultCount",$param) and $param["ResultCount"] !== null) {
            $this->ResultCount = $param["ResultCount"];
        }

        if (array_key_exists("StartRecordOffset",$param) and $param["StartRecordOffset"] !== null) {
            $this->StartRecordOffset = $param["StartRecordOffset"];
        }

        if (array_key_exists("EndFlag",$param) and $param["EndFlag"] !== null) {
            $this->EndFlag = $param["EndFlag"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("QueryItems",$param) and $param["QueryItems"] !== null) {
            $this->QueryItems = [];
            foreach ($param["QueryItems"] as $key => $value){
                $obj = new QueryItem();
                $obj->deserialize($value);
                array_push($this->QueryItems, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

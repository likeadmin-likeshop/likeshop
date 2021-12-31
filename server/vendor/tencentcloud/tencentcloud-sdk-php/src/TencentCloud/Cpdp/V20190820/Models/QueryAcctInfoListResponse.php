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
 * QueryAcctInfoList返回参数结构体
 *
 * @method integer getResultCount() 获取本次交易返回查询结果记录数
 * @method void setResultCount(integer $ResultCount) 设置本次交易返回查询结果记录数
 * @method integer getTotalCount() 获取符合业务查询条件的记录总数
 * @method void setTotalCount(integer $TotalCount) 设置符合业务查询条件的记录总数
 * @method array getQueryAcctItems() 获取查询结果项 [object,object]
 * @method void setQueryAcctItems(array $QueryAcctItems) 设置查询结果项 [object,object]
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryAcctInfoListResponse extends AbstractModel
{
    /**
     * @var integer 本次交易返回查询结果记录数
     */
    public $ResultCount;

    /**
     * @var integer 符合业务查询条件的记录总数
     */
    public $TotalCount;

    /**
     * @var array 查询结果项 [object,object]
     */
    public $QueryAcctItems;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ResultCount 本次交易返回查询结果记录数
     * @param integer $TotalCount 符合业务查询条件的记录总数
     * @param array $QueryAcctItems 查询结果项 [object,object]
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

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("QueryAcctItems",$param) and $param["QueryAcctItems"] !== null) {
            $this->QueryAcctItems = [];
            foreach ($param["QueryAcctItems"] as $key => $value){
                $obj = new QueryAcctItem();
                $obj->deserialize($value);
                array_push($this->QueryAcctItems, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

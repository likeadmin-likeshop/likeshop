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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSlowLogs返回参数结构体
 *
 * @method array getData() 获取慢查询日志数据
 * @method void setData(array $Data) 设置慢查询日志数据
 * @method float getLockTimeSum() 获取所有语句锁时间总和
 * @method void setLockTimeSum(float $LockTimeSum) 设置所有语句锁时间总和
 * @method integer getQueryCount() 获取所有语句查询总次数
 * @method void setQueryCount(integer $QueryCount) 设置所有语句查询总次数
 * @method integer getTotal() 获取总记录数
 * @method void setTotal(integer $Total) 设置总记录数
 * @method float getQueryTimeSum() 获取所有语句查询时间总和
 * @method void setQueryTimeSum(float $QueryTimeSum) 设置所有语句查询时间总和
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBSlowLogsResponse extends AbstractModel
{
    /**
     * @var array 慢查询日志数据
     */
    public $Data;

    /**
     * @var float 所有语句锁时间总和
     */
    public $LockTimeSum;

    /**
     * @var integer 所有语句查询总次数
     */
    public $QueryCount;

    /**
     * @var integer 总记录数
     */
    public $Total;

    /**
     * @var float 所有语句查询时间总和
     */
    public $QueryTimeSum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 慢查询日志数据
     * @param float $LockTimeSum 所有语句锁时间总和
     * @param integer $QueryCount 所有语句查询总次数
     * @param integer $Total 总记录数
     * @param float $QueryTimeSum 所有语句查询时间总和
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SlowLogData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("LockTimeSum",$param) and $param["LockTimeSum"] !== null) {
            $this->LockTimeSum = $param["LockTimeSum"];
        }

        if (array_key_exists("QueryCount",$param) and $param["QueryCount"] !== null) {
            $this->QueryCount = $param["QueryCount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("QueryTimeSum",$param) and $param["QueryTimeSum"] !== null) {
            $this->QueryTimeSum = $param["QueryTimeSum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

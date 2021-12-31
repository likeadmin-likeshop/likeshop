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
 * DescribeSqlLogs返回参数结构体
 *
 * @method integer getTotalCount() 获取当前消息队列中的sql日志条目数。
 * @method void setTotalCount(integer $TotalCount) 设置当前消息队列中的sql日志条目数。
 * @method integer getStartOffset() 获取消息队列中的sql日志起始偏移。
 * @method void setStartOffset(integer $StartOffset) 设置消息队列中的sql日志起始偏移。
 * @method integer getEndOffset() 获取消息队列中的sql日志结束偏移。
 * @method void setEndOffset(integer $EndOffset) 设置消息队列中的sql日志结束偏移。
 * @method integer getOffset() 获取返回的第一条sql日志的偏移。
 * @method void setOffset(integer $Offset) 设置返回的第一条sql日志的偏移。
 * @method integer getCount() 获取返回的sql日志数量。
 * @method void setCount(integer $Count) 设置返回的sql日志数量。
 * @method array getSqlItems() 获取Sql日志列表。
 * @method void setSqlItems(array $SqlItems) 设置Sql日志列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSqlLogsResponse extends AbstractModel
{
    /**
     * @var integer 当前消息队列中的sql日志条目数。
     */
    public $TotalCount;

    /**
     * @var integer 消息队列中的sql日志起始偏移。
     */
    public $StartOffset;

    /**
     * @var integer 消息队列中的sql日志结束偏移。
     */
    public $EndOffset;

    /**
     * @var integer 返回的第一条sql日志的偏移。
     */
    public $Offset;

    /**
     * @var integer 返回的sql日志数量。
     */
    public $Count;

    /**
     * @var array Sql日志列表。
     */
    public $SqlItems;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 当前消息队列中的sql日志条目数。
     * @param integer $StartOffset 消息队列中的sql日志起始偏移。
     * @param integer $EndOffset 消息队列中的sql日志结束偏移。
     * @param integer $Offset 返回的第一条sql日志的偏移。
     * @param integer $Count 返回的sql日志数量。
     * @param array $SqlItems Sql日志列表。
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

        if (array_key_exists("StartOffset",$param) and $param["StartOffset"] !== null) {
            $this->StartOffset = $param["StartOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("SqlItems",$param) and $param["SqlItems"] !== null) {
            $this->SqlItems = [];
            foreach ($param["SqlItems"] as $key => $value){
                $obj = new SqlLogItem();
                $obj->deserialize($value);
                array_push($this->SqlItems, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryLogs返回参数结构体
 *
 * @method string getContext() 获取日志查询上下文，用于加载更多日志
 * @method void setContext(string $Context) 设置日志查询上下文，用于加载更多日志
 * @method array getLogs() 获取日志内容列表
 * @method void setLogs(array $Logs) 设置日志内容列表
 * @method boolean getListover() 获取是否已经返回所有符合条件的日志
 * @method void setListover(boolean $Listover) 设置是否已经返回所有符合条件的日志
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryLogsResponse extends AbstractModel
{
    /**
     * @var string 日志查询上下文，用于加载更多日志
     */
    public $Context;

    /**
     * @var array 日志内容列表
     */
    public $Logs;

    /**
     * @var boolean 是否已经返回所有符合条件的日志
     */
    public $Listover;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context 日志查询上下文，用于加载更多日志
     * @param array $Logs 日志内容列表
     * @param boolean $Listover 是否已经返回所有符合条件的日志
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

        if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
            $this->Logs = [];
            foreach ($param["Logs"] as $key => $value){
                $obj = new Log();
                $obj->deserialize($value);
                array_push($this->Logs, $obj);
            }
        }

        if (array_key_exists("Listover",$param) and $param["Listover"] !== null) {
            $this->Listover = $param["Listover"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
